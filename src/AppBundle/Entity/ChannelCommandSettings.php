<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChannelCommandSettings
 *
 * @ORM\Table(name="channel_command_settings")
 * @ORM\Entity
 */
class ChannelCommandSettings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="adduser", type="integer", nullable=true)
     */
    private $adduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="deluser", type="integer", nullable=true)
     */
    private $deluser;

    /**
     * @var integer
     *
     * @ORM\Column(name="clvluser", type="integer", nullable=true)
     */
    private $clvluser;

    /**
     * @var integer
     *
     * @ORM\Column(name="sususer", type="integer", nullable=true)
     */
    private $sususer;

    /**
     * @var integer
     *
     * @ORM\Column(name="addban", type="integer", nullable=true)
     */
    private $addban;

    /**
     * @var integer
     *
     * @ORM\Column(name="delban", type="integer", nullable=true)
     */
    private $delban;

    /**
     * @var integer
     *
     * @ORM\Column(name="kick", type="integer", nullable=true)
     */
    private $kick;

    /**
     * @var integer
     *
     * @ORM\Column(name="users", type="integer", nullable=true)
     */
    private $users;

    /**
     * @var integer
     *
     * @ORM\Column(name="bans", type="integer", nullable=true)
     */
    private $bans;

    /**
     * @var integer
     *
     * @ORM\Column(name="userinfo", type="integer", nullable=true)
     */
    private $userinfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="resync", type="integer", nullable=true)
     */
    private $resync;

    /**
     * @var integer
     *
     * @ORM\Column(name="inviteuser", type="integer", nullable=true)
     */
    private $inviteuser;

    /**
     * @var integer
     *
     * @ORM\Column(name="mode", type="integer", nullable=true)
     */
    private $mode;

    /**
     * @var integer
     *
     * @ORM\Column(name="topic", type="integer", nullable=true)
     */
    private $topic;

    /**
     * @var integer
     *
     * @ORM\Column(name="op", type="integer", nullable=true)
     */
    private $op;

    /**
     * @var integer
     *
     * @ORM\Column(name="voice", type="integer", nullable=true)
     */
    private $voice;

    /**
     * @var integer
     *
     * @ORM\Column(name="takeop", type="integer", nullable=true)
     */
    private $takeop;

    /**
     * @var integer
     *
     * @ORM\Column(name="takevoice", type="integer", nullable=true)
     */
    private $takevoice;

    /**
     * @var integer
     *
     * @ORM\Column(name="trim", type="integer", nullable=true)
     */
    private $trim;

    /**
     * @var integer
     *
     * @ORM\Column(name="events", type="integer", nullable=true)
     */
    private $events;

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
     * Set adduser
     *
     * @param integer $adduser
     *
     * @return ChannelCommandSettings
     */
    public function setAdduser($adduser)
    {
        $this->adduser = $adduser;

        return $this;
    }

    /**
     * Get adduser
     *
     * @return integer
     */
    public function getAdduser()
    {
        return $this->adduser;
    }

    /**
     * Set deluser
     *
     * @param integer $deluser
     *
     * @return ChannelCommandSettings
     */
    public function setDeluser($deluser)
    {
        $this->deluser = $deluser;

        return $this;
    }

    /**
     * Get deluser
     *
     * @return integer
     */
    public function getDeluser()
    {
        return $this->deluser;
    }

    /**
     * Set clvluser
     *
     * @param integer $clvluser
     *
     * @return ChannelCommandSettings
     */
    public function setClvluser($clvluser)
    {
        $this->clvluser = $clvluser;

        return $this;
    }

    /**
     * Get clvluser
     *
     * @return integer
     */
    public function getClvluser()
    {
        return $this->clvluser;
    }

    /**
     * Set sususer
     *
     * @param integer $sususer
     *
     * @return ChannelCommandSettings
     */
    public function setSususer($sususer)
    {
        $this->sususer = $sususer;

        return $this;
    }

    /**
     * Get sususer
     *
     * @return integer
     */
    public function getSususer()
    {
        return $this->sususer;
    }

    /**
     * Set addban
     *
     * @param integer $addban
     *
     * @return ChannelCommandSettings
     */
    public function setAddban($addban)
    {
        $this->addban = $addban;

        return $this;
    }

    /**
     * Get addban
     *
     * @return integer
     */
    public function getAddban()
    {
        return $this->addban;
    }

    /**
     * Set delban
     *
     * @param integer $delban
     *
     * @return ChannelCommandSettings
     */
    public function setDelban($delban)
    {
        $this->delban = $delban;

        return $this;
    }

    /**
     * Get delban
     *
     * @return integer
     */
    public function getDelban()
    {
        return $this->delban;
    }

    /**
     * Set kick
     *
     * @param integer $kick
     *
     * @return ChannelCommandSettings
     */
    public function setKick($kick)
    {
        $this->kick = $kick;

        return $this;
    }

    /**
     * Get kick
     *
     * @return integer
     */
    public function getKick()
    {
        return $this->kick;
    }

    /**
     * Set users
     *
     * @param integer $users
     *
     * @return ChannelCommandSettings
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return integer
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set bans
     *
     * @param integer $bans
     *
     * @return ChannelCommandSettings
     */
    public function setBans($bans)
    {
        $this->bans = $bans;

        return $this;
    }

    /**
     * Get bans
     *
     * @return integer
     */
    public function getBans()
    {
        return $this->bans;
    }

    /**
     * Set userinfo
     *
     * @param integer $userinfo
     *
     * @return ChannelCommandSettings
     */
    public function setUserinfo($userinfo)
    {
        $this->userinfo = $userinfo;

        return $this;
    }

    /**
     * Get userinfo
     *
     * @return integer
     */
    public function getUserinfo()
    {
        return $this->userinfo;
    }

    /**
     * Set resync
     *
     * @param integer $resync
     *
     * @return ChannelCommandSettings
     */
    public function setResync($resync)
    {
        $this->resync = $resync;

        return $this;
    }

    /**
     * Get resync
     *
     * @return integer
     */
    public function getResync()
    {
        return $this->resync;
    }

    /**
     * Set inviteuser
     *
     * @param integer $inviteuser
     *
     * @return ChannelCommandSettings
     */
    public function setInviteuser($inviteuser)
    {
        $this->inviteuser = $inviteuser;

        return $this;
    }

    /**
     * Get inviteuser
     *
     * @return integer
     */
    public function getInviteuser()
    {
        return $this->inviteuser;
    }

    /**
     * Set mode
     *
     * @param integer $mode
     *
     * @return ChannelCommandSettings
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return integer
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set topic
     *
     * @param integer $topic
     *
     * @return ChannelCommandSettings
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return integer
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set op
     *
     * @param integer $op
     *
     * @return ChannelCommandSettings
     */
    public function setOp($op)
    {
        $this->op = $op;

        return $this;
    }

    /**
     * Get op
     *
     * @return integer
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Set voice
     *
     * @param integer $voice
     *
     * @return ChannelCommandSettings
     */
    public function setVoice($voice)
    {
        $this->voice = $voice;

        return $this;
    }

    /**
     * Get voice
     *
     * @return integer
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * Set takeop
     *
     * @param integer $takeop
     *
     * @return ChannelCommandSettings
     */
    public function setTakeop($takeop)
    {
        $this->takeop = $takeop;

        return $this;
    }

    /**
     * Get takeop
     *
     * @return integer
     */
    public function getTakeop()
    {
        return $this->takeop;
    }

    /**
     * Set takevoice
     *
     * @param integer $takevoice
     *
     * @return ChannelCommandSettings
     */
    public function setTakevoice($takevoice)
    {
        $this->takevoice = $takevoice;

        return $this;
    }

    /**
     * Get takevoice
     *
     * @return integer
     */
    public function getTakevoice()
    {
        return $this->takevoice;
    }

    /**
     * Set trim
     *
     * @param integer $trim
     *
     * @return ChannelCommandSettings
     */
    public function setTrim($trim)
    {
        $this->trim = $trim;

        return $this;
    }

    /**
     * Get trim
     *
     * @return integer
     */
    public function getTrim()
    {
        return $this->trim;
    }

    /**
     * Set events
     *
     * @param integer $events
     *
     * @return ChannelCommandSettings
     */
    public function setEvents($events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * Get events
     *
     * @return integer
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Set channel
     *
     * @param \AppBundle\Entity\Channel $channel
     *
     * @return ChannelCommandSettings
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
