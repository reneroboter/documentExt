<?php

namespace ReneRoboter\Documentext\Utility;

class DateUtility
{

    /**
     * Normalize the week/year combination
     *
     * @param int|null $week
     * @param int|null $year
     */
    static public function normalizeWeekYear(&$week, &$year)
    {
        $week = ($week === null) ? date('W') : $week;
        $year = ($year === null) ? date('Y') : $year;

        $date = new \DateTime();
        $date->setISODate($year, $week);
        $week = $date->format('W');
        $year = $date->format('Y');

    }

}