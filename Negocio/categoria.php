<?php
class Categorias extends Datos {
  //Atributos, corresponden a cada uno de los campos de la tabla de clientes
  public $Nombre;
  public $Descripcion;
 
  //Métodos
  public function ListarTodos( $paBuscar ) {
    $Cadena = "SELECT * FROM categorias WHERE
    (Nombre LIKE '%".$paBuscar."%' OR Nombre LIKE '%".$paBuscar."%')";
    return $Cadena; //Acá no se ejecuta la cadena, porque se hace en la clase del paginador
  }
  public function CantTotalRegistros( $paBuscar ) {
    $Cadena = "SELECT COUNT(CategoriaId) FROM categorias WHERE
    (Nombre LIKE '%".$paBuscar."%' OR Nombre LIKE '%".$paBuscar."%')";
    return mysqli_fetch_row($this->EjecutarQuery( $Cadena ));
  } //Retorna el número de filas que tiene la consulta

  public function BuscarPorId( $paId ) {
    $Cadena = "SELECT * FROM categorias WHERE 
    CategoriaId = '".$paId."' ";
    return $this->EjecutarQuery( $Cadena );
    }
    public function Agregar() {
    $Cadena = "INSERT INTO categorias (
      Nombre,
      Descripcion,
     )
      VALUES (
        '".addslashes($this->Nombre)."',
        '".addslashes($this->Descripcion)."',
        'N' )";
        return $this->EjecutarQuery( $Cadena );
      }
      public function Actualizar( $paId ) {
        $Cadena = "UPDATE Categorias SET
        Nombre = '".addslashes($this->Nombre)."',
        Descripcion = '".addslashes($this->Descripcion)."',
        WHERE CategoriaId = '".$paId."' ";
        return $this->EjecutarQuery( $Cadena );
      }
    }
    ?>

