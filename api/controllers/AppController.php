<?php
//this is the front controller
//will handle the authentication checking and authorization here

class AppController {
    protected $app;
    protected $currentUser = null;
    private $routesThatDontRequireAuth = array('/user/login','/user/login','/user/forgotpassword','/user');
    private $routesThatForAdmins = array('/admin');
    
    function AppController(){
        $this->app = \Slim\Slim::getInstance();
        
        $con = Propel::getConnection(UserPeer::DATABASE_NAME);
        Cartalyst\Sentry\Facades\Native\Sentry::setupDatabaseResolver($con);
        
        $app = $this->app;
        $this->app->hook('slim.before.dispatch', function () use ($app) {
            $route = $app->router()->getCurrentRoute();
            //die($route->getPattern()." test");
            if (!in_array($route->getPattern(), $this->routesThatDontRequireAuth)){
                if (Cartalyst\Sentry\Facades\Native\Sentry::check()){
                    $this->currentUser = Cartalyst\Sentry\Facades\Native\Sentry::getUser();
                }else{
                    //not logged in
                    //can't access this
                    $this->app->render(401, array(
                        'msg' => "Not logged in"
                    ));
                }
            }else{
                //no logged in required
            }
        });
        //check if we are logged in or not
        
    }
    
    
}

?>
