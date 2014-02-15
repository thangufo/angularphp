<?php
class CommunityController extends AppController {
    public function showList() {
        $communities = CommunityQuery::create()
            ->find();
        foreach ($communities as &$community){
            $community->getState();
            $community->getTimeZone();
        }
        
        $communitiesArr = $communities->toArray();
        $this->app->render(200,
            array('communities' => $communitiesArr)
        );
    }
    
    public function add() {
        //validate data
        $var = $_POST;
        if ($this->validate($var)){
            $community = new Community();
            $community->setName($var['Name']);
            $community->setCity($var['City']);
            $community->setStateId($var['StateId']);
            $community->setTimeZoneId($var['TimeZoneId']);
            $community->setContactname($var['Contactname']);
            $community->setContactphone($var['Contactphone']);
            $community->setContactemail($var['Contactemail']);
            $community->save();
            
            $this->app->render(200,array(
                'msg' => 'Item saved!','id' => $community->getId()
            ));
        }else{
            $this->app->render(200,array(
                'msg' => 'Invalid data!',
            ));
        }
    }
    
    public function update($id) {
        $community = CommunityQuery::create()->findOneById($id);
        
        $request = $this->app->request();
        $var = $request->put();
        
        if ($community){
            if ($this->validate($var)){
                $community->setName($var['Name']);
                $community->setCity($var['City']);
                $community->setStateId($var['StateId']);
                $community->setTimeZoneId($var['TimeZoneId']);
                $community->setContactname($var['Contactname']);
                $community->setContactphone($var['Contactphone']);
                $community->setContactemail($var['Contactemail']);
                $community->save();

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
        if (!$data['Name']) return false;
        if (!$data['City']) return false;
        return true;
    }
    
    public function delete($id) {
        $community = CommunityQuery::create()->findOneById($id);

        if ($community){
            $community->delete();
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
