<?php
namespace BoxBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * 
     */
    
    protected $address;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     * 
     */
    
    private $phone;    
    

    
    /**
     * @ORM\OneToMany(targetEntity="Commission", mappedBy="user")
     * @ORM\OneToMany(targetEntity="Commission", mappedBy="admin")
     */
    
    private $commission;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->commission = new ArrayCollection();
        // your own logic
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add commission
     *
     * @param \BoxBundle\Entity\Commission $commission
     * @return User
     */
    public function addCommission(\BoxBundle\Entity\Commission $commission)
    {
        $this->commission[] = $commission;

        return $this;
    }

    /**
     * Remove commission
     *
     * @param \BoxBundle\Entity\Commission $commission
     */
    public function removeCommission(\BoxBundle\Entity\Commission $commission)
    {
        $this->commission->removeElement($commission);
    }

    /**
     * Get commission
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommission()
    {
        return $this->commission;
    }
}
