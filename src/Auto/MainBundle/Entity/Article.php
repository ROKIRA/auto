<?php
namespace Auto\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Article
{
    protected $title;
    protected $description;
    protected $image;
    protected $is_active;
    protected $type;
    protected $date_add;
    protected $date_update;
    protected $is_test_drive;
    
    
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
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Article
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
     * Set image
     *
     * @param string $image
     * @return Article
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     * @return Article
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Article
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set date_add
     *
     * @param \DateTime $date_add
     * @return Article
     */
    public function setDateAdd($date_add)
    {
        $this->date_add = $date_add;

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
     * @param \DateTime $date_update
     * @return Article
     */
    public function setDateUpdate($date_update)
    {
        $this->date_update = $date_update;

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
    
    /**
     * Set is_test_drive
     *
     * @param boolean $isTestDrive
     * @return Article
     */
    public function setIsTestDrive($isTestDrive)
    {
        $this->is_test_drive = $isTestDrive;

        return $this;
    }

    /**
     * Get is_test_drive
     *
     * @return boolean 
     */
    public function getIsTestDrive()
    {
        return $this->is_test_drive;
    }
    
}
