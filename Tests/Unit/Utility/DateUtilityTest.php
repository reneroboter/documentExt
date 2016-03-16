<?php

require_once '../../../Classes/Utility/DateUtility.php';

class DateUtilityTest extends PHPUnit_Framework_TestCase
{

    public function testNormalizeWeekYear()
    {
        $week = null;
        $year = null;

        \ReneRoboter\Documentext\Utility\DateUtility::normalizeWeekYear($week, $year);
        $this->assertEquals(date('W'), $week);
        $this->assertEquals(date('Y'), $year);
    }
}
