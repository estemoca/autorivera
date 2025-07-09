<?php
//$conn = new mysqli("localhost", "escuela3_root", "Teresa0808.","escuela3_escuela");
$conn = new mysqli("localhost", "root", "","autorivera");
$conn->query("SET NAMES 'utf8'");
if ($conn->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
