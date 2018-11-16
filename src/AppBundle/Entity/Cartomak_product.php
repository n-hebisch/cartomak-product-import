<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartomak_product
 *
 * @ORM\Table(name="cartomak_product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cartomak_productRepository")
 */
class Cartomak_product
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
     * @var string
     *
     * @ORM\Column(name="NR", type="string", length=255)
     */
    private $nR;

    /**
     * @var string
     *
     * @ORM\Column(name="EAN", type="string", length=255)
     */
    private $eAN;

    /**
     * @var string
     *
     * @ORM\Column(name="HerstellerArtikelNr", type="string", length=255)
     */
    private $herstellerArtikelNr;

    /**
     * @var string
     *
     * @ORM\Column(name="Created", type="string", length=255)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="Updated", type="string", length=255)
     */
    private $updated;


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
     * Set nR.
     *
     * @param string $nR
     *
     * @return Cartomak_product
     */
    public function setNR($nR)
    {
        $this->nR = $nR;

        return $this;
    }

    /**
     * Get nR.
     *
     * @return string
     */
    public function getNR()
    {
        return $this->nR;
    }

    /**
     * Set eAN.
     *
     * @param string $eAN
     *
     * @return Cartomak_product
     */
    public function setEAN($eAN)
    {
        $this->eAN = $eAN;

        return $this;
    }

    /**
     * Get eAN.
     *
     * @return string
     */
    public function getEAN()
    {
        return $this->eAN;
    }

    /**
     * Set herstellerArtikelNr.
     *
     * @param string $herstellerArtikelNr
     *
     * @return Cartomak_product
     */
    public function setHerstellerArtikelNr($herstellerArtikelNr)
    {
        $this->herstellerArtikelNr = $herstellerArtikelNr;

        return $this;
    }

    /**
     * Get herstellerArtikelNr.
     *
     * @return string
     */
    public function getHerstellerArtikelNr()
    {
        return $this->herstellerArtikelNr;
    }

    /**
     * Set created.
     *
     * @param string $created
     *
     * @return Cartomak_product
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated.
     *
     * @param string $updated
     *
     * @return Cartomak_product
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
