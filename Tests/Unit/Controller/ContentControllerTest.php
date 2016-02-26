<?php
namespace ReneRoboter\Documentext\Tests\Unit\Controller;
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
 * Test case for class ReneRoboter\Documentext\Controller\ContentController.
 *
 * @author René Backhaus <rene.backhaus@hdnet.de>
 */
class ContentControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \ReneRoboter\Documentext\Controller\ContentController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('ReneRoboter\\Documentext\\Controller\\ContentController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllContentsFromRepositoryAndAssignsThemToView()
	{

		$allContents = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$contentRepository = $this->getMock('ReneRoboter\\Documentext\\Domain\\Repository\\ContentRepository', array('findAll'), array(), '', FALSE);
		$contentRepository->expects($this->once())->method('findAll')->will($this->returnValue($allContents));
		$this->inject($this->subject, 'contentRepository', $contentRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('contents', $allContents);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenContentToView()
	{
		$content = new \ReneRoboter\Documentext\Domain\Model\Content();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('content', $content);

		$this->subject->showAction($content);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenContentToContentRepository()
	{
		$content = new \ReneRoboter\Documentext\Domain\Model\Content();

		$contentRepository = $this->getMock('ReneRoboter\\Documentext\\Domain\\Repository\\ContentRepository', array('add'), array(), '', FALSE);
		$contentRepository->expects($this->once())->method('add')->with($content);
		$this->inject($this->subject, 'contentRepository', $contentRepository);

		$this->subject->createAction($content);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenContentToView()
	{
		$content = new \ReneRoboter\Documentext\Domain\Model\Content();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('content', $content);

		$this->subject->editAction($content);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenContentInContentRepository()
	{
		$content = new \ReneRoboter\Documentext\Domain\Model\Content();

		$contentRepository = $this->getMock('ReneRoboter\\Documentext\\Domain\\Repository\\ContentRepository', array('update'), array(), '', FALSE);
		$contentRepository->expects($this->once())->method('update')->with($content);
		$this->inject($this->subject, 'contentRepository', $contentRepository);

		$this->subject->updateAction($content);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenContentFromContentRepository()
	{
		$content = new \ReneRoboter\Documentext\Domain\Model\Content();

		$contentRepository = $this->getMock('ReneRoboter\\Documentext\\Domain\\Repository\\ContentRepository', array('remove'), array(), '', FALSE);
		$contentRepository->expects($this->once())->method('remove')->with($content);
		$this->inject($this->subject, 'contentRepository', $contentRepository);

		$this->subject->deleteAction($content);
	}
}
