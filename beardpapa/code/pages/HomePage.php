<?php

/**
 * Created by PhpStorm.
 * User: xlin
 * Date: 27/07/15
 * Time: 2:18 PM
 */
class HomePage extends Page {

    public function getEvents() {
        $events = Event::get()->sort('Date');

        return $events;
    }

    public function getEventsContainer($number) {
        $events = $this->getEvents()->limit($number)->toArray();

        $eventsAll = new ArrayList();

        for ($i = 0; $i <$number; $i ++) {
            if (array_key_exists($i, $events)) {
                $eventsAll->push($events[$i]);
            } else {
                $eventsAll->push(null);
            }
        }

        return $eventsAll;
    }

}

class HomePage_Controller extends Page_Controller {

    public function init() {
        parent::init();

        Requirements::javascript(JS_DIR . '/homepage.js');
    }
}