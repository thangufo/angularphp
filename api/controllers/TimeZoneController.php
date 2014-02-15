<?php
class TimeZoneController extends AppController {
    public function showList() {
        $zones = TimeZoneQuery::create()
            ->find();
        
        $zonesArr = $zones->toArray();
        $this->app->render(200,
            array('timezones' => $zonesArr)
        );
    }
    
}
?>
