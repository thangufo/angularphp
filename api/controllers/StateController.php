<?php
class StateController extends AppController {
    public function showList() {
        $states = StateQuery::create()
            ->find();
        
        $statesArr = $states->toArray();
        $this->app->render(200,
            array('states' => $statesArr)
        );
    }
    
}
?>
