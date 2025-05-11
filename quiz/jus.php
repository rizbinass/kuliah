<?php
$P_J = 0.72;
$P_J_prime = 0.28;
$P_L_given_J = 0.7;
$P_L_given_J_prime = 0.3;

$P_J_given_L = ($P_L_given_J * $P_J) / (($P_L_given_J * $P_J) + ($P_L_given_J_prime * $P_J_prime));

echo "Probabilitas jus berhasil jika laporan yang diterima adalah baik: " . number_format($P_J_given_L, 4);
?>
