<?php
session_start();

$usuarios = [
    'admin' => '12345',
    'usuario1' => 'clave1',
];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
    $_SESSION['usuario'] = [
        'username' => $username,
        'inicio_sesion' => date('Y-m-d H:i:s')
    ];
    header('Location: index.php');
    exit;
} else {
    echo '<p class="text-danger text-center mt-5">Usuario o contraseña incorrectos. <a href="login.php">Volver</a></p>';
}
?>
