<?php
class ContactController extends AppController {
    public function showList() {
        $contacts = ContactQuery::create()
            ->find();
        
        $contactsArr = $contacts->toArray();
        $this->app->render(200,
            array('contacts' => $contactsArr)
        );
    }
    
}
?>
