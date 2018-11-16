<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartomak_product_data
 *
 * @ORM\Table(name="cartomak_product_data")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cartomak_product_dataRepository")
 */
class Cartomak_product_data
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @var int
     *
     * @ORM\Column(name="cartomakID", type="integer")
     * @ORM\ManyToOne(targetEntity="Cartomak_product")
     * @ORM\JoinColumn(name="cartomakID", referencedColumnName="id")
     */
    private $cartomakID;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cartomakID.
     *
     * @param int $cartomakID
     *
     * @return Cartomak_product_data
     */
    public function setCartomakID($cartomakID)
    {
        $this->cartomakID = $cartomakID;

        return $this;
    }

    /**
     * Get cartomakID.
     *
     * @return int
     */
    public function getCartomakID()
    {
        return $this->cartomakID;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Cartomak_product_data
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value.
     *
     * @param string $value
     *
     * @return Cartomak_product_data
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set updated.
     *
     * @param \DateTime $updated
     *
     * @return Cartomak_product_data
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated.
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set created.
     *
     * @param \DateTime $created
     *
     * @return Cartomak_product_data
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
}
