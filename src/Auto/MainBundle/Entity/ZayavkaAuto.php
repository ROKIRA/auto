<?php
namespace Auto\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class ZayavkaAuto
{
    protected $user_id;
    protected $region;
    protected $mark;
    protected $model;
    protected $body;
    protected $year_from;
    protected $year_to;
    protected $color;
    protected $run_from;
    protected $run_to;
    protected $new;
    protected $vip;
    protected $price_from;
    protected $price_to;
    protected $description;
    protected $date_add;
    protected $date_update;

    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return ZayavkaAuto
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return ZayavkaAuto
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set mark
     *
     * @param string $mark
     * @return ZayavkaAuto
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return string 
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return ZayavkaAuto
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set year_from
     *
     * @param integer $year_from
     * @return ZayavkaAuto
     */
    public function setYearFrom($year_from)
    {
        $this->year_from = $year_from;

        return $this;
    }

    /**
     * Get year_from
     *
     * @return integer 
     */
    public function getYearFrom()
    {
        return $this->year_from;
    }
    
    /**
     * Set year_to
     *
     * @param integer $year_to
     * @return ZayavkaAuto
     */
    public function setYearTo($year_to)
    {
        $this->year_to = $year_to;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYearTo()
    {
        return $this->year_to;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return ZayavkaAuto
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return ZayavkaAuto
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set run_from
     *
     * @param integer $run_from
     * @return ZayavkaAuto
     */
    public function setRunFrom($run_from)
    {
        $this->run_from = $run_from;

        return $this;
    }

    /**
     * Get run_from
     *
     * @return integer 
     */
    public function getRunFrom()
    {
        return $this->run_from;
    }
    
    /**
     * Set run_to
     *
     * @param integer $run_to
     * @return ZayavkaAuto
     */
    public function setRunTo($run_to)
    {
        $this->run_to = $run_to;

        return $this;
    }

    /**
     * Get run_to
     *
     * @return integer 
     */
    public function getRunTo()
    {
        return $this->run_to;
    }

    /**
     * Set new
     *
     * @param boolean $new
     * @return ZayavkaAuto
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return boolean 
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Set vip
     *
     * @param boolean $vip
     * @return ZayavkaAuto
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return boolean 
     */
    public function getVip()
    {
        return $this->vip;
    }

    /**
     * Set price_from
     *
     * @param string $price_from
     * @return ZayavkaAuto
     */
    public function setPriceFrom($price_from)
    {
        $this->price_from = $price_from;

        return $this;
    }

    /**
     * Get price_from
     *
     * @return string 
     */
    public function getPriceFrom()
    {
        return $this->price_from;
    }

    /**
     * Set price_to
     *
     * @param string $price_to
     * @return ZayavkaAuto
     */
    public function setPriceTo($price_to)
    {
        $this->price_to = $price_to;

        return $this;
    }

    /**
     * Get price_to
     *
     * @return string 
     */
    public function getPriceTo()
    {
        return $this->price_to;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ZayavkaAuto
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date_add
     *
     * @param \DateTime $dateAdd
     * @return ZayavkaAuto
     */
    public function setDateAdd($dateAdd)
    {
        $this->date_add = $dateAdd;

        return $this;
    }

    /**
     * Get date_add
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->date_add;
    }

    /**
     * Set date_update
     *
     * @param \DateTime $dateUpdate
     * @return ZayavkaAuto
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->date_update = $dateUpdate;

        return $this;
    }

    /**
     * Get date_update
     *
     * @return \DateTime 
     */
    public function getDateUpdate()
    {
        return $this->date_update;
    }
}
