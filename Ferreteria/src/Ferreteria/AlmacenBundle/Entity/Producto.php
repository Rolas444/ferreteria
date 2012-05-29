<?php

namespace Ferreteria\AlmacenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ferreteria\AlmacenBundle\Entity\Producto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Producto
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @ORM\ManyToOne(targetEntity="Ferreteria\AlmacenBundle\Entity\Categoria") */
    private $Categoria;

    /** @ORM\ManyToOne(targetEntity="Ferreteria\AlmacenBundle\Entity\UnidadMedida") */
    private $UnidadMedida;

    /**
     * @var string $CodProducto
     *
     * @ORM\Column(name="CodProducto", type="string", length=20)
     */
    private $CodProducto;

    /**
     * @var text $Descripcion
     *
     * @ORM\Column(name="Descripcion", type="text")
     */
    private $Descripcion;

    /**
     * @var string $Nombre
     *
     * @ORM\Column(name="Nombre", type="string", length=200)
     */
    private $Nombre;

    /**
     * @var string $Marca
     *
     * @ORM\Column(name="Marca", type="string", length=50)
     */
    private $Marca;

    /**
     * @var float $Stock
     *
     * @ORM\Column(name="Stock", type="float")
     */
    private $Stock;

    /**
     * @var float $Precio
     *
     * @ORM\Column(name="Precio", type="float")
     */
    private $Precio;


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
     * Set CodProducto
     *
     * @param string $codProducto
     */
    public function setCodProducto($codProducto)
    {
        $this->CodProducto = $codProducto;
    }

    /**
     * Get CodProducto
     *
     * @return string 
     */
    public function getCodProducto()
    {
        return $this->CodProducto;
    }

    /**
     * Set Descripcion
     *
     * @param text $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->Descripcion = $descripcion;
    }

    /**
     * Get Descripcion
     *
     * @return text 
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
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
     * Set Marca
     *
     * @param string $marca
     */
    public function setMarca($marca)
    {
        $this->Marca = $marca;
    }

    /**
     * Get Marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->Marca;
    }

    /**
     * Set Stock
     *
     * @param float $stock
     */
    public function setStock($stock)
    {
        $this->Stock = $stock;
    }

    /**
     * Get Stock
     *
     * @return float 
     */
    public function getStock()
    {
        return $this->Stock;
    }

    /**
     * Set Precio
     *
     * @param float $precio
     */
    public function setPrecio($precio)
    {
        $this->Precio = $precio;
    }

    /**
     * Get Precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->Precio;
    }

    /**
     * Set Categoria
     *
     * @param Ferreteria\AlmacenBundle\Entity\Categoria $categoria
     */
    public function setCategoria(\Ferreteria\AlmacenBundle\Entity\Categoria $categoria)
    {
        $this->Categoria = $categoria;
    }

    /**
     * Get Categoria
     *
     * @return Ferreteria\AlmacenBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->Categoria;
    }

    /**
     * Set UnidadMedida
     *
     * @param Ferreteria\AlmacenBundle\Entity\UnidadMedida $unidadMedida
     */
    public function setUnidadMedida(\Ferreteria\AlmacenBundle\Entity\UnidadMedida $unidadMedida)
    {
        $this->UnidadMedida = $unidadMedida;
    }

    /**
     * Get UnidadMedida
     *
     * @return Ferreteria\AlmacenBundle\Entity\UnidadMedida 
     */
    public function getUnidadMedida()
    {
        return $this->UnidadMedida;
    }
}