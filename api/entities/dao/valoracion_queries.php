<?php
require_once('../../helpers/database.php');
/*
*	Clase para manejar el acceso a datos de la entidad CATEGORIA.
*/
class ValoracionesQueries
{
    /*
    *   Métodos para realizar las operaciones SCRUD (search, create, read, update, delete).
    */

    //Método para leer los registros de la tabla ordenandolos por los nombres de los productos por medio de una query general a la tabla
    public function readAll()
    {
        $sql = 'SELECT id_valoracion, nombre_producto, calificacion_producto, comentario_producto, fecha_comentario, estado_comentario
            FROM valoraciones
            INNER JOIN detalle_pedidos USING (id_detalle)
            INNER JOIN productos USING (id_producto)
                ORDER BY nombre_producto';
        return Database::getRows($sql);
    }

    //Método para consultar una columna específica de la tabla por medio de su id
    public function readOne()
    {
        $sql = 'SELECT id_valoracion, id_detalle, calificacion_producto, comentario_producto, fecha_comentario, estado_comentario
                FROM valoraciones      
                WHERE id_valoracion = ?';
        $params = array($this->id);
        return Database::getRow($sql, $params);
    }


    //Método para realizar la actualización de la tabla por medio de una query parametrizada
    public function updateRow()
    {
        $sql = 'UPDATE valoraciones
                SET id_detalle=?, calificacion_producto=?, comentario_producto=?, fecha_comentario=?, estado_comentario=?
                WHERE id_valoracion = ?';
        $params = array($this->detalle, $this->calificacion, $this->comentario, $this->fecha, $this->estado, $this->id);
        return Database::executeRow($sql, $params);
    }

    //Método para eliminar una columna de datos de la tabla por medio del id
    public function deleteRow()
    {
        $sql = 'DELETE FROM valoraciones
                WHERE id_valoracion = ?';
        $params = array($this->id);
        return Database::executeRow($sql, $params);
    }

    //Método para consultar datos de la tabla detalle_pedidos y llenar los datos del select
    public function readDetalle()
    {
        $sql = 'SELECT id_detalle, id_pedido, nombre_producto, cantidad_producto, precio_producto
        FROM detalle_pedidos';
        return Database::getRows($sql);
    }

    //Método para leer los comentarios del producto
    public function readComentarios()
    {
        $sql = 'SELECT c.nombre_cliente, p.nombre_producto, v.calificacion_producto, v.comentario_producto, fecha_comentario
        FROM valoraciones v
        JOIN detalle_pedidos dp ON v.id_detalle = dp.id_detalle
        JOIN productos p ON dp.id_producto = p.id_producto
        JOIN pedidos pe ON dp.id_pedido = pe.id_pedido
        JOIN clientes c ON pe.id_cliente = c.id_cliente
        WHERE p.id_producto = ?';
        $params = array($this->id_producto);
        return Database::getRows($sql, $params);
    }

            //Método para consultar una columna específica de la tabla por medio de su id
        public function readValoracion()
        {
            $sql = 'SELECT id_valoracion, id_detalle, calificacion_producto, comentario_producto, fecha_comentario, estado_comentario, nombre_producto
            FROM valoraciones
            INNER JOIN detalle_pedidos USING(id_detalle)
            INNER JOIN productos USING(id_producto)
            WHERE id_valoracion = ?';
            $params = array($this->id);
            return Database::getRow($sql, $params);
        }
}
