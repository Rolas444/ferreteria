<?php

namespace Ferreteria\ProveedorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ferreteria\ProveedorBundle\Entity\Ubigeo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ubigeo
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $Region
     *
     * @ORM\Column(name="Region", type="string", length=30)
     */
    private $Region;

    /**
     * @var string $Provincia
     *
     * @ORM\Column(name="Provincia", type="string", length=30)
     */
    private $Provincia;

    /**
     * @var string $Distrito
     *
     * @ORM\Column(name="Distrito", type="string", length=30)
     */
    private $Distrito;


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
     * Set Region
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->Region = $region;
    }

    /**
     * Get Region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * Set Provincia
     *
     * @param string $provincia
     */
    public function setProvincia($provincia)
    {
        $this->Provincia = $provincia;
    }

    /**
     * Get Provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->Provincia;
    }

    /**
     * Set Distrito
     *
     * @param string $distrito
     */
    public function setDistrito($distrito)
    {
        $this->Distrito = $distrito;
    }

    /**
     * Get Distrito
     *
     * @return string 
     */
    public function getDistrito()
    {
        return $this->Distrito;
    }
    
    public function __toString()
    {
        return $this->getDistrito();
    }
}