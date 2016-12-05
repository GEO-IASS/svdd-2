<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotPresets
 *
 * @ORM\Table(name="bot_presets")
 * @ORM\Entity
 */
class BotPresets
{
    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=50, nullable=false)
     */
    private $nickname;

    /**
     * @var string
     *
     * @ORM\Column(name="server", type="string", length=50, nullable=false)
     */
    private $server;

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="integer", nullable=false)
     */
    private $port;

    /**
     * @var string
     *
     * @ORM\Column(name="authname", type="string", length=50, nullable=true)
     */
    private $authname;

    /**
     * @var string
     *
     * @ORM\Column(name="authpass", type="string", length=50, nullable=true)
     */
    private $authpass;

    /**
     * @var string
     *
     * @ORM\Column(name="trigger", type="string", length=50, nullable=false)
     */
    private $trigger;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return BotPresets
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set server
     *
     * @param string $server
     *
     * @return BotPresets
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get server
     *
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Set port
     *
     * @param integer $port
     *
     * @return BotPresets
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set authname
     *
     * @param string $authname
     *
     * @return BotPresets
     */
    public function setAuthname($authname)
    {
        $this->authname = $authname;

        return $this;
    }

    /**
     * Get authname
     *
     * @return string
     */
    public function getAuthname()
    {
        return $this->authname;
    }

    /**
     * Set authpass
     *
     * @param string $authpass
     *
     * @return BotPresets
     */
    public function setAuthpass($authpass)
    {
        $this->authpass = $authpass;

        return $this;
    }

    /**
     * Get authpass
     *
     * @return string
     */
    public function getAuthpass()
    {
        return $this->authpass;
    }

    /**
     * Set trigger
     *
     * @param string $trigger
     *
     * @return BotPresets
     */
    public function setTrigger($trigger)
    {
        $this->trigger = $trigger;

        return $this;
    }

    /**
     * Get trigger
     *
     * @return string
     */
    public function getTrigger()
    {
        return $this->trigger;
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
}
