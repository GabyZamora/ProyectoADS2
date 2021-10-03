<?php
class Clientes extends Datos {
  //Atributos, corresponden a cada uno de los campos de la tabla de clientes
  public $Nombre;
  public $Apellido;
  public $DUI;
  public $Direccion;
  public $Telefono;
 
  //Métodos
  public function ListarTodos( $paBuscar ) {
    $Cadena = "SELECT * FROM Clientes WHERE
    (Nombre LIKE '%".$paBuscar."%' OR Nombre LIKE '%".$paBuscar."%')";
    return $Cadena; //Acá no se ejecuta la cadena, porque se hace en la clase del paginador
  }
  public function CantTotalRegistros( $paBuscar ) {
    $Cadena = "SELECT COUNT(ClienteId) FROM Clientes WHERE
    (Nombre LIKE '%".$paBuscar."%' OR Nombre LIKE '%".$paBuscar."%')";
    return mysqli_fetch_row($this->EjecutarQuery( $Cadena ));
  } //Retorna el número de filas que tiene la consulta

  public function BuscarPorId( $paId ) {
    $Cadena = "SELECT * FROM Clientes WHERE 
    ClienteId = '".$paId."' ";
    return $this->EjecutarQuery( $Cadena );
    }
    public function Agregar() {
    $Cadena = "INSERT INTO Clientes (
      Nombre,
      Apellido,
      DUI,
      Direccion,
      Telefono, )
      VALUES (
        '".addslashes($this->Nombre)."',
        '".addslashes($this->Apellido)."',
        '".addslashes($this->DUI)."',
        '".addslashes($this->Direccion)."',
        '".addslashes($this->Telefono)."',
        'N' )";
        return $this->EjecutarQuery( $Cadena );
      }
      public function Actualizar( $paId ) {
        $Cadena = "UPDATE Clientes SET
        Nombre = '".addslashes($this->Nombre)."',
        Apellido = '".addslashes($this->Apellido)."',
        DUI = '".addslashes($this->DUI)."',
        Direccion = '".addslashes($this->Direccion)."',
        Telefono = '".addslashes($this->Telefono)."',
        WHERE ClienteId = '".$paId."' ";
        return $this->EjecutarQuery( $Cadena );
      }
    }
    ?>

