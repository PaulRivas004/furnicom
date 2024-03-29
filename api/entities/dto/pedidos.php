<?php
require_once('../../helpers/validator.php');
require_once('../../entities/dao/pedidos_queries.php');
/*
*	Clase para manejar la transferencia de datos de la entidad Pedidos.
*/
class Pedidos extends PedidosQueries
{
    // Declaración de atributos (propiedades).
    protected $id_pedido = null;
    protected $nombre_cliente = null;
    protected $estado_pedido = null;
    protected $fecha_pedido = null;
    protected $direccion_pedido = null;
    protected $id_detalle = null;
    protected $nombre_producto = null;
    protected $cantidad_producto = null;


    /*
    * Atrubutos para sitio publico
    */

    protected $id_producto = null;
    protected $precio_producto = null;
    protected $id_cliente = null;


    
    /*
    *   Métodos para validar y asignar valores de los atributos.
    */

    
    public function setId($value)
    {
        if (Validator::validateNaturalNumber($value)) {
            $this->id_pedido = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setIdCliente($value)
    {
        if (Validator::validateNaturalNumber($value)) {
            $this->id_cliente = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setIdproducto($value)
    {
        if (Validator::validateNaturalNumber($value)) {
            $this->id_producto = $value;
            return true;
        } else {
            return false;
        }
    }


    public function setNombreCliente($value)
    {
        if (Validator::validateAlphanumeric($value, 1, 60)) {
            $this->nombre_cliente = $value;
            return true;
        } else {
            return false;
        }
    }


    public function setEstado($value)
    {
        if (Validator::validateBoolean($value)) {
            $this->estado_pedido = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setFecha($value)
    {
        if (Validator::validateDate($value)) {
            $this->fecha_pedido = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setDireccion($value)
    {
        if (Validator::validateAlphanumeric($value, 1, 60)) {
            $this->direccion_pedido = $value;
            return true;
        } else {
            return false;
        }
    }

    //detalle pedidos
public function setIdDetalle($value)
{
    if (Validator::validateNaturalNumber($value)) {
        $this->id_detalle = $value;
        return true;
    } else {
        return false;
    }
}

public function setNombreProducto($value)
{
    if (Validator::validateAlphanumeric($value, 1, 60)) {
        $this->nombre_cliente = $value;
        return true;
    } else {
        return false;
    }
}

public function setCantidad($value)
{
    if (Validator::validateNaturalNumber($value)) {
        $this->cantidad_producto = $value;
        return true;
    } else {
        return false;
    }
}

public function setPrecio($value)
{
    if (Validator::validateNaturalNumber($value)) {
        $this->precio_producto = $value;
        return true;
    } else {
        return false;
    }
}

    /*
    *   Métodos para obtener valores de los atributos.
    */

    public function getId()
    {
        return $this->id_pedido;
    }
    public function getIdproducto()
    {
        return $this->id_producto;
    }
    public function getprecio()
    {
        return $this->precio_producto;
    }

    public function getNombreCliente()
    {
        return $this->nombre_cliente;
    }

    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    public function getEstado()
    {
        return $this->estado_pedido;
    }

    public function getFechaPedido()
    {
        return $this->fecha_pedido;
    }

    public function getDireccion()
    {
        return $this->direccion_pedido;
    }
    
public function getIdDetalle()
{
    return $this->id_detalle;
}

public function getNombreProducto()
{
    return $this->nombre_producto;
}

public function getCantidad()
{
    return $this->cantidad_producto;
}

}
