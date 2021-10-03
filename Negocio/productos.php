<?php
class Productos extends Datos {
  //Atributos, corresponden a cada uno de los campos de la tabla de clientes
  public $Nombre;
  public $Precio;
  public $CategoriaId;
  public $Descripcion;
 
 
  public function ListarTodos( $paBuscar ) {
    $Cadena = "SELECT productos.ProductoId, 
    productos.Nombre AS NombreProducto,
    productos.Precio,
    productos.CategoriaId,
    categorias.Nombre AS NombreCategoria,
    productos.Descripcion
    FROM
    Productos
    INNER JOIN categorias ON Productos.CategoriaId = categorias.CategoriaId
    WHERE
    (productos.Nombre LIKE '%".$paBuscar."%')"; 
    return $Cadena; 
  }
  public function CantTotalRegistros( $paBuscar ) {
    $Cadena = "SELECT COUNT(ProductoId) FROM productos INNER JOIN categorias ON productos.
    CategoriaId = categorias.CategoriaId
    WHERE
    (productos.Nombre LIKE '%".$paBuscar."%')";
    return mysqli_fetch_row($this->EjecutarQuery( $Cadena ));
  }

  public function ListarTodoReporte() {
    $Cadena = "SELECT productos.ProductoId,
    productos.Nombre AS NombreProducto,
    productos.Precio,
    productos.CategoriaId,
    categorias.Nombre AS NombreCategoria,
    productos.Descripcion
    FROM productos
    INNER JOIN categorias ON productos.CategoriaId = categorias.CategoriaId";
    return $this->EjecutarQuery( $Cadena );
  }

  public function BuscarPorId( $paId ) {
    $Cadena = "SELECT productos.ProductoId,
    productos.Nombre AS NombreProducto,
    productos.Precio,
    productos.CategoriaId,
    categorias.Nombre AS NombreCategoria,
    productos.Descripcion
    FROM productos
    INNER JOIN categorias ON productos.CategoriaId = categorias.CategoriaId
    WHERE 
    productos.ProductoId = '".$paId."' ";
    return $this->EjecutarQuery( $Cadena );
    }

    public function Agregar() {
    $Cadena = "INSERT INTO productos (
      Nombre,
      Precio,
      CategoriaId,
      Descripcion )
      VALUES (
        '".addslashes($this->Nombre)."',
        '".addslashes($this->Precio)."',
        '".addslashes($this->CategoriaId)."',
        '".addslashes($this->Descripcion)."' ) ";
        return $this->EjecutarQuery( $Cadena );
    }

    public function Actualizar( $paId ) {
      $Cadena = "UPDATE productos SET
      Nombre = '".addslashes($this->Nombre)."',
      Codigo = '".addslashes($this->Codigo)."',
      Precio = '".addslashes($this->Precio)."',
      CategoriaId = '".addslashes($this->CategoriaId)."',
      Descripcion = '".addslashes($this->Descripcion)."',
      WHERE ProductoId = '".$paId."' ";
      return $this->EjecutarQuery( $Cadena );
    }

    public function ListarTodoCombos() {
      $Cadena = "SELECT * FROM productos
      ORDER BY Nombre ASC";
      return $this->EjecutarQuery( $Cadena );
    }
  }
?>
