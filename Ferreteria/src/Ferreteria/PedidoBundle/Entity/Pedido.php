<?php

namespace Ferreteria\PedidoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ferreteria\PedidoBundle\Entity\Pedido
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pedido
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @ORM\ManyToOne(targetEntity="Ferreteria\UsuarioBundle\Entity\Usuario") */
    private $Usuario;

    /**
     * @var datetime $Fecha
     *
     * @ORM\Column(name="Fecha", type="datetime")
     */
    private $Fecha;

    /**
     * @var float $Monto
     *
     * @ORM\Column(name="Monto", type="float")
     */
    private $Monto;

    /**
     * @var float $Igv
     *
     * @ORM\Column(name="Igv", type="float")
     */
    private $Igv;

    /**
     * @var string $Descripcion
     *
     * @ORM\Column(name="Descripcion", type="string", length=200)
     */
    private $Descripcion;

    /**
     * @var string $NombreCliente
     *
     * @ORM\Column(name="NombreCliente", type="string", length=100)
     */
    private $NombreCliente;


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
     * Set Monto
     *
     * @param float $monto
     */
    public function setMonto($monto)
    {
        $this->Monto = $monto;
    }

    /**
     * Get Monto
     *
     * @return float 
     */
    public function getMonto()
    {
        return $this->Monto;
    }

    /**
     * Set Igv
     *
     * @param float $igv
     */
    public function setIgv($igv)
    {
        $this->Igv = $igv;
    }

    /**
     * Get Igv
     *
     * @return float 
     */
    public function getIgv()
    {
        return $this->Igv;
    }

    /**
     * Set Descripcion
     *
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->Descripcion = $descripcion;
    }

    /**
     * Get Descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * Set NombreCliente
     *
     * @param string $nombreCliente
     */
    public function setNombreCliente($nombreCliente)
    {
        $this->NombreCliente = $nombreCliente;
    }

    /**
     * Get NombreCliente
     *
     * @return string 
     */
    public function getNombreCliente()
    {
        return $this->NombreCliente;
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