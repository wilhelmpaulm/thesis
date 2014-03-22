<?php

use Mockery as m;
use Way\Tests\Factory;

class TransmitalAnexxesTest extends TestCase {

	public function __construct()
	{
		$this->mock = m::mock('Eloquent', 'Transmital_anexx');
		$this->collection = m::mock('Illuminate\Database\Eloquent\Collection')->shouldDeferMissing();
	}

	public function setUp()
	{
		parent::setUp();

		$this->attributes = Factory::transmital_anexx(['id' => 1]);
		$this->app->instance('Transmital_anexx', $this->mock);
	}

	public function tearDown()
	{
		m::close();
	}

	public function testIndex()
	{
		$this->mock->shouldReceive('all')->once()->andReturn($this->collection);
		$this->call('GET', 'transmital_anexxes');

		$this->assertViewHas('transmital_anexxes');
	}

	public function testCreate()
	{
		$this->call('GET', 'transmital_anexxes/create');

		$this->assertResponseOk();
	}

	public function testStore()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(true);
		$this->call('POST', 'transmital_anexxes');

		$this->assertRedirectedToRoute('transmital_anexxes.index');
	}

	public function testStoreFails()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(false);
		$this->call('POST', 'transmital_anexxes');

		$this->assertRedirectedToRoute('transmital_anexxes.create');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testShow()
	{
		$this->mock->shouldReceive('findOrFail')
				   ->with(1)
				   ->once()
				   ->andReturn($this->attributes);

		$this->call('GET', 'transmital_anexxes/1');

		$this->assertViewHas('transmital_anexx');
	}

	public function testEdit()
	{
		$this->collection->id = 1;
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->once()
				   ->andReturn($this->collection);

		$this->call('GET', 'transmital_anexxes/1/edit');

		$this->assertViewHas('transmital_anexx');
	}

	public function testUpdate()
	{
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->andReturn(m::mock(['update' => true]));

		$this->validate(true);
		$this->call('PATCH', 'transmital_anexxes/1');

		$this->assertRedirectedTo('transmital_anexxes/1');
	}

	public function testUpdateFails()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['update' => true]));
		$this->validate(false);
		$this->call('PATCH', 'transmital_anexxes/1');

		$this->assertRedirectedTo('transmital_anexxes/1/edit');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testDestroy()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['delete' => true]));

		$this->call('DELETE', 'transmital_anexxes/1');
	}

	protected function validate($bool)
	{
		Validator::shouldReceive('make')
				->once()
				->andReturn(m::mock(['passes' => $bool]));
	}
}
