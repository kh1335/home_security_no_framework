<?php
require_once dirname(__FILE__) . '/../SensorInterface.php';

class SmokeDetector implements SensorInterface
{
    public  $name,
            $state,
            $threshold,
            $type = 'SmokeDetector',
            $units = '&#37; Visiblity';

    public function __construct($name, $threshold)
    {
        $this->name = $name;
        $this->threshold = $threshold;
        $this->setState();
    }

    /**
     * randomly sets state to 1.0-100.0
     *
     * @return void
     */
    public function setState()
    {
        $this->state = number_format(mt_rand (1, 1000) / 10, 1);
    }

    /**
     * set alarm if visiblity state <= threshold
     *
     * @return boolean
     */
    public function alarm()
    {
        if(!isset($this->state)) {
            return true;
        }

        return $this->state <= $this->threshold;
    }
}
