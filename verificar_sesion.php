<?php
session_start();

// 🔐 Validar IP y User Agent para prevenir secuestro de sesión
if (!isset($_SESSION['ip'])) {
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
} elseif ($_SESSION['ip'] !== $_SERVER['REMOTE_ADDR'] || $_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT']) {
    session_unset();
    session_destroy();
    die("⚠️ Sesión finalizada por seguridad.");
}

// ⏰ Validar tiempo de inactividad
$limite = 900; // 15 minutos
if (isset($_SESSION['ultima_actividad']) && (time() - $_SESSION['ultima_actividad'] > $limite)) {
    session_unset();
    session_destroy();
    die("⏳ Sesión expirada.");
}

// ✅ Actualizar última actividad y regenerar ID de sesión
$_SESSION['ultima_actividad'] = time();
session_regenerate_id(true);

?>
