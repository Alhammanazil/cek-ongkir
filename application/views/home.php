<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cek Ongkos Kirim</title>
        <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
        <link href='assets/logo2.png' rel='shortcut icon'>

        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
        <script>
        $(document).ready(function() {
            $('.autosearch').select2();
        });
        </script>

    </head>
    <body>

    </head>
  <body>
    <div class="container">
        <h2 class="text-center">Mengecek Ongkos Kirim</h2>
        <form method="post" action="<?php echo site_url('Main/cekongkir')?>">
        <hr>
        <div class="form-group">
            <label>Pilih Asal Kota</label>
            <select class="form-control autosearch" name="asal">
                <option>Pilih Kota</option>
                <?php if($kota) : ?>
                    <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                        <option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name ?></option>
                    <?php endforeach ?>
                <?php endif ?>
            </select>
            </div>
         </div>
         <div class="container"> 
            <label>Tujuan Kota</label>
            <select class="form-control autosearch" name="tujuan">
                <option>Pilih Kota</option>
                <?php if($kota) : ?>
                    <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                        <option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name ?></option>
                    <?php endforeach ?>
                <?php endif ?>
            </select>
         </div><br>
         <div class="container">
            <label>Berat Paket</label>
            <input type="text" name="berat" class="form-control">
         </div>
         <div class="container">
            <label>Pilih Jenis Kurir</label>
            <select class="form-control" name="kurir">
                <option value="">Pilih Kurir</option>
                <option value="jne">JNE</option>
                <option value="pos">POS Indonesia</option>
                <option value="tiki">TIKI</option>
            </select>
         </div><br>
         <div class="container">
            <input type="submit" value="Cek Ongkir" class="btn btn-primary" name="submit">
         </div>
        </form>
    </div>
    </body>
</html>