<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../../../app/models/sensors/SmokeDetector.php';

class SmokeDetectorTest extends TestCase
{
    protected $model;

    public function setUp()
    {
        parent::setUp();

        $this->model = new SmokeDetector('Bedroom 1', 55);
    }

    /**
     * test to make sure state is between 1/1000 and 1000
     *
     * @return void
     */
    public function test_state_is_set_to_between_numbers()
    {
        $this->model->setState();

        $this->assertTrue((1/10 <= $this->model->state) && ( $this->model->state <= 1000/10));
    }

    /**
     * test to make alarm is set to true when there is no state
     *
     * @return void
     */
    public function test_alarm_is_set_to_true_with_no_state()
    {
        $this->model->state = NULL;

        $this->assertTrue($this->model->alarm());
    }

    /**
     * test to make alarm is set to true when state <= threshold (55.0)
     *
     * @return void
     */
    public function test_alarm_is_set_to_true()
    {
        $this->model->state = 10.0;

        $this->assertTrue($this->model->alarm());
    }

    /**
     * test to make alarm is set to false when state >= threshold (55.0)
     *
     * @return void
     */
    public function test_alarm_is_set_to_false()
    {
        $this->model->state = 60.0;

        $this->assertFalse($this->model->alarm());
    }
}
