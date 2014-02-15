<?php

class UserController extends AppController {

    public function info() {
        $this->app->render(200, array(
            'msg' => 'Welcome to the API'));
    }

    public function login() {
        $var = $_POST;
        // set login credentials
        $credentials = array(
            'email' => $var['Email'],
            'password' => $var['Password'],
        );
        if (isset($var['Remember']))
            $remember = true;
        else
            $remember = false;
        // authenticate
        try {
            $currentUser = Cartalyst\Sentry\Facades\Native\Sentry::
                    authenticate($credentials, $remember);
        } catch (Exception $e) {
            $this->app->render(400, array(
                'msg' => 'Authentication error: ' . $e->getMessage()
            ));
        }

        $this->app->render(200, array(
            'msg' => 'Logged in as ' . $currentUser->getLogin(),'user' => $currentUser->toArray()
        ));
    }

    public function logout() {
        Cartalyst\Sentry\Facades\Native\Sentry::logout();
        $this->app->render(200, array(
            'msg' => 'Logged out'
        ));
    }
    
    public function getLoggedInUser(){
        // check if user logged in
        if (Cartalyst\Sentry\Facades\Native\Sentry::check()) {
            $this->app->render(200, array(
                'user' => $this->currentUser->toArray()
            ));
        }else{
            $this->app->render(400, array(
                'msg' => 'Not logged in'
            ));
        }
    }

    function forgotpassword() {
        try {
            $email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
            $user = Cartalyst\Sentry\Facades\Native\Sentry::findUserByCredentials(array(
                        'email' => $email
            ));
            $code = $user->getResetPasswordCode();

            $subject = 'Your password reset code';
            $message = 'Code: ' . $code;
            $headers = 'From: webmaster@ddns.com.au';
            if (!mail($email, $subject, $message, $headers)) {
                throw new Exception('Email could not be sent.');
            }
        } catch (Exception $e) {
            $this->app->render(400, array(
                'msg' => $e->getMessage(),
            ));
        }
        
        $this->app->render(200, array(
            'msg' => "Email has been sent",
        ));
    }

    function resetpassword() {
        try {
            $email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
            $code = strip_tags($_POST['Code']);
            $email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
            $password = htmlentities($_POST['Password']);
            $password_repeat = htmlentities($_POST['ConfirmPassword']);
            if ($password != $password_repeat) {
                throw new Exception('Passwords do not match.');
            }

            $user = Cartalyst\Sentry\Facades\Native\Sentry::findUserByCredentials(array(
                        'email' => $email
            ));

            if ($user->checkResetPasswordCode($code)) {
                if ($user->attemptResetPassword($code, $password)) {
                    $message = 'Password successfully reset.';
                } else {
                    throw new Exception('User password could not be reset.');
                }
            } else {
                throw new Exception('User password could not be reset.');
            }
        } catch (Exception $e) {
            $this->app->render(400, array(
                'msg' => $e->getMessage(),
            ));
        }
        
        $this->app->render(200, array(
            'msg' => $message,
        ));
    }

    public function showList() {
        $sites = SiteQuery::create()
                ->find();

        $sitesArr = $sites->toArray();
        $this->app->render(200, array('sites' => $sitesArr)
        );
    }

    public function add() {
        $var = $_POST;

        try {
            $user = Cartalyst\Sentry\Facades\Native\Sentry::createUser(array(
                        'email' => $var['Email'],
                        'password' => $var['Password'],
                        'first_name' => $var['FirstName'],
                        'last_name' => $var['LastName'],
                        'activated' => true,
            ));
        } catch (Exception $e) {
            $this->app->render(400, array(
                'msg' => $e->getMessage(), 'error' => true
            ));
        }

        $this->app->render(200, array(
            'msg' => "You have been registered succesfully", 'error' => false
        ));
    }

}

?>
