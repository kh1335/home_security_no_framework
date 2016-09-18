<?php
require_once dirname(__FILE__) . '/../SensorInterface.php';

class Door implements SensorInterface
{
    public  $name,
            $state,
            $threshold,
            $type = 'Door';

    public function __construct($name, $threshold)
    {
        $this->name = $name;
        $this->threshold = $threshold;
        $this->setState();
    }

    /**
     * randomly sets state to Opened/Closed
     *
     * @return void
     */
    public function setState()
    {
        // get random values in array either Opened/Closed
        $options = array('Opened', 'Closed');
        $key = array_rand($options);

        $this->state = $options[$key];
    }

    /**
     * set alarm if state is equal to threshold
     *
     * @return boolean
     */
    public function alarm()
    {
        if(!isset($this->state)) {
            return true;
        }

        return $this->state == $this->threshold;
    }
}
