<?php
require_once dirname(__FILE__) . '/../SensorInterface.php';

class GlassBreak implements SensorInterface
{

    public  $name,
            $state,
            $threshold,
            $type = 'GlassBreak',
            $units = 'hz';

    public function __construct($name, $threshold)
    {
        $this->name = $name;
        $this->threshold = $threshold;
        $this->setState();
    }

    /**
     * randomly sets state to 1.000-1000.000
     *
     * @return void
     */
    public function setState()
    {
        $this->state = number_format(mt_rand (1, 1000000) / 1000, 3);
    }

    /**
     * set alarm if hz state >= threshold
     *
     * @return boolean
     */
    public function alarm()
    {
        if(!isset($this->state)) {
            return true;
        }

        return $this->state >= $this->threshold;
    }
}
