<div class="container">
    <div class="card" style = "margin-top:180px; width: 80%; ">
        <div class="card-header">
            Data Transaksi Anda
        </div>
        <span class ="mt-2 p-2"><?php echo $this->session->flashdata('pesan')?></span>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Merk Mobil</th>
                    <th>No Plat</th>
                    <th>Harga Sewa</th>
                    <th>Action</th>
                    <th>Batal</th>
                </tr>
                <?php $no=1; foreach($transaksi as $tr):?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $tr->nama?></td>
                        <td><?php echo $tr->merk?></td>
                        <td><?php echo $tr->no_plat?></td>
                        <td>Rp. <?php echo number_format($tr->harga,0,',','.')?></td>
                        <td>
                            <?php if($tr->status_rental == "Selesai"){?>
                                <button class = "btn btn-sm btn-danger">Rental Selesai</button>
                            <?php }else{?>
                                <a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_rental)?>" class = "btn btn-sm btn-success">Cek Pembayaran</a>
                            <?php }?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>