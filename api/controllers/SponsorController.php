<?php
class SponsorController extends AppController {
    public function showList() {
        $sponsors = SponsorQuery::create()
            ->find();
        foreach ($sponsors as &$sponsor){
            $sponsor->getState();
            $sponsor->getContact();
        }
        
        $sponsorsArr = $sponsors->toArray();
        $this->app->render(200,
            array('sponsors' => $sponsorsArr)
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
            
            $sponsor = new Sponsor();
            $sponsor->fromArray($var);
            $sponsor->setContactId($contact->getId());
            $sponsor->save();
            
            $this->app->render(200,array(
                'msg' => 'Item saved!','id' => $sponsor->getId()
            ));
        }else{
            $this->app->render(200,array(
                'msg' => 'Invalid data!',
            ));
        }
    }
    
    public function update($id) {
        $sponsor = SponsorQuery::create()->findOneById($id);
        
        $request = $this->app->request();
        $var = $request->put();
        
        if ($sponsor){
            if ($this->validate($var)){
                $sponsor->fromArray($var);
                $sponsor->save();
                
                $contact = ContactQuery::create()->findOneById($var['Contact']['Id']);
                $contact->fromArray($var['Contact']);
                $contact->save();

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
        if (!$data['Sponsorname']) return false;
        return true;
    }
    
    public function delete($id) {
        $sponsor = SponsorQuery::create()->findOneById($id);

        if ($sponsor){
            $sponsor->delete();
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
