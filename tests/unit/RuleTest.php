<?php
/**
 * @author Ve Kraken Development Team
 * @license MIT
 * @copyright 2014 Ve Interactive Ltd.
 * @link http://veinteractive.com
 */

namespace Ve\LogicProcessor;

use Codeception\TestCase\Test;
use Mockery;

class RuleTest extends Test
{

	/**
	 * @var Rule
	 */
	protected $rule;

	protected function _before()
	{
		$this->rule = new Rule();
	}

	public function testGetAndSetModifier()
	{
		$modifier = Mockery::mock('Ve\LogicProcessor\AbstractModifier');

		$this->rule->setModifier($modifier);

		$this->assertEquals($modifier, $this->rule->getModifier());
	}

	public function testGetAndSetProperty()
	{
		$property = 'entity.name';

		$this->rule->setEntityProperty($property);

		$this->assertEquals($property, $this->rule->getEntityProperty());
	}

}