<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Filter Laporan Transaksi</h1>
        </div>

        <form method = "POST" action="<?php echo base_url('admin/laporan')?>">
            <div class="form-group">
                <label for="">Dari Tanggal</label>
                <input type="date" name = "dari" class = "form-control">
                <?php echo form_error('dari','<div class ="text-small text-danger">','</div>')?>
            </div>
            <div class="form-group">
                <label for="">Sampai Tanggal</label>
                <input type="date" name = "sampai" class = "form-control">
                <?php echo form_error('sampai','<div class ="text-small text-danger">','</div>')?>
            </div>
            <button type = "submit" class = "btn btn-primary"><i class = "fas fa-eye"></i> Tampilkan Data</button>
        </form>
        <div class = "table-responsive mt-5">
            <table class = "table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Customer</th>
                    <th>Mobil</th>
                    <th>Tgl. Rental</th>
                    <th>Tgl. Kembali</th>
                    <th>Harga/Hari</th>
                    <th>Denda/Hari</th>
                    <th>Total Denda</th>
                    <th>Tanggal Dikembalikan</th>
                    <th>Status Pengembalian</th>
                    <th>Status Rental</th>

                </tr>
                <?php $no = 1; foreach($laporan as $tr):?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tr->nama?></td>
                        <td><?php echo $tr->merk?></td>
                        <td><?php echo date('d-m-Y',strtotime($tr->tanggal_rental))?></td>
                        <td><?php echo date('d-m-Y',strtotime($tr->tanggal_kembali))?></td>
                        <td>Rp. <?php echo number_format($tr->harga,0,',','.')?></td>
                        <td>Rp. <?php echo number_format($tr->denda,0,',','.')?></td>
                        <td>Rp. <?php echo $tr->total_denda?></td>
                        <td>
                            <?php
                                if($tr->tanggal_pengembalian == "0000-00-00"){
                                    echo "-";
                                }else{
                                    echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                                }
                            ?>
                        </td>
                        <td>
                            <?php 
                                if($tr->status_pengembalian == "Kembali"){
                                    echo "Kembali";
                                }else{
                                    echo "Belum Kembali";
                                }
                            ?>
                        </td>
                        <td>
                            <?php 
                                if($tr->status_rental == "Selesai"){
                                    echo "Selesai";
                                }else{
                                    echo "Belum Selesai";
                                }
                            ?>
                        </td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </section>
</div>
