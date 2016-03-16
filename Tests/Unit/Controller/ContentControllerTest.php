<?php
//namespace ReneRoboter\Documentext\Tests\Unit\Controller;

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
require_once '../../../Classes/Controller/ContentController.php';

class ContentControllerTest extends PHPUnit_Framework_TestCase
{

    private $content;

    public function setUP()
    {
        $this->content = new ContentController();
    }

    public function tearDown()
    {
        $this->content = null;
    }

    public function testGetWeekStartAndEnd()
    {
        $result = $this->getWeekStartAndEnd('10', '2016');

        $this->assertEquals($result['start'], '07.03.2016');
        $this->assertEquals($result['end'], '11.03.2016');
    }
}
