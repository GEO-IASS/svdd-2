<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ban
 *
 * @ORM\Table(name="ban", indexes={@ORM\Index(name="FK_ban_user", columns={"auth"}), @ORM\Index(name="FK_ban_channel", columns={"channel"}), @ORM\Index(name="FK_ban_user_2", columns={"setby"})})
 * @ORM\Entity
 */
class Ban
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires", type="datetime", nullable=true)
     */
    private $expires;

    /**
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $host;

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
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auth", referencedColumnName="auth")
     * })
     */
    private $auth;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="setby", referencedColumnName="auth")
     * })
     */
    private $setby;



    /**
     * Set expires
     *
     * @param \DateTime $expires
     *
     * @return Ban
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires
     *
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Set host
     *
     * @param string $host
     *
     * @return Ban
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set channel
     *
     * @param \AppBundle\Entity\Channel $channel
     *
     * @return Ban
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

    /**
     * Set auth
     *
     * @param \AppBundle\Entity\User $auth
     *
     * @return Ban
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

    /**
     * Set setby
     *
     * @param \AppBundle\Entity\User $setby
     *
     * @return Ban
     */
    public function setSetby(\AppBundle\Entity\User $setby = null)
    {
        $this->setby = $setby;

        return $this;
    }

    /**
     * Get setby
     *
     * @return \AppBundle\Entity\User
     */
    public function getSetby()
    {
        return $this->setby;
    }
}
