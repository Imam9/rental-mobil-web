<div class = "main-content">
    <div class = "section">
        <div class = "section-header">
            <h1>Form Tambah Type Mobil</h1>
        </div>
    </div>

    <?php foreach ($type as $tp) : ?>
    <form method = "POST" action="<?php echo base_url('admin/data_type/update_type_aksi')?>">
        <div class = "form-group">
            <label for="">Kode Type</label>
            <input type="hidden" name = "id_type" value ="<?php echo $tp->id_type?>" class = "form-control">
            <input type="text" name = "kode_type" value ="<?php echo $tp->kode_type?>" class = "form-control">
            <?php echo form_error('kode_type','<div class ="text-small text-danger">','</div>')?>        
        </div>
        <div class = "form-group">
            <label for="">Nama Type</label>
            <input type="text" name = "nama_type" value = "<?php echo $tp->nama_type ?>" class = "form-control">
            <?php echo form_error('nama_type','<div class ="text-small text-danger">','</div>')?>        
        </div>
        <button type ="submit" class = "btn btn-primary">Submit</button>
        <button type ="reset" class = "btn btn-danger">Reset </button>
    </form>
    <?php endforeach;?>
</div>