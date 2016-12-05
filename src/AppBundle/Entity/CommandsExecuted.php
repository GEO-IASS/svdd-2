<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandsExecuted
 *
 * @ORM\Table(name="commands_executed", indexes={@ORM\Index(name="FK_commands_executed_channel", columns={"channel"})})
 * @ORM\Entity
 */
class CommandsExecuted
{
    /**
     * @var string
     *
     * @ORM\Column(name="auth", type="string", length=50, nullable=false)
     */
    private $auth;

    /**
     * @var string
     *
     * @ORM\Column(name="cmd", type="string", length=50, nullable=false)
     */
    private $cmd;

    /**
     * @var string
     *
     * @ORM\Column(name="parameters", type="string", length=50, nullable=false)
     */
    private $parameters;

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
     * Set auth
     *
     * @param string $auth
     *
     * @return CommandsExecuted
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;

        return $this;
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
     * Set cmd
     *
     * @param string $cmd
     *
     * @return CommandsExecuted
     */
    public function setCmd($cmd)
    {
        $this->cmd = $cmd;

        return $this;
    }

    /**
     * Get cmd
     *
     * @return string
     */
    public function getCmd()
    {
        return $this->cmd;
    }

    /**
     * Set parameters
     *
     * @param string $parameters
     *
     * @return CommandsExecuted
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get parameters
     *
     * @return string
     */
    public function getParameters()
    {
        return $this->parameters;
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
     * @return CommandsExecuted
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
}
