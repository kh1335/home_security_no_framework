<?php
require_once dirname(__FILE__) . '/../SensorInterface.php';

class Temperature implements SensorInterface
{
    public  $name,
            $state,
            $min_threshold,
            $max_threshold,
            $type = 'Temperature',
            $units = '&#176;';

    public function __construct($name, $min_threshold = NULL, $max_threshold = NULL)
    {
        $this->name = $name;
        $this->min_threshold = $min_threshold;
        $this->max_threshold = $max_threshold;
        $this->setState();
    }

    /**
     * randomly sets state to -100.0-100.0
     *
     * @return void
     */
    public function setState()
    {
        $this->state = number_format(mt_rand (-1000, 1000) / 10, 1);
    }

    /**
     * set alarm if degrees state <= min_threshold or degrees state >= max_threshold
     *
     * @return boolean
     */
    public function alarm()
    {
        if(!isset($this->state)) {
            return true;
        }

        $alarm = false;

        // if min_threshold is set check if alarm should be set
        if(isset($this->min_threshold)) {
            $alarm = $this->state <= $this->min_threshold;
        }

        // if no alarm and max_threshold is set check if alarm should be set
        if(!$alarm && isset($this->max_threshold)) {
            $alarm = $this->state >= $this->max_threshold;
        }

        return $alarm;
    }
}
