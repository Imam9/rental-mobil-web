<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>
    </section>

    <form method ="POST" action="<?php echo base_url('admin/data_customer/tambah_customer_aksi') ?>">
        <div class = "form-group">
            <label for="">Nama</label>
            <input type="text" name = "nama" class = "form-control">
            <?php echo form_error('nama','<div class ="text-small text-danger">','</div>')?>
        </div>
        <div class = "form-group">
            <label for="">Username</label>
            <input type="text" name = "username" class = "form-control">
            <?php echo form_error('username','<div class ="text-small text-danger">','</div>')?>
        </div>
        <div class = "form-group">
            <label for="">Alamat</label>
            <input type="text" name = "alamat" class = "form-control">
            <?php echo form_error('alamat','<div class ="text-small text-danger">','</div>')?>
        </div>
        <div class = "form-group">
            <label for="">Gender</label>
            <select name="gender" class = "form-control">
                <option value="">-- Pilih Gender --</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <?php echo form_error('gender','<div class ="text-small text-danger">','</div>')?>
        </div>
        <div class = "form-group">
            <label for="">No. Telepon</label>
            <input type="text" name = "no_telepon" class = "form-control">
            <?php echo form_error('gender','<div class ="text-small text-danger">','</div>')?>
        </div>
        <div class = "form-group">
            <label for="">No. KTP</label>
            <input type="text" name = "no_ktp" class = "form-control">
            <?php echo form_error('no_ktp','<div class ="text-small text-danger">','</div>')?>
        </div>
        <div class = "form-group">
            <label for="">Password</label>
            <input type="password" name = "password" class = "form-control">
            <?php echo form_error('password','<div class ="text-small text-danger">','</div>')?>
        </div>

        <button type = "submit" class = "btn btn-primary">Submit</button>
        <button type = "reset" class = "btn btn-primary">reset</button>
    </form>
</div>