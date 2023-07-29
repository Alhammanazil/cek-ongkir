<html>
<head>
    <title>Hasil</title>
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    <link href='assets/logo2.png' rel='shortcut icon'>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Hasil Cek Ongkos Kirim</h2>
        <hr><br>
        
        <strong>Pengiriman Dari:</strong>
        <?php echo $hasil->rajaongkir->origin_details->city_name?>
        <?php echo $hasil->rajaongkir->origin_details->province?><br><br>

        <strong>Tujuan Ke:</strong>
        <?php echo $hasil->rajaongkir->destination_details->city_name?>
        <?php echo $hasil->rajaongkir->destination_details->province?> <br><br>

        <strong>Menggunakan Jasa Kurir:</strong>
        <?php echo $hasil->rajaongkir->results[0]->name ?> <br><br>

        <strong>Berat paket:</strong>
        <?php echo ($hasil->rajaongkir->query->weight / 1000) ?>Kg <br><br>

        <strong>Biaya Pengiriman:</strong><br>
        <?php foreach ($hasil->rajaongkir->results[0]->costs as $biaya) : ?>
            <?php echo $biaya->service ?>: Rp. <?php echo number_format($biaya->cost[0]->value) ?> (<?php echo $biaya->cost[0]->etd ?> hari)<br>
        <?php endforeach ?>

    </div>
</body>

</html>