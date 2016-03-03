<?php

namespace ReneRoboter\Documentext\ViewHelpers;

class DateTranslateViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    protected $weekDays = [
        'Monday'      => 'Montag',
        'Tuesday'     => 'Dienstag',
        'Wednesday'   => 'Mittwoch',
        'Thursday'    => 'Donnerstag',
        'Friday'      => 'Freitag',
        'Saturday'    => 'Samstag',
        'Sunday'      => 'Sonntag'
    ];

    /**
     * @param \DateTime $date
     */
    public function render($date)
    {
        $week =  $date->format('l');

        return $this->weekDays[$week];
    }
}

