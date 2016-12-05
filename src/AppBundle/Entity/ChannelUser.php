<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChannelUser
 *
 * @ORM\Table(name="channel_user", indexes={@ORM\Index(name="FK_channel_user_channel", columns={"channel"}), @ORM\Index(name="auth", columns={"auth"})})
 * @ORM\Entity
 */
class ChannelUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="access", type="integer", nullable=true)
     */
    private $access;

    /**
     * @var integer
     *
     * @ORM\Column(name="noautoop", type="integer", nullable=true)
     */
    private $noautoop;

    /**
     * @var integer
     *
     * @ORM\Column(name="autoinvite", type="integer", nullable=true)
     */
    private $autoinvite;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=50, nullable=true)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=50, nullable=true)
     */
    private $mode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastseen", type="datetime", nullable=true)
     */
    private $lastseen;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Channel
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Channel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="channel", referencedColumnName="channel")
     * })
     */
    private $channel;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auth", referencedColumnName="auth")
     * })
     */
    private $auth;



    /**
     * Set access
     *
     * @param integer $access
     *
     * @return ChannelUser
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return integer
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set noautoop
     *
     * @param integer $noautoop
     *
     * @return ChannelUser
     */
    public function setNoautoop($noautoop)
    {
        $this->noautoop = $noautoop;

        return $this;
    }

    /**
     * Get noautoop
     *
     * @return integer
     */
    public function getNoautoop()
    {
        return $this->noautoop;
    }

    /**
     * Set autoinvite
     *
     * @param integer $autoinvite
     *
     * @return ChannelUser
     */
    public function setAutoinvite($autoinvite)
    {
        $this->autoinvite = $autoinvite;

        return $this;
    }

    /**
     * Get autoinvite
     *
     * @return integer
     */
    public function getAutoinvite()
    {
        return $this->autoinvite;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return ChannelUser
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set mode
     *
     * @param string $mode
     *
     * @return ChannelUser
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set lastseen
     *
     * @param \DateTime $lastseen
     *
     * @return ChannelUser
     */
    public function setLastseen($lastseen)
    {
        $this->lastseen = $lastseen;

        return $this;
    }

    /**
     * Get lastseen
     *
     * @return \DateTime
     */
    public function getLastseen()
    {
        return $this->lastseen;
    }

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
     * Set channel
     *
     * @param \AppBundle\Entity\Channel $channel
     *
     * @return ChannelUser
     */
    public function setChannel(\AppBundle\Entity\Channel $channel = null)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return \AppBundle\Entity\Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set auth
     *
     * @param \AppBundle\Entity\User $auth
     *
     * @return ChannelUser
     */
    public function setAuth(\AppBundle\Entity\User $auth = null)
    {
        $this->auth = $auth;

        return $this;
    }

    /**
     * Get auth
     *
     * @return \AppBundle\Entity\User
     */
    public function getAuth()
    {
        return $this->auth;
    }
}
