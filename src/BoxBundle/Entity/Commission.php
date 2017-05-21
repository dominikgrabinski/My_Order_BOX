<?php

namespace BoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commission
 *
 * @ORM\Table(name="commission")
 * @ORM\Entity(repositoryClass="BoxBundle\Repository\CommissionRepository")
 */
class Commission
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=150)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="KERG", type="string", length=20, unique=true)
     */
    private $kERG;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="add_date", type="datetime", nullable=true)
     */
    private $addDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="status_date", type="datetime")
     */
    private $statusDate;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="commission")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="commission")
     * @ORM\JoinColumn(name="admin_id", referencedColumnName="id")
     */
    
    private $admin;

    /**
     * @ORM\OneToOne(targetEntity="Status")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    private $status;
    
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
     * @return Commission
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
     * Set kERG
     *
     * @param string $kERG
     * @return Commission
     */
    public function setKERG($kERG)
    {
        $this->kERG = $kERG;

        return $this;
    }

    /**
     * Get kERG
     *
     * @return string 
     */
    public function getKERG()
    {
        return $this->kERG;
    }

    /**
     * Set addDate
     *
     * @param \DateTime $addDate
     * @return Commission
     */
    public function setAddDate($addDate)
    {
        $this->addDate = $addDate;

        return $this;
    }

    /**
     * Get addDate
     *
     * @return \DateTime 
     */
    public function getAddDate()
    {
        return $this->addDate;
    }

    /**
     * Set statusDate
     *
     * @param \DateTime $statusDate
     * @return Commission
     */
    public function setStatusDate($statusDate)
    {
        $this->statusDate = $statusDate;

        return $this;
    }

    /**
     * Get statusDate
     *
     * @return \DateTime 
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }
}
