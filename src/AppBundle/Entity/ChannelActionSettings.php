<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChannelActionSettings
 *
 * @ORM\Table(name="channel_action_settings")
 * @ORM\Entity
 */
class ChannelActionSettings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="givevoice", type="integer", nullable=false)
     */
    private $givevoice;

    /**
     * @var integer
     *
     * @ORM\Column(name="giveop", type="integer", nullable=false)
     */
    private $giveop;

    /**
     * @var integer
     *
     * @ORM\Column(name="allowvoice", type="integer", nullable=false)
     */
    private $allowvoice;

    /**
     * @var integer
     *
     * @ORM\Column(name="allowop", type="integer", nullable=false)
     */
    private $allowop;

    /**
     * @var integer
     *
     * @ORM\Column(name="allowmodes", type="integer", nullable=false)
     */
    private $allowmodes;

    /**
     * @var integer
     *
     * @ORM\Column(name="allowkick", type="integer", nullable=false)
     */
    private $allowkick;

    /**
     * @var integer
     *
     * @ORM\Column(name="allowban", type="integer", nullable=false)
     */
    private $allowban;

    /**
     * @var integer
     *
     * @ORM\Column(name="allowtopic", type="integer", nullable=false)
     */
    private $allowtopic;

    /**
     * @var \AppBundle\Entity\Channel
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Channel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="channel", referencedColumnName="channel")
     * })
     */
    private $channel;



    /**
     * Set givevoice
     *
     * @param integer $givevoice
     *
     * @return ChannelActionSettings
     */
    public function setGivevoice($givevoice)
    {
        $this->givevoice = $givevoice;

        return $this;
    }

    /**
     * Get givevoice
     *
     * @return integer
     */
    public function getGivevoice()
    {
        return $this->givevoice;
    }

    /**
     * Set giveop
     *
     * @param integer $giveop
     *
     * @return ChannelActionSettings
     */
    public function setGiveop($giveop)
    {
        $this->giveop = $giveop;

        return $this;
    }

    /**
     * Get giveop
     *
     * @return integer
     */
    public function getGiveop()
    {
        return $this->giveop;
    }

    /**
     * Set allowvoice
     *
     * @param integer $allowvoice
     *
     * @return ChannelActionSettings
     */
    public function setAllowvoice($allowvoice)
    {
        $this->allowvoice = $allowvoice;

        return $this;
    }

    /**
     * Get allowvoice
     *
     * @return integer
     */
    public function getAllowvoice()
    {
        return $this->allowvoice;
    }

    /**
     * Set allowop
     *
     * @param integer $allowop
     *
     * @return ChannelActionSettings
     */
    public function setAllowop($allowop)
    {
        $this->allowop = $allowop;

        return $this;
    }

    /**
     * Get allowop
     *
     * @return integer
     */
    public function getAllowop()
    {
        return $this->allowop;
    }

    /**
     * Set allowmodes
     *
     * @param integer $allowmodes
     *
     * @return ChannelActionSettings
     */
    public function setAllowmodes($allowmodes)
    {
        $this->allowmodes = $allowmodes;

        return $this;
    }

    /**
     * Get allowmodes
     *
     * @return integer
     */
    public function getAllowmodes()
    {
        return $this->allowmodes;
    }

    /**
     * Set allowkick
     *
     * @param integer $allowkick
     *
     * @return ChannelActionSettings
     */
    public function setAllowkick($allowkick)
    {
        $this->allowkick = $allowkick;

        return $this;
    }

    /**
     * Get allowkick
     *
     * @return integer
     */
    public function getAllowkick()
    {
        return $this->allowkick;
    }

    /**
     * Set allowban
     *
     * @param integer $allowban
     *
     * @return ChannelActionSettings
     */
    public function setAllowban($allowban)
    {
        $this->allowban = $allowban;

        return $this;
    }

    /**
     * Get allowban
     *
     * @return integer
     */
    public function getAllowban()
    {
        return $this->allowban;
    }

    /**
     * Set allowtopic
     *
     * @param integer $allowtopic
     *
     * @return ChannelActionSettings
     */
    public function setAllowtopic($allowtopic)
    {
        $this->allowtopic = $allowtopic;

        return $this;
    }

    /**
     * Get allowtopic
     *
     * @return integer
     */
    public function getAllowtopic()
    {
        return $this->allowtopic;
    }

    /**
     * Set channel
     *
     * @param \AppBundle\Entity\Channel $channel
     *
     * @return ChannelActionSettings
     */
    public function setChannel(\AppBundle\Entity\Channel $channel)
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
}
