<?php
class OrganizationController extends AppController {
    public function showList() {
        $organizations = SchoolQuery::create()
            ->find();
        foreach ($organizations as &$organization){
            $organization->getState();
            $organization->getContact();
            $organization->getCommunity();
            $organization->getUser();
            $organization->getTimeZone();
        }
        
        $organizationsArr = $organizations->toArray();
        $this->app->render(200,
            array('organizations' => $organizationsArr)
        );
    }
    
    public function add() {
        //validate data
        $var = $_POST;
        if ($this->validate($var)){
            //contact info
            $contact = new Contact();
            $contact->fromArray($var['Contact']);
            $contact->save();
            
            $organization = new School();
            $organization->fromArray($var);
            $organization->setContactId($contact->getId());
            $organization->save();
            
            try {
                $user = Cartalyst\Sentry\Facades\Native\Sentry::createUser(array(
                            'email' => $var['User']['Email'],
                            'password' => $var['User']['Password'],
                            'activated' => true,
                ));
            } catch (Exception $e) {
                $this->app->render(400, array(
                    'msg' => $e->getMessage(), 'error' => true
                ));
            }
            
            $this->app->render(200,array(
                'msg' => 'Item saved!','id' => $organization->getId()
            ));
        }else{
            $this->app->render(400,array(
                'msg' => 'Invalid data!',
            ));
        }
    }
    
    public function update($id) {
        $organization = SchoolQuery::create()->findOneById($id);
        
        $request = $this->app->request();
        $var = $request->put();
        
        if ($organization){
            if ($this->validate($var)){
                $organization->fromArray($var);
                $organization->save();
                
                $contact = ContactQuery::create()->findOneById($var['Contact']['Id']);
                $contact->fromArray($var['Contact']);
                $contact->save();
                
                //save user as well
                //use Sentry 2, not the Propel User model
                $user = Cartalyst\Sentry\Facades\Native\Sentry::findUserById($var['User']['Id']);
                if (isset($var['Password']))
                    $user->password = strip_tags($var['password']);
                if (!$user->save()){
                    $this->app->render(400,array(
                        'msg' => 'User could not be updated!',
                    ));
                }

                $this->app->render(200,array(
                    'msg' => 'Item saved!',
                ));
            }else{
                $this->app->render(400,array(
                    'msg' => 'Invalid data!','error' => true
                ));
            }
        }else{
            $this->app->render(400,array(
                'msg' => 'Item cannot be found!','error' => true
            ));
        }
    }
    
    private function validate($data){
        if (!$data['Schoolname']) return false;
        return true;
    }
    
    public function delete($id) {
        $organization = SchoolQuery::create()->findOneById($id);

        if ($organization){
            $organization->delete();
            $this->app->render(200,array(
                'msg' => 'Item deleted!',
            ));
        }else{
            $this->app->render(400,array(
                'msg' => 'Item cannot be found!','error' => true
            ));
        }
        
    }
}
?>
