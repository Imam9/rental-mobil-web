<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Mobil</h1>
        </div>

        <a href="<?php echo base_url('admin/data_mobil/tambah_mobil')?>" class = "btn btn-primary mb-3">Tambah Data</a>
        <?php echo $this->session->flashdata('pesan')?>

        <table class = " table table-hover table-striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Type</th>
                    <th>Merk</th>
                    <th>No. Plat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($mobil as $mb) :?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><img width = "60px" src="<?php echo base_url().'assets/upload/'.$mb->gambar?>" alt=""></td>
                        <td><?php echo $mb->kode_type ?></td>
                        <td><?php echo $mb->merk ?></td>
                        <td><?php echo $mb->no_plat ?></td>
                        <td>
                            <?php
                                if($mb->status == "0"){
                                    echo "<span class = 'badge badge-danger'> Tidak Tersedia </span>";
                                } else {
                                    echo "<span class = 'badge badge-primary'> Tersedia </span>";
                                }
                            ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil?>" class = "btn btn-sm btn-success"><i class ="fas fa-eye"></i></a>
                            <a href="<?php echo base_url('admin/data_mobil/delete_mobil/').$mb->id_mobil?>" class = "btn btn-sm btn-danger"><i class ="fas fa-trash"></i></a>
                            <!-- <a onclick="deleteConfirm('<?php echo site_url('admin/data_mobil/delete_mobil/'.$mb->id_mobil) ?>')" href="#!" class = "btn btn-sm btn-danger"><i class ="fas fa-trash"></i></a> -->
                            <a href="<?php echo base_url('admin/data_mobil/update_mobil/').$mb->id_mobil?>" class = "btn btn-sm btn-primary"><i class ="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
                    <!-- Logout Delete Confirmation-->
        <!-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                        </div>
                    </div>
            </div>
        </div> -->
    </section>
</div>

<!-- <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script> -->
