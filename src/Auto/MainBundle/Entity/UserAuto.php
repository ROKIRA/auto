<?php
namespace Auto\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class UserAuto
{
    protected $id_user;
    protected $id_auto;
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
     * Set id_user
     *
     * @param integer $idUser
     * @return UserAuto
     */
    public function setIdUser($idUser)
    {
        $this->id_user = $idUser;

        return $this;
    }

    /**
     * Get id_user
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set id_auto
     *
     * @param integer $idAuto
     * @return UserAuto
     */
    public function setIdAuto($idAuto)
    {
        $this->id_auto = $idAuto;

        return $this;
    }

    /**
     * Get id_auto
     *
     * @return integer 
     */
    public function getIdAuto()
    {
        return $this->id_auto;
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
