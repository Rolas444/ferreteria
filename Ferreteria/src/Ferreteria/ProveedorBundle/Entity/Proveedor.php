<?php

namespace Ferreteria\ProveedorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ferreteria\ProveedorBundle\Entity\Proveedor
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Proveedor
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
     * @var string $Nombre
     *
     * @ORM\Column(name="Nombre", type="string", length=50)
     */
    private $Nombre;

    /** @ORM\ManyToOne(targetEntity="Ferreteria\ProveedorBundle\Entity\Ubigeo") */
    private $Ubigeo;

    /**
     * @var string $TipoDocumento
     *
     * @ORM\Column(name="TipoDocumento", type="string", length=50)
     */
    private $TipoDocumento;

    /**
     * @var string $NumeroDocumento
     *
     * @ORM\Column(name="NumeroDocumento", type="string", length=50)
     */
    private $NumeroDocumento;

    /**
     * @var string $Email
     *
     * @ORM\Column(name="Email", type="string", length=100)
     */
    private $Email;

    /**
     * @var string $Direccion
     *
     * @ORM\Column(name="Direccion", type="string", length=200)
     */
    private $Direccion;

    /**
     * @var string $Fax
     *
     * @ORM\Column(name="Fax", type="string", length=20)
     */
    private $Fax;

    /**
     * @var string $Web
     *
     * @ORM\Column(name="Web", type="string", length=100)
     */
    private $Web;

    /**
     * @var string $Telefono
     *
     * @ORM\Column(name="Telefono", type="string", length=20)
     */
    private $Telefono;

    /**
     * @var string $Observacion
     *
     * @ORM\Column(name="Observacion", type="string", length=200)
     */
    private $Observacion;


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
     * Set Nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    }

    /**
     * Get Nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->Nombre;
    }


    /**
     * Set TipoDocumento
     *
     * @param string $tipoDocumento
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->TipoDocumento = $tipoDocumento;
    }

    /**
     * Get TipoDocumento
     *
     * @return string 
     */
    public function getTipoDocumento()
    {
        return $this->TipoDocumento;
    }

    /**
     * Set NumeroDocumento
     *
     * @param string $numeroDocumento
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->NumeroDocumento = $numeroDocumento;
    }

    /**
     * Get NumeroDocumento
     *
     * @return string 
     */
    public function getNumeroDocumento()
    {
        return $this->NumeroDocumento;
    }

    /**
     * Set Email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->Email = $email;
    }

    /**
     * Get Email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set Direccion
     *
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->Direccion = $direccion;
    }

    /**
     * Get Direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * Set Fax
     *
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->Fax = $fax;
    }

    /**
     * Get Fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * Set Web
     *
     * @param string $web
     */
    public function setWeb($web)
    {
        $this->Web = $web;
    }

    /**
     * Get Web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->Web;
    }

    /**
     * Set Telefono
     *
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->Telefono = $telefono;
    }

    /**
     * Get Telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * Set Observacion
     *
     * @param string $observacion
     */
    public function setObservacion($observacion)
    {
        $this->Observacion = $observacion;
    }

    /**
     * Get Observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->Observacion;
    }

    /**
     * Set Ubigeo
     *
     * @param Ferreteria\ProveedorBundle\Entity\Ubigeo $ubigeo
     */
    public function setUbigeo(\Ferreteria\ProveedorBundle\Entity\Ubigeo $ubigeo)
    {
        $this->Ubigeo = $ubigeo;
    }

    /**
     * Get Ubigeo
     *
     * @return Ferreteria\ProveedorBundle\Entity\Ubigeo 
     */
    public function getUbigeo()
    {
        return $this->Ubigeo;
    }
    
    public function __toString()
    {
        return $this->getNombre();
    }
}