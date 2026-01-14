<?php

function eliminarSesion($nombre = null) {
    if (session_status() === PHP_SESSION_NONE) session_start();

    if ($nombre) {
        unset($_SESSION[$nombre]); // Borra solo una cosa (ej: 'user_id')
    } else {
        session_destroy(); // Borra absolutamente todo
    }
}