<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../../../app/models/sensors/Temperature.php';

class TemperatureTest extends TestCase
{
    protected $model;

    public function setUp()
    {
        parent::setUp();

        $this->model = new Temperature('Kitchen Temperature', 32, 80);
    }

    /**
     * test to make sure state is between 1/1000 and 1000
     *
     * @return void
     */
    public function test_state_is_set_between_numbers()
    {
        $this->model->setState();

        $this->assertTrue((-1000/10 <= $this->model->state) && ( $this->model->state <= 1000/10));
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
     * test to make alarm is set to true when state <= min_threshold (32.0)
     *
     * @return void
     */
    public function test_alarm_is_set_to_true_on_min_state()
    {
        $this->model->state = 10.0;

        $this->assertTrue($this->model->alarm());
    }

    /**
     * test to make alarm is set to true when state >= max_threshold (80.0)
     *
     * @return void
     */
    public function test_alarm_is_set_to_true_on_max_state()
    {
        $this->model->state = 100.0;

        $this->assertTrue($this->model->alarm());
    }

    /**
     * test to make alarm is set to true when state >= max_threshold (80.0)
     *
     * @return void
     */
    public function test_alarm_is_set_to_true_with_no_min_and_max()
    {
        $this->model->min_threshold = NULL;
        $this->model->state = 100.0;

        $this->assertTrue($this->model->alarm());
    }

    /**
     * test to make alarm is set to true when state <= min_threshold (32.0)
     *
     * @return void
     */
    public function test_alarm_is_set_to_true_with_min_and_no_max()
    {
        $this->model->max_threshold = NULL;
        $this->model->state = 10.0;

        $this->assertTrue($this->model->alarm());
    }

    /**
     * test to make alarm is set to true when state >= min_threshold (32.0) and state <= max_threshold (80.0)
     *
     * @return void
     */
    public function test_alarm_is_set_to_false_with_min_and_max()
    {
        $this->model->state = 75.0;

        $this->assertFalse($this->model->alarm());
    }

    /**
     * test to make alarm is set to true when state >= min_threshold (32.0)
     *
     * @return void
     */
    public function test_alarm_is_set_to_false_with_min_and_no_max()
    {
        $this->model->max_threshold = NULL;
        $this->model->state = 75.0;

        $this->assertFalse($this->model->alarm());
    }

    /**
     * test to make alarm is set to true when state <= max_threshold (80.0)
     *
     * @return void
     */
    public function test_alarm_is_set_to_false_with_no_min_and_max()
    {
        $this->model->min_threshold = NULL;
        $this->model->state = 75.0;

        $this->assertFalse($this->model->alarm());
    }
}
