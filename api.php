<?php
const API_URL = "https://www.whenisthenextmcufilm.com/api";

# Inicializar una nueva sesion de curl
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* Ejecutar la peticion
y guardamos el resultado */
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);
