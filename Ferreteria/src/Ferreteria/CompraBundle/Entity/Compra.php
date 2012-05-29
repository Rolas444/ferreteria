<?php

namespace Ferreteria\CompraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ferreteria\CompraBundle\Entity\Compra
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Compra
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @ORM\ManyToOne(targetEntity="Ferreteria\ProveedorBundle\Entity\Proveedor") */
    private $Proveedor;

    /** @ORM\ManyToOne(targetEntity="Ferreteria\UsuarioBundle\Entity\Usuario") */
    private $Usuario;

    /**
     * @var string $TipoDocumento
     *
     * @ORM\Column(name="TipoDocumento", type="string", length=100)
     */
    private $TipoDocumento;

    /**
     * @var string $NumeroDocumento
     *
     * @ORM\Column(name="NumeroDocumento", type="string", length=100)
     */
    private $NumeroDocumento;

    /**
     * @var datetime $Fecha
     *
     * @ORM\Column(name="Fecha", type="datetime")
     */
    private $Fecha;

    /**
     * @var float $MontoTotal
     *
     * @ORM\Column(name="MontoTotal", type="float")
     */
    private $MontoTotal;

    /**
     * @var boolean $TipoPago
     *
     * @ORM\Column(name="TipoPago", type="boolean")
     */
    private $TipoPago;

    /**
     * @var datetime $FechaEnvio
     *
     * @ORM\Column(name="FechaEnvio", type="datetime")
     */
    private $FechaEnvio;


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
     * Set Fecha
     *
     * @param datetime $fecha
     */
    public function setFecha($fecha)
    {
        $this->Fecha = $fecha;
    }

    /**
     * Get Fecha
     *
     * @return datetime 
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * Set MontoTotal
     *
     * @param float $montoTotal
     */
    public function setMontoTotal($montoTotal)
    {
        $this->MontoTotal = $montoTotal;
    }

    /**
     * Get MontoTotal
     *
     * @return float 
     */
    public function getMontoTotal()
    {
        return $this->MontoTotal;
    }

    /**
     * Set TipoPago
     *
     * @param boolean $tipoPago
     */
    public function setTipoPago($tipoPago)
    {
        $this->TipoPago = $tipoPago;
    }

    /**
     * Get TipoPago
     *
     * @return boolean 
     */
    public function getTipoPago()
    {
        return $this->TipoPago;
    }

    /**
     * Set FechaEnvio
     *
     * @param datetime $fechaEnvio
     */
    public function setFechaEnvio($fechaEnvio)
    {
        $this->FechaEnvio = $fechaEnvio;
    }

    /**
     * Get FechaEnvio
     *
     * @return datetime 
     */
    public function getFechaEnvio()
    {
        return $this->FechaEnvio;
    }

    /**
     * Set Proveedor
     *
     * @param Ferreteria\ProveedorBundle\Entity\Proveedor $proveedor
     */
    public function setProveedor(\Ferreteria\ProveedorBundle\Entity\Proveedor $proveedor)
    {
        $this->Proveedor = $proveedor;
    }

    /**
     * Get Proveedor
     *
     * @return Ferreteria\ProveedorBundle\Entity\Proveedor 
     */
    public function getProveedor()
    {
        return $this->Proveedor;
    }

    /**
     * Set Usuario
     *
     * @param Ferreteria\UsuarioBundle\Entity\Usuario $usuario
     */
    public function setUsuario(\Ferreteria\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->Usuario = $usuario;
    }

    /**
     * Get Usuario
     *
     * @return Ferreteria\UsuarioBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }
}