<?php
require_once('../../helpers/validator.php');
require_once('../../entities/dao/valoracion_queries.php');
/*
*	Clase para manejar la transferencia de datos de la entidad CATEGORIA.
*/
class Valoracion extends ValoracionesQueries
{
    // Declaración de atributos (propiedades).
    protected $id = null;
    protected $detalle = null;
    protected $calificacion = null;
    protected $comentario = null;
    protected $fecha = null;
    protected $estado = null;

    /*
    *   Métodos para validar y asignar valores de los atributos.
    */
    public function setId($value)
    {
        if (Validator::validateNaturalNumber($value)) {
            $this->id = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setDetalle($value)
    {
        if (Validator::validateNaturalNumber($value)) {
            $this->detalle = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setCalificacion($value)
    {
        if (Validator::validateNaturalNumber($value)) {
            $this->calificacion = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setComentario($value)
    {
        if ($value) {
            if (Validator::validateString($value, 1, 250)) {
                $this->comentario = $value;
                return true;
            } else {
                return false;
            }
        } else {
            $this->comentario = null;
            return true;
        }
    }

    public function setFecha($value)
    {
        if ($value) {
            if (Validator::validateString($value, 1, 250)) {
                $this->fecha = $value;
                return true;
            } else {
                return false;
            }
        } else {
            $this->fecha = null;
            return true;
        }
    }

    public function setEstado($value)
    {
        if (Validator::validateBoolean($value)) {
            $this->estado = $value;
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
        return $this->id;
    }

    public function getDetalle()
    {
        return $this->detalle;
    }

    public function getCalificacion()
    {
        return $this->calificacion;
    }

    public function getComentario()
    {
        return $this->comentario;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getEstado()
    {
        return $this->estado;
    }
}
