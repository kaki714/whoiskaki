<?php
// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica las credenciales (esto debe ser reemplazado con una autenticación segura)
    if ($username === "usuario" && $password === "contraseña") {
        // Redirige a la página de inicio después de iniciar sesión exitosamente
        header("Location: inicio.php");
        exit();
    } else {
        // Si las credenciales son incorrectas, redirige de nuevo al formulario de login
        header("Location: index.html");
        exit();
    }
}
?>
