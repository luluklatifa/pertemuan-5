<?php
    $pemasukan=50000000;
    $hutang_a=16500000;
    $hutang_b=9500000;
    $bunga_hutang_a=0.05;
    $bunga_hutang_b=0.045;

    $sisa_uang= $pemasukan - (($hutang_a + ($bunga_hutang_a * $hutang_a)) + ($hutang_b + ($bunga_hutang_b * $hutang_b)));
    $total_bunga_hutang = ($bunga_hutang_a * $hutang_a) + ($bunga_hutang_b * $hutang_b);
    $jumlah_total_hutang = $hutang_a + $hutang_b;

    echo "Sisa Uang : Rp $sisa_uang";
    echo "<br>";
    echo "Total Bunga Hutang : Rp $total_bunga_hutang";
    echo "<br>";
    echo "Jumlah Total Hutang : Rp $jumlah_total_hutang";

?>