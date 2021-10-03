<?php
class Usuarios extends Datos {
  //Atributos, corresponden a cada uno de los campos de la tabla de clientes
  public $Nombre;
  public $Apellido;
  public $Correo;
  public $Usuario
  public $Password;
 
  //Métodos
  public function ListarTodos( $paBuscar ) {
    $Cadena = "SELECT * FROM usuarios WHERE
    (Nombre LIKE '%".$paBuscar."%' OR Usuario LIKE '%".$paBuscar."%')";
    return $Cadena; 
  }
  public function CantTotalRegistros( $paBuscar ) {
    $Cadena = "SELECT COUNT(UsuarioId) FROM Usuarios WHERE
    (Nombre LIKE '%".$paBuscar."%' OR Usuario LIKE '%".$paBuscar."%')";
    return mysqli_fetch_row($this->EjecutarQuery( $Cadena ));
  } 

  public function BuscarPorId( $paId ) {
    $Cadena = "SELECT * FROM Usuarios WHERE 
    UsuarioId = '".$paId."' ";
    return $this->EjecutarQuery( $Cadena );
    }
    public function Agregar() {
    $Cadena = "INSERT INTO Usuarios (
      Nombre,
      Apellido,
      Correo,
      Usuario,
      Password,
     )
      VALUES (
        '".addslashes($this->Nombre)."',
        '".addslashes($this->Apellido)."',
        '".addslashes($this->Correo)."',
        '".addslashes($this->Usuario)."',
        '".addslashes($this->Password)."',
        'N' )";
        return $this->EjecutarQuery( $Cadena );
      }
      public function Actualizar( $paId ) {
        $Cadena = "UPDATE Usuarios SET
        Nombre = '".addslashes($this->Nombre)."',
        Apellido = '".addslashes($this->Apellido)."',
        Correo = '".addslashes($this->Correo)."',
        Usuario = '".addslashes($this->Usuario)."',
        Password = '".addslashes($this->Password)."',

        WHERE UsuarioId = '".$paId."' ";
        return $this->EjecutarQuery( $Cadena );
      }

      public function ReestablecerPassword( $paId ) {
            $Cadena = "UPDATE Usuarios SET
            Password = '".addslashes(md5('admin'))."'
            WHERE UsuarioId = '".$paId."' ";
            return $this->EjecutarQuery( $Cadena );
      }
      public function ValidarLogin( $paUsua, $paPass ) {
            $Cadena = "SELECT * FROM Usuarios WHERE Usuario =
            '".$paUsua."' AND Password = '".$paPass."' ";
            return $this->EjecutarQuery( $Cadena );
      }
      public function ObtenerPasswordActual( $paIdUsua ) {
            $Cadena = "SELECT * FROM Usuarios WHERE UsuarioId =
            '".$paIdUsua."' ";
            return $this->EjecutarQuery( $Cadena );
      }
      public function CambiarPassword( $paId ) {
            $Cadena = "UPDATE Usuarios SET
            Password = '".addslashes(md5($this->Password))."'
            WHERE UsuarioId = '".$paId."' ";
            return $this->EjecutarQuery( $Cadena );
      }
    }
  ?>