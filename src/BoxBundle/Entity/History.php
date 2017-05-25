<?php

namespace BoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="history")
 * @ORM\Entity(repositoryClass="BoxBundle\Repository\HistoryRepository")
 */
class History
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
     * @ORM\OneToOne(targetEntity="Status")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    private $status;    
    
    /**
     * @ORM\OneToOne(targetEntity="Commission")
     * @ORM\JoinColumn(name="commission_id", referencedColumnName="id")
     */
    private $commission; 
    
    /**
     * @ORM\OneToOne(targetEntity="Commission")
     * @ORM\JoinColumn(name="title", referencedColumnName="id")
     */
    private $title;
    
    /**
     * @ORM\OneToOne(targetEntity="Commission")
     * @ORM\JoinColumn(name="status_date", referencedColumnName="id")
     */
    private $statusDate;    
    
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
     * Set status
     *
     * @param \BoxBundle\Entity\Status $status
     * @return History
     */
    public function setStatus(\BoxBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \BoxBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set commission
     *
     * @param \BoxBundle\Entity\Commission $commission
     * @return History
     */
    public function setCommission(\BoxBundle\Entity\Commission $commission = null)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return \BoxBundle\Entity\Commission 
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set title
     *
     * @param \BoxBundle\Entity\Commission $title
     * @return History
     */
    public function setTitle(\BoxBundle\Entity\Commission $title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return \BoxBundle\Entity\Commission 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set statusDate
     *
     * @param \BoxBundle\Entity\Commission $statusDate
     * @return History
     */
    public function setStatusDate(\BoxBundle\Entity\Commission $statusDate = null)
    {
        $this->statusDate = $statusDate;

        return $this;
    }

    /**
     * Get statusDate
     *
     * @return \BoxBundle\Entity\Commission 
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }
}
