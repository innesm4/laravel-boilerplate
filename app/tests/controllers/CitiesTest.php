<?php

use Mockery as m;
use Way\Tests\Factory;

class CitiesTest extends TestCase {

	public function setUp()
	{
		parent::setUp();

		$this->attributes = Factory::city(['id' => 1]);
		$this->app->instance('City', $this->mock);
	}

	public function tearDown()
	{
		m::close();
	}

}
