<?php
namespace Ferreteria\CompraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */

class DetalleCompra 
{
    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Ferreteria\CompraBundle\Entity\Compra")
    */
   private $Compra;
   
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Ferreteria\AlmacenBundle\Entity\Producto")
    */
   private $Producto;
   
   /**
     * @var integer $Cantidad
     *
     * @ORM\Column(name="Cantidad", type="integer")
     */
   private $Cantidad;
   
   /**
     * @var float $Costo
     *
     * @ORM\Column(name="Costo", type="float")
     */
    private $Costo;
    

    /**
     * Set Cantidad
     *
     * @param integer $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->Cantidad = $cantidad;
    }

    /**
     * Get Cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->Cantidad;
    }

    /**
     * Set Costo
     *
     * @param float $costo
     */
    public function setCosto($costo)
    {
        $this->Costo = $costo;
    }

    /**
     * Get Costo
     *
     * @return float 
     */
    public function getCosto()
    {
        return $this->Costo;
    }

    /**
     * Set Compra
     *
     * @param Ferreteria\CompraBundle\Entity\Compra $compra
     */
    public function setCompra(\Ferreteria\CompraBundle\Entity\Compra $compra)
    {
        $this->Compra = $compra;
    }

    /**
     * Get Compra
     *
     * @return Ferreteria\CompraBundle\Entity\Compra 
     */
    public function getCompra()
    {
        return $this->Compra;
    }

    /**
     * Set Producto
     *
     * @param Ferreteria\AlmacenBundle\Entity\Producto $producto
     */
    public function setProducto(\Ferreteria\AlmacenBundle\Entity\Producto $producto)
    {
        $this->Producto = $producto;
    }

    /**
     * Get Producto
     *
     * @return Ferreteria\AlmacenBundle\Entity\Producto 
     */
    public function getProducto()
    {
        return $this->Producto;
    }
}