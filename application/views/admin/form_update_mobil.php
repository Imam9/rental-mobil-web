<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Mobil</h1>
        </div>

        <div class = "card">
            <div class = "card-body">
            <?php foreach ($mobil as $mb) : ?>
            <form method="POST" action ="<?php echo base_url('admin/data_mobil/update_mobil_aksi')?>" enctype = "multipart/form-data">
                <div class = "row">
                    <div class = "col-md-6">
                        <div class = "form-group">
                            <label>Type Mobil</label>
                            <input type="hidden" name = "id_mobil" value = "<?php echo $mb->id_mobil ?>">
                            <select name="kode_type" id="" class = "form-control">
                                <option value="<?php echo $mb->kode_type?> ">--Pilih Type Mobil</option>
                                <?php foreach($type as $tp) :?>
                                    <option value="<?php echo $tp->kode_type?>"><?php echo $tp->nama_type?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('kode_type','<div class ="text-small text-danger">','</div>')?>
                        </div>
                        <div class = "form-group">
                            <label for="">Merk</label>
                            <input type="text" name = "merk" value = "<?php echo $mb->merk?> " class = "form-control">
                            <?php echo form_error('merk','<div class ="text-small text-danger">','</div>')?>
                        </div>
                        <div class = "form-group">
                            <label for="">No Plat</label>
                            <input type="text" name = "no_plat" value = "<?php echo $mb->no_plat?>" class = "form-control">
                            <?php echo form_error('no_plat','<div class ="text-small text-danger">','</div>')?>
                        </div>
                        <div class = "form-group">
                            <label for="">Warna</label>
                            <input type="text" name = "warna" class = "form-control" value = "<?php echo $mb->warna?>">
                            <?php echo form_error('warna','<div class ="text-small text-danger">','</div>')?>
                        </div>
                         <div class = "form-group">
                            <label for="">AC</label>
                            <select name="ac" class = "form-control">
                                <option <?php if($mb->ac == "1"){echo "selected='selected'";} echo $mb->ac;?> value = "1">Tersedia</option>
                                <option <?php if($mb->ac == "0"){echo "selected='selected'";} echo $mb->ac;?> value = "0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class ="text-small text-danger">','</div>')?>
                        </div>
                        <div class = "form-group">
                            <label for="">Supir</label>
                            <select name="supir" class = "form-control">
                                <option <?php if($mb->supir == "1"){echo "selected='selected'";} echo $mb->supir;?> value = "1">Tersedia</option>
                                <option <?php if($mb->supir == "0"){echo "selected='selected'";} echo $mb->supir;?> value = "0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class ="text-small text-danger">','</div>')?>
                        </div>
                        <div class = "form-group">
                            <label for="">Mp3 Player</label>
                            <select name="mp3_player" class = "form-control">
                                <option <?php if($mb->mp3_player == "1"){echo "selected='selected'";} echo $mb->mp3_player;?> value = "1">Tersedia</option>
                                <option <?php if($mb->mp3_player == "0"){echo "selected='selected'";} echo $mb->mp3_player;?> value = "0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class ="text-small text-danger">','</div>')?>
                        </div>
                        <div class = "form-group">
                            <label for="">Central Lock</label>
                            <select name="central_lock" class = "form-control">
                                <option <?php if($mb->central_lock == "1"){echo "selected='selected'";} echo $mb->central_lock;?> value = "1">Tersedia</option>
                                <option <?php if($mb->central_lock == "0"){echo "selected='selected'";} echo $mb->central_lock;?> value = "0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class ="text-small text-danger">','</div>')?>
                        </div>
                    </div>
                    <div class = "col-md-6">
                        <div class = "form-group">
                            <label for="">Tahun</label>
                            <input type="text" name = "tahun" value = "<?php echo $mb->tahun?> "class = "form-control">
                            <?php echo form_error('tahun','<div class ="text-small text-danger">','</div>')?>
                        </div>
                        <div class = "form-group">
                            <label for="">Denda</label>
                            <input type="text" name = "denda" value = "<?php echo $mb->denda?> "class = "form-control">
                            <?php echo form_error('denda','<div class ="text-small text-danger">','</div>')?>
                        </div>
                        <div class = "form-group">
                            <label for="">Harga</label>
                            <input type="text" name = "harga" value = "<?php echo $mb->harga?> "class = "form-control">
                            <?php echo form_error('harga','<div class ="text-small text-danger">','</div>')?>
                        </div>
                        <div class = "form-group">
                            <label for="">Status</label>
                            <select name="status" class = "form-control">
                                <option <?php if($mb->status == "1"){echo "selected='selected'";} echo $mb->status;?> value = "1">Tersedia</option>
                                <option <?php if($mb->status == "0"){echo "selected='selected'";} echo $mb->status;?> value = "0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class ="text-small text-danger">','</div>')?>
                        </div>
                        <div class = "form-group">
                            <label for="">Gambar</label>
                            <input type="file" name = "gambar" class = "form-control" value = "<?php echo $mb->gambar?>">
                        </div>
                        <button type = "submit" class = "btn btn-primary mt-4">Simpan</button>
                        <button type = "reset" class = "btn btn-danger mt-4">Reset</button>
                    </div>
                </div>
            </form>
            <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>