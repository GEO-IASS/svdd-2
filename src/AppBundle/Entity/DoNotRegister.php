<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DoNotRegister
 *
 * @ORM\Table(name="do_not_register")
 * @ORM\Entity
 */
class DoNotRegister
{
    /**
     * @var string
     *
     * @ORM\Column(name="assoAuth", type="string", length=50, nullable=true)
     */
    private $assoauth;

    /**
     * @var string
     *
     * @ORM\Column(name="setBy", type="string", length=50, nullable=true)
     */
    private $setby;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=50, nullable=true)
     */
    private $reason;

    /**
     * @var string
     *
     * @ORM\Column(name="channel", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $channel;



    /**
     * Set assoauth
     *
     * @param string $assoauth
     *
     * @return DoNotRegister
     */
    public function setAssoauth($assoauth)
    {
        $this->assoauth = $assoauth;

        return $this;
    }

    /**
     * Get assoauth
     *
     * @return string
     */
    public function getAssoauth()
    {
        return $this->assoauth;
    }

    /**
     * Set setby
     *
     * @param string $setby
     *
     * @return DoNotRegister
     */
    public function setSetby($setby)
    {
        $this->setby = $setby;

        return $this;
    }

    /**
     * Get setby
     *
     * @return string
     */
    public function getSetby()
    {
        return $this->setby;
    }

    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return DoNotRegister
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
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
}
