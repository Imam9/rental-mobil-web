<div class="container">
    <div class="card" style = "margin-top:200px; margin-bottom : 100px;">
        <div class="card-header">
            Form Rental Mobl
        </div>
        <div class="card-body">
            <?php foreach($detail as $dt) :?>
                <form action="<?php echo base_url('customer/rental/tambah_rental_aksi')?>" method = "POST">
                    <div class="form-group">
                        <label for="">Harga Sewa/ Hari</label>
                        <input type="hidden" name = "id_mobil" value = "<?php echo $dt->id_mobil?>">
                        <input type="text" name = "harga" class = "form-control" value = "<?php echo $dt->harga?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Denda</label>
                        <input type="text" name = "denda" class = "form-control" value = "<?php echo $dt->denda?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Rental</label>
                        <input type="date" name = "tanggal_rental" class = "form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kembali</label>
                        <input type="date" name = "tanggal_kembali" class = "form-control">
                    </div>
                    <button type = "submit" class = "btn btn-warning">Rental</button>
                </form>
            <?php endforeach ; ?>
        </div>
    </div>
</div>