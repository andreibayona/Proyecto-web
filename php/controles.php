<?php

//Revisar que las tablas divisoras (m*m) sirvan
@session_start();
require_once 'database.php';
$db2 = new database();

if (isset($_POST["enviarDatosP"])) {
    $db = new DataBase();
    $db->conectar();
    $db->insertar(array('', $_POST['nombres'], $_POST['apellidos'], $_POST['direccion'], $_POST['telefono1'], $_POST['telefono2'], $_POST['correoElectronico'], $_POST['sexo'], $_POST['genero'], $_POST['numeroDocumento'], $_POST['tipoDoc']), "DatosPersonales");
}
if (isset($_POST["Estudios"])) {
    $db = new DataBase();
    $db->conectar();
    $db->insertar(array('', $_POST['fechaIni'], $_POST['fechaTerm'], $_POST['continua'], $_POST['titulo'], $_POST['nomInstitucion']), "Estudios");
}
if (isset($_POST["referenciasProfesionales"])) {
    $db = new DataBase();
    $db->conectar();
    $db->insertar(array('', $_POST['nombreEmpresa'], $_POST['years'], $_POST['cargo'], $_POST['telefono'], $_POST['telefono2'], $_POST['correoElectronico'], $_POST['sexo'], $_POST['genero'], $_POST['numeroDocumento'], $_POST['tipoDoc']), "DatosPersonales");
}
/* 	Lineas de codigo que permiten obtener path de imagenes o archivos
	y hacer copia de los mismos en la carpeta img
	$foto = $_FILES["file"]["name"];
    $trozos = explode(".", $foto);
    $exten = $_POST ['cedula'] . "." . end($trozos);
    $ruta = $_FILES["file"]["tmp_name"];
    $destino = "img/" . $foto;
    $destino2 = "img/" . $exten;
    copy($ruta, $destino);
    rename($destino, $destino2); */

//Loguearse OK
// if (isset($_POST['entrarSistema'])) {
//     $db2->conectarDB();
//     $camposReq = ["*"];
//     $datosBus = [$_POST ['usuario'], $_POST['clave'], "ACTIVO"];
//     $camposBus = ["usuario", "clave", "estadoUsuario"];
//     $db2->seleccionDatos($camposReq, $camposBus, $datosBus, "clientes");
//     $datosCaptcha = $_POST["g-recaptcha-response"];
//     if ($_SESSION["usuario"] != "" && $_POST["g-recaptcha-response"] != "") {
//         require 'perfil.php';
//     } else {
//         $_SESSION['usuario'] = "";
//         $_SESSION['tipoUsuario'] = "";
//         header("Location: errores.php");
//     }
// }
// //Cerrar sesion OK
// if (isset($_POST['salirSistema'])) {
//     if ($_SESSION['usuario'] != "") {
//         $_SESSION['usuario'] = "";
//     }
//     require 'index.php';
// }
//
// //Insertar y verificar Clientes OK
// if (isset($_POST['enviarCliente'])) {
//     $db2->conectarDB();
//     $datosCaptcha = $_POST["g-recaptcha-response"];
//     if ($db2->verificarClientes($_POST ['documento'], "clientes") > 0) {
//         header("Location: errores.php");
//     } else if ($_POST["g-recaptcha-response"] != "") {
//         $datosReq = [0, $_POST ['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['tipoDocumento'],
//             $_POST['documento'], $_POST ['correo'], $_POST['universidad']
//             , $_POST['telefono'], $_POST ['tipoCliente']
//             , $_POST['usuario'], "ACTIVO", $_POST['clave'], $_POST['lat'], $_POST['lon']];
//         $db2->insertarDatos($datosReq, "clientes");
//         require 'index.php';
//     } else {
//         header("Location: errores.php");
//     }
// }
// //Insertar y verificar tutorias 1/2
// if (1 == 2) {
//     $db2->conectarDB();
//     //Cambiar condiciones
//     if ($db2->verificarClientes($_POST ['documento'], "clientes") > 0) {
//         echo "<h1>
//            Cedula ya registrada, retrocediendo...
//        </h1>";
//         echo "<script type=\"text/javascript\">
//             setTimeout(function(){ history.go(-1); },500);
//        </script>";
//         exit;
//     } else {
//
//     }
// }
// //Actualizar datos Usuario OK
// //Mostrar localización anterior en perfil
// if (isset($_POST['hacerCambios'])) {
//     $db2->conectarDB();
//     $datosReq = [$_POST ['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['tipoDocumento'], $_POST['documento'], $_POST['tipoUsuario'], $_POST['correo'], $_POST['telefono'], $_POST['clave'], $_POST['lat'], $_POST['lon']];
//     $camposReq = ["nombre", "apellido", "edad", "tipoDocumento", "documento", "tipoCliente", "correo", "telefono", "clave", "latitud", "longitud"];
//     $datosBusq = [$_SESSION['usuario'], $_SESSION['tipoUsuario']];
//     $camposBus = ["usuario", "tipoCliente"];
//     $db2->actualizarDatos($camposReq, $datosReq, $camposBus, $datosBusq, "clientes");
//     require 'perfil.php';
// }
// //Actualizar datos Tutorias 1/2
// if (1 == 2) {
//     $db2->conectarDB();
//     //Cambiar condiciones
//     if ($db2->verificarClientes($_POST ['documento'], "clientes") > 0) {
//         echo "<h1>
//            Cedula ya registrada, retrocediendo...
//        </h1>";
//         echo "<script type=\"text/javascript\">
//             setTimeout(function(){ history.go(-1); },500);
//        </script>";
//         exit;
//     } else {
//
//     }
// }
// //"Eliminar"  usuario OK
// if (isset($_POST['desactivarUsuario'])) {
//     $db2->conectarDB();
//     $datosReq = ["INACTIVO"];
//     $camposReq = ["estadoUsuario"];
//     $datosBusq = [$_SESSION['usuario']];
//     $camposBus = ["usuario"];
//     $db2->actualizarDatos($camposReq, $datosReq, $camposBus, $datosBusq, "clientes");
//     session_destroy();
//     require 'index.php';
// }
// //"Eliminar"  tutoria 1/2
// if (isset($_POST['desactivarUsuario'])) {
//     $db2->conectarDB();
//     $datosReq = ["INACTIVO"];
//     $camposReq = ["estadoUsuario"];
//     $datosBusq = [$_SESSION['usuario']];
//     $camposBus = ["usuario"];
//     $db2->actualizarDatos($camposReq, $datosReq, $camposBus, $datosBusq, "clientes");
//     session_destroy();
//     require 'index.php';
// }
//
// if (isset($_POST['crearXML'])) {
//     $db2->conectarDB();
//     $message = "";
//     $camposBus = ["documento", "nombre"];
//     $res = $db2->selectorOption("clientes", "documento , nombre");
//     while ($row = mysqli_fetch_array($res)) {
//         $message = "<xml><cc>" . $row[0] . "</cc><nombre>" . $row[1] . "</nombre></xml>";
//     }
//     echo $message;
//
//     $nombre_archivo = "reportados.txt";
//
//     if (file_exists($nombre_archivo)) {
//         $mensaje = "El Archivo $nombre_archivo se ha modificado";
//     } else {
//         $mensaje = "El Archivo $nombre_archivo se ha creado";
//     }
//
//     if ($archivo = fopen($nombre_archivo, "a")) {
//         if (fwrite($archivo, $message."\n")) {
//             echo "Se ha ejecutado correctamente";
//         } else {
//             echo "Ha habido un problema al crear el archivo";
//         }
//
//         fclose($archivo);
//     }
    require 'busquedasWeb.php';
}
