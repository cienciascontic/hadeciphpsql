<?php

function armarUsuario() {
return [
"nombre" => trim($_POST["nombre"]),
"apellido" => trim($_POST["apellido"]),
"email" => trim($_POST["correo"]),
];
}

function armarUsuarioConClave() {
return [
"nombre" => trim($_POST["nombredeusuario"]),
"contrasena" => password_hash($_POST["contrasenia"], PASSWORD_DEFAULT),
];
}

function crearUsuario ()
{

}


 ?>
