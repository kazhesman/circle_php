<?php
$r = rand(0, 100);
const pi = 3.14;
$P = pi * $r * $r;
$d = $r * 2;
echo "Радиус круга: $r Площадь круга: $d";
echo "<div style=\"width:{$d}px;height:{$d}px;border-radius:50%;background:blue;\"></div>";