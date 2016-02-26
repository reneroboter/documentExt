<?php
namespace ReneRoboter\Documentext\Domain\Model;

    /***************************************************************
     *
     *  Copyright notice
     *
     *  (c) 2016 René Backhaus <rene.backhaus@hdnet.de>, HDNET GmbH & Co. KG
     *
     *  All rights reserved
     *
     *  This script is part of the TYPO3 project. The TYPO3 project is
     *  free software; you can redistribute it and/or modify
     *  it under the terms of the GNU General Public License as published by
     *  the Free Software Foundation; either version 3 of the License, or
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
 * Store the Content
 */
class Content extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * content
     *
     * @var string
     */
    protected $content = '';

    /**
     * workdayAt
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $workdayAt = null;

    /**
     * createdAt
     *
     * @var \DateTime
     */
    protected $createdAt = null;

    /**
     * updatedAt
     *
     * @var \DateTime
     */
    protected $updatedAt = null;

    /**
     * Content constructor.
     */
    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     *
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the content
     *
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the content
     *
     * @param string $content
     *
     * @return void
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Returns the workdayAt
     *
     * @return \DateTime $workdayAt
     */
    public function getWorkdayAt()
    {
        return $this->workdayAt;
    }

    /**
     * Sets the workdayAt
     *
     * @param \DateTime $workdayAt
     *
     * @return void
     */
    public function setWorkdayAt(\DateTime $workdayAt)
    {
        $this->workdayAt = $workdayAt;
    }

    /**
     * Returns the createdAt
     *
     * @return \DateTime $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets the createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return void
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns the updatedAt
     *
     * @return \DateTime $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Sets the updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return void
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

}