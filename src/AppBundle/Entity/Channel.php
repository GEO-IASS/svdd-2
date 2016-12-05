<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Channel
 *
 * @ORM\Table(name="channel", indexes={@ORM\Index(name="FK_channel_user", columns={"owner"})})
 * @ORM\Entity
 */
class Channel
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxUsers", type="integer", nullable=true)
     */
    private $maxusers;

    /**
     * @var integer
     *
     * @ORM\Column(name="minUsers", type="integer", nullable=true)
     */
    private $minusers;

    /**
     * @var string
     *
     * @ORM\Column(name="links", type="string", length=50, nullable=true)
     */
    private $links;

    /**
     * @var string
     *
     * @ORM\Column(name="modes", type="string", length=50, nullable=true)
     */
    private $modes;

    /**
     * @var string
     *
     * @ORM\Column(name="defaulttopic", type="string", length=100, nullable=true)
     */
    private $defaulttopic;

    /**
     * @var string
     *
     * @ORM\Column(name="topicmask", type="string", length=100, nullable=true)
     */
    private $topicmask;

    /**
     * @var string
     *
     * @ORM\Column(name="greeting", type="string", length=50, nullable=true)
     */
    private $greeting;

    /**
     * @var string
     *
     * @ORM\Column(name="usergreeting", type="string", length=50, nullable=true)
     */
    private $usergreeting;

    /**
     * @var integer
     *
     * @ORM\Column(name="dynLimit", type="integer", nullable=true)
     */
    private $dynlimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="keepsync", type="integer", nullable=true)
     */
    private $keepsync;

    /**
     * @var integer
     *
     * @ORM\Column(name="nodelete", type="integer", nullable=true)
     */
    private $nodelete;

    /**
     * @var string
     *
     * @ORM\Column(name="channel", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $channel;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owner", referencedColumnName="auth")
     * })
     */
    private $owner;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", inversedBy="channel")
     * @ORM\JoinTable(name="user_stats",
     *   joinColumns={
     *     @ORM\JoinColumn(name="channel", referencedColumnName="channel")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="auth", referencedColumnName="auth")
     *   }
     * )
     */
    private $auth;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->auth = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Channel
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set maxusers
     *
     * @param integer $maxusers
     *
     * @return Channel
     */
    public function setMaxusers($maxusers)
    {
        $this->maxusers = $maxusers;

        return $this;
    }

    /**
     * Get maxusers
     *
     * @return integer
     */
    public function getMaxusers()
    {
        return $this->maxusers;
    }

    /**
     * Set minusers
     *
     * @param integer $minusers
     *
     * @return Channel
     */
    public function setMinusers($minusers)
    {
        $this->minusers = $minusers;

        return $this;
    }

    /**
     * Get minusers
     *
     * @return integer
     */
    public function getMinusers()
    {
        return $this->minusers;
    }

    /**
     * Set links
     *
     * @param string $links
     *
     * @return Channel
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Get links
     *
     * @return string
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set modes
     *
     * @param string $modes
     *
     * @return Channel
     */
    public function setModes($modes)
    {
        $this->modes = $modes;

        return $this;
    }

    /**
     * Get modes
     *
     * @return string
     */
    public function getModes()
    {
        return $this->modes;
    }

    /**
     * Set defaulttopic
     *
     * @param string $defaulttopic
     *
     * @return Channel
     */
    public function setDefaulttopic($defaulttopic)
    {
        $this->defaulttopic = $defaulttopic;

        return $this;
    }

    /**
     * Get defaulttopic
     *
     * @return string
     */
    public function getDefaulttopic()
    {
        return $this->defaulttopic;
    }

    /**
     * Set topicmask
     *
     * @param string $topicmask
     *
     * @return Channel
     */
    public function setTopicmask($topicmask)
    {
        $this->topicmask = $topicmask;

        return $this;
    }

    /**
     * Get topicmask
     *
     * @return string
     */
    public function getTopicmask()
    {
        return $this->topicmask;
    }

    /**
     * Set greeting
     *
     * @param string $greeting
     *
     * @return Channel
     */
    public function setGreeting($greeting)
    {
        $this->greeting = $greeting;

        return $this;
    }

    /**
     * Get greeting
     *
     * @return string
     */
    public function getGreeting()
    {
        return $this->greeting;
    }

    /**
     * Set usergreeting
     *
     * @param string $usergreeting
     *
     * @return Channel
     */
    public function setUsergreeting($usergreeting)
    {
        $this->usergreeting = $usergreeting;

        return $this;
    }

    /**
     * Get usergreeting
     *
     * @return string
     */
    public function getUsergreeting()
    {
        return $this->usergreeting;
    }

    /**
     * Set dynlimit
     *
     * @param integer $dynlimit
     *
     * @return Channel
     */
    public function setDynlimit($dynlimit)
    {
        $this->dynlimit = $dynlimit;

        return $this;
    }

    /**
     * Get dynlimit
     *
     * @return integer
     */
    public function getDynlimit()
    {
        return $this->dynlimit;
    }

    /**
     * Set keepsync
     *
     * @param integer $keepsync
     *
     * @return Channel
     */
    public function setKeepsync($keepsync)
    {
        $this->keepsync = $keepsync;

        return $this;
    }

    /**
     * Get keepsync
     *
     * @return integer
     */
    public function getKeepsync()
    {
        return $this->keepsync;
    }

    /**
     * Set nodelete
     *
     * @param integer $nodelete
     *
     * @return Channel
     */
    public function setNodelete($nodelete)
    {
        $this->nodelete = $nodelete;

        return $this;
    }

    /**
     * Get nodelete
     *
     * @return integer
     */
    public function getNodelete()
    {
        return $this->nodelete;
    }

    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set owner
     *
     * @param \AppBundle\Entity\User $owner
     *
     * @return Channel
     */
    public function setOwner(\AppBundle\Entity\User $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return \AppBundle\Entity\User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Add auth
     *
     * @param \AppBundle\Entity\User $auth
     *
     * @return Channel
     */
    public function addAuth(\AppBundle\Entity\User $auth)
    {
        $this->auth[] = $auth;

        return $this;
    }

    /**
     * Remove auth
     *
     * @param \AppBundle\Entity\User $auth
     */
    public function removeAuth(\AppBundle\Entity\User $auth)
    {
        $this->auth->removeElement($auth);
    }

    /**
     * Get auth
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuth()
    {
        return $this->auth;
    }
}
