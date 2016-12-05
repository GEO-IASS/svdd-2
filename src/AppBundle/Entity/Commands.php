<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commands
 *
 * @ORM\Table(name="commands")
 * @ORM\Entity
 */
class Commands
{
    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=50, nullable=true)
     */
    private $alias;

    /**
     * @var integer
     *
     * @ORM\Column(name="godlevel", type="integer", nullable=false)
     */
    private $godlevel;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=50, nullable=false)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="command", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $command;



    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return Commands
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set godlevel
     *
     * @param integer $godlevel
     *
     * @return Commands
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
     * Set action
     *
     * @param string $action
     *
     * @return Commands
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Get command
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }
}
