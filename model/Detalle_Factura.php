<?php



class Detalle_Factura
{
	private $id;
	private $cantidad;
	private $precio;
	private $nombreProducto;
	private $facturaId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;

        return $this;
    }

    public function getFacturaId()
    {
        return $this->facturaId;
    }

    public function setFacturaId($facturaId)
    {
        $this->facturaId = $facturaId;

        return $this;
    }

    public function regDetalleFactura()
    {
        $_query = "select max(id) as id from factura";
        $resultado $this-
    }
}