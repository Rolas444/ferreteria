<?php

namespace Ferreteria\ProveedorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ferreteria\ProveedorBundle\Entity\Representante
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Representante
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

    /**
     * @var string $Nombre
     *
     * @ORM\Column(name="Nombre", type="string", length=50)
     */
    private $Nombre;

    /**
     * @var string $Apellido
     *
     * @ORM\Column(name="Apellido", type="string", length=50)
     */
    private $Apellido;

    /**
     * @var string $Telefono1
     *
     * @ORM\Column(name="Telefono1", type="string", length=15)
     */
    private $Telefono1;

    /**
     * @var string $Telefono2
     *
     * @ORM\Column(name="Telefono2", type="string", length=15)
     */
    private $Telefono2;

    /**
     * @var string $Telefono3
     *
     * @ORM\Column(name="Telefono3", type="string", length=15)
     */
    private $Telefono3;

    /**
     * @var string $Telefono4
     *
     * @ORM\Column(name="Telefono4", type="string", length=15)
     */
    private $Telefono4;

    /**
     * @var string $Email
     *
     * @ORM\Column(name="Email", type="string", length=50)
     */
    private $Email;

    /**
     * @var string $Documento
     *
     * @ORM\Column(name="Documento", type="string", length=15)
     */
    private $Documento;


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
     * Set Apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->Apellido = $apellido;
    }

    /**
     * Get Apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->Apellido;
    }

    /**
     * Set Telefono1
     *
     * @param string $telefono1
     */
    public function setTelefono1($telefono1)
    {
        $this->Telefono1 = $telefono1;
    }

    /**
     * Get Telefono1
     *
     * @return string 
     */
    public function getTelefono1()
    {
        return $this->Telefono1;
    }

    /**
     * Set Telefono2
     *
     * @param string $telefono2
     */
    public function setTelefono2($telefono2)
    {
        $this->Telefono2 = $telefono2;
    }

    /**
     * Get Telefono2
     *
     * @return string 
     */
    public function getTelefono2()
    {
        return $this->Telefono2;
    }

    /**
     * Set Telefono3
     *
     * @param string $telefono3
     */
    public function setTelefono3($telefono3)
    {
        $this->Telefono3 = $telefono3;
    }

    /**
     * Get Telefono3
     *
     * @return string 
     */
    public function getTelefono3()
    {
        return $this->Telefono3;
    }

    /**
     * Set Telefono4
     *
     * @param string $telefono4
     */
    public function setTelefono4($telefono4)
    {
        $this->Telefono4 = $telefono4;
    }

    /**
     * Get Telefono4
     *
     * @return string 
     */
    public function getTelefono4()
    {
        return $this->Telefono4;
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
     * Set Documento
     *
     * @param string $documento
     */
    public function setDocumento($documento)
    {
        $this->Documento = $documento;
    }

    /**
     * Get Documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->Documento;
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
    
    
}