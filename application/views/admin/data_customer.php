<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>

        <a href="<?php echo base_url('admin/data_customer/tambah_customer')?>" class = "btn btn-primary mb-3">Tambah Customer</a>
        <?php echo $this->session->flashdata('pesan')?>

        <table class = "table table-striped table-responsive table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>No. Telfon</th>
                    <th>No. KTP</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php 
            $no = 1;
            foreach($customer as $cs) : ?>
            <tbody>    
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $cs->nama?></td>
                    <td><?php echo $cs->username?></td>
                    <td><?php echo $cs->alamat?></td>
                    <td><?php echo $cs->gender?></td>
                    <td><?php echo $cs->no_telepon?></td>
                    <td><?php echo $cs->no_ktp?></td>
                    <td><?php echo $cs->password?></td>
                    <td>
                        <a class = "btn btn-sm btn-danger" href="<?php echo base_url('admin/data_customer/delete_customer/').$cs->id_customer?>"><i class = "fas fa-trash"></i></a>
                        <a class = "btn btn-sm btn-primary" href="<?php echo base_url('admin/data_customer/update_customer/').$cs->id_customer?>"><i class = "fas fa-edit"></i></a>
                    </td>
                </tr>   
            </tbody>
            <?php endforeach;?>
        </table>
    </section>
<div>
