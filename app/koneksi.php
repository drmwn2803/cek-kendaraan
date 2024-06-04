<?php

$mysqli = new mysqli(
    "localhost",
    "root",
    "",
    "desa"
);

if (!$mysqli) {
    echo "Koneksi bermasalah !";
}
