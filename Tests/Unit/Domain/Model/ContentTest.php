<?php

namespace ReneRoboter\Documentext\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 René Backhaus <rene.backhaus@hdnet.de>, HDNET GmbH & Co. KG
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \ReneRoboter\Documentext\Domain\Model\Content.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author René Backhaus <rene.backhaus@hdnet.de>
 */
class ContentTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \ReneRoboter\Documentext\Domain\Model\Content
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \ReneRoboter\Documentext\Domain\Model\Content();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle()
	{
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContentReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getContent()
		);
	}

	/**
	 * @test
	 */
	public function setContentForStringSetsContent()
	{
		$this->subject->setContent('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'content',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWorkdayAtReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getWorkdayAt()
		);
	}

	/**
	 * @test
	 */
	public function setWorkdayAtForDateTimeSetsWorkdayAt()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setWorkdayAt($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'workdayAt',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCreatedAtReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getCreatedAt()
		);
	}

	/**
	 * @test
	 */
	public function setCreatedAtForDateTimeSetsCreatedAt()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setCreatedAt($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'createdAt',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUpdatedAtReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getUpdatedAt()
		);
	}

	/**
	 * @test
	 */
	public function setUpdatedAtForDateTimeSetsUpdatedAt()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setUpdatedAt($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'updatedAt',
			$this->subject
		);
	}
}
