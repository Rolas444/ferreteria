<?php

namespace Ferreteria\PedidoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class DetallePedido 
{
    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Ferreteria\PedidoBundle\Entity\Pedido")
    */
   private $Pedido;
   
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Ferreteria\AlmacenBundle\Entity\Producto")
    */
   private $Producto;
   
   /**
     * @var float $Cantidad
     *
     * @ORM\Column(name="Cantidad", type="float")
     */
   private $Cantidad;
   
   /**
     * @var float $PrecioVenta
     *
     * @ORM\Column(name="PrecioVenta", type="float")
     */
   private $PrecioVenta;
   
    /**
     * Set Cantidad
     *
     * @param float $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->Cantidad = $cantidad;
    }

    /**
     * Get Cantidad
     *
     * @return float 
     */
    public function getCantidad()
    {
        return $this->Cantidad;
    }

    /**
     * Set PrecioVenta
     *
     * @param float $precioVenta
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->PrecioVenta = $precioVenta;
    }

    /**
     * Get PrecioVenta
     *
     * @return float 
     */
    public function getPrecioVenta()
    {
        return $this->PrecioVenta;
    }

    /**
     * Set Pedido
     *
     * @param Ferreteria\PedidoBundle\Entity\Pedido $pedido
     */
    public function setPedido(\Ferreteria\PedidoBundle\Entity\Pedido $pedido)
    {
        $this->Pedido = $pedido;
    }

    /**
     * Get Pedido
     *
     * @return Ferreteria\PedidoBundle\Entity\Pedido 
     */
    public function getPedido()
    {
        return $this->Pedido;
    }

    /**
     * Set Producto
     *
     * @param Ferreteria\AlamacenBundle\Entity\Producto $producto
     */
    public function setProducto(\Ferreteria\AlamacenBundle\Entity\Producto $producto)
    {
        $this->Producto = $producto;
    }

    /**
     * Get Producto
     *
     * @return Ferreteria\AlamacenBundle\Entity\Producto 
     */
    public function getProducto()
    {
        return $this->Producto;
    }
}