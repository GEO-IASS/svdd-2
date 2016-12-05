<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="nick", columns={"nick"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=50, nullable=true)
     */
    private $nick;

    /**
     * @var integer
     *
     * @ORM\Column(name="isonline", type="integer", nullable=true)
     */
    private $isonline;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=50, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="userinfo", type="string", length=50, nullable=true)
     */
    private $userinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="privmsg", type="string", length=50, nullable=true)
     */
    private $privmsg;

    /**
     * @var integer
     *
     * @ORM\Column(name="godlevel", type="integer", nullable=true)
     */
    private $godlevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="godmode", type="integer", nullable=true)
     */
    private $godmode;

    /**
     * @var string
     *
     * @ORM\Column(name="epithet", type="string", length=50, nullable=true)
     */
    private $epithet;

    /**
     * @var string
     *
     * @ORM\Column(name="auth", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $auth;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Channel", mappedBy="auth")
     */
    private $channel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->channel = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nick
     *
     * @param string $nick
     *
     * @return User
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set isonline
     *
     * @param integer $isonline
     *
     * @return User
     */
    public function setIsonline($isonline)
    {
        $this->isonline = $isonline;

        return $this;
    }

    /**
     * Get isonline
     *
     * @return integer
     */
    public function getIsonline()
    {
        return $this->isonline;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return User
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set userinfo
     *
     * @param string $userinfo
     *
     * @return User
     */
    public function setUserinfo($userinfo)
    {
        $this->userinfo = $userinfo;

        return $this;
    }

    /**
     * Get userinfo
     *
     * @return string
     */
    public function getUserinfo()
    {
        return $this->userinfo;
    }

    /**
     * Set privmsg
     *
     * @param string $privmsg
     *
     * @return User
     */
    public function setPrivmsg($privmsg)
    {
        $this->privmsg = $privmsg;

        return $this;
    }

    /**
     * Get privmsg
     *
     * @return string
     */
    public function getPrivmsg()
    {
        return $this->privmsg;
    }

    /**
     * Set godlevel
     *
     * @param integer $godlevel
     *
     * @return User
     */
    public function setGodlevel($godlevel)
    {
        $this->godlevel = $godlevel;

        return $this;
    }

    /**
     * Get godlevel
     *
     * @return integer
     */
    public function getGodlevel()
    {
        return $this->godlevel;
    }

    /**
     * Set godmode
     *
     * @param integer $godmode
     *
     * @return User
     */
    public function setGodmode($godmode)
    {
        $this->godmode = $godmode;

        return $this;
    }

    /**
     * Get godmode
     *
     * @return integer
     */
    public function getGodmode()
    {
        return $this->godmode;
    }

    /**
     * Set epithet
     *
     * @param string $epithet
     *
     * @return User
     */
    public function setEpithet($epithet)
    {
        $this->epithet = $epithet;

        return $this;
    }

    /**
     * Get epithet
     *
     * @return string
     */
    public function getEpithet()
    {
        return $this->epithet;
    }

    /**
     * Get auth
     *
     * @return string
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * Add channel
     *
     * @param \AppBundle\Entity\Channel $channel
     *
     * @return User
     */
    public function addChannel(\AppBundle\Entity\Channel $channel)
    {
        $this->channel[] = $channel;

        return $this;
    }

    /**
     * Remove channel
     *
     * @param \AppBundle\Entity\Channel $channel
     */
    public function removeChannel(\AppBundle\Entity\Channel $channel)
    {
        $this->channel->removeElement($channel);
    }

    /**
     * Get channel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChannel()
    {
        return $this->channel;
    }
}
