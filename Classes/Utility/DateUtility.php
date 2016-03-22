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

    /**
     * @param $year
     * @param $apprenticeshipYear
     */
    static public function normalizeApprenticeshipYear($year, &$apprenticeshipYear)
    {
        switch ($year) {
            case '2016':
                $apprenticeshipYear = 1;
                break;
            case '2017':
                $apprenticeshipYear = 2;
                break;
            case '2018':
                $apprenticeshipYear = 3;
                break;
            default:
                $apprenticeshipYear = 'Du brauchst ganz schön lange für deine Ausbildung!';
                break;
        }
    }

    /**
     * @param $unix
     * @param $apprenticeshipNumber
     */
    static public function normalizeApprenticeshipNumber($unix, &$apprenticeshipNumber)
    {
        $date = new \DateTime();
        $date->setTimestamp($unix);

        if ($date->format('Y') == 2016) {
            $weekNumber = $date->format('W');
            $weekNumber = intval($weekNumber);

            $apprenticeshipNumber = $weekNumber - 4;

        } else {
            $weekNumber = $date->format('W');
            $weekNumber = intval($weekNumber);

            $apprenticeshipNumber = $weekNumber + 52;
        }
    }

}