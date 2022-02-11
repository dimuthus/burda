<?php

// src/Url.php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="urls")
 */
class Url
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $urlId;

    /**
     * @ORM\Column(type="string")
     */
    private $urlSlug;

    /**
     * @ORM\Column(type="string")
     */
    private $headline;

    /**
     * @ORM\Column(type="string")
     */
    private $subtitle;

    /**
     * @ORM\Column(type="text")
     */
    private $introduction;

    /**
     * @ORM\Column(type="datetime", columnDefinition="TIMESTAMP DEFAULT CURRENT_TIMESTAMP")
     */
    private $displayDate;

    /**
     * @return mixed
     */
    public function getUrlId()
    {
        return $this->urlId;
    }

    /**
     * @param mixed $urlId
     */
    public function setUrlId($urlId): void
    {
        $this->urlId = $urlId;
    }

    /**
     * @return mixed
     */
    public function getUrlSlug()
    {
        return $this->urlSlug;
    }

    /**
     * @param mixed $urlSlug
     */
    public function setUrlSlug($urlSlug): void
    {
        $this->urlSlug = $urlSlug;
    }

    /**
     * @return mixed
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @param mixed $headline
     */
    public function setHeadline($headline): void
    {
        $this->headline = $headline;
    }

    /**
     * @return mixed
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param mixed $subtitle
     */
    public function setSubtitle($subtitle): void
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return mixed
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * @param mixed $introduction
     */
    public function setIntroduction($introduction): void
    {
        $this->introduction = $introduction;
    }

    /**
     * @return mixed
     */
    public function getDisplayDate()
    {
        return $this->displayDate;
    }

    /**
     * @param mixed $displayDate
     */
    public function setDisplayDate($displayDate): void
    {
        $this->displayDate = $displayDate;
    }


}