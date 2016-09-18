<?php
require_once dirname(__FILE__) . '/../models/sensors/Door.php';
require_once dirname(__FILE__) . '/../models/sensors/GlassBreak.php';
require_once dirname(__FILE__) . '/../models/sensors/SmokeDetector.php';
require_once dirname(__FILE__) . '/../models/sensors/Temperature.php';

class SensorsController
{
    /**
     * gets a list of all sensors
     *
     * @return view
     */
    public function index()
    {
        // get all sensors
        $sensors = array(
            new Temperature('Kitchen Temperature', NULL, 80),
            new Temperature('Basement Temperature', 32, 80),
            new Door('Front Door', 'Opened'),
            new Door('Back Door', 'Opened'),
            new GlassBreak('Basement', 556),
            new GlassBreak('Main Floor', 556),
            new GlassBreak('Main Floor', 556),
            new SmokeDetector('Bedroom 1', 55),
            new SmokeDetector('Bedroom 2', 55),
            new SmokeDetector('Hallway', 55)
        );

        return $sensors;
    }
}
