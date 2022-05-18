<?php

$json = '{
  "nama": "Sanindya Berlian Savita",
  "domisili": "Tuban",
  "usia": 20,
  "wni": true,
  "hobi": [
    "Berenang", "Bernyanyi", "Bertamasya"
  ]
}';

$mahasiswa = json_decode($json);

echo "Nama: {$mahasiswa->nama} <br>";
echo "Domisili: {$mahasiswa->domisili} <br>";

echo "Hobi: " . implode(", ", $mahasiswa->hobi);