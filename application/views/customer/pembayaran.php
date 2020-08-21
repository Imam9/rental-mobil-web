<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style = "margin-top:150px">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>
                <div class="card-body">
                    <table class="table">
                       <?php foreach($transaksi as $tr):?>
                        <tr>
                            <td>Merk Mobil</td>
                            <td>:</td>
                            <td><?php echo $tr->merk?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Rental</td>
                            <td>:</td>
                            <td><?php echo $tr->tanggal_rental?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Kembali</td>
                            <td>:</td>
                            <td><?php echo $tr->tanggal_kembali?></td>
                        </tr>
                        <tr>
                            <td>Biaya Sewa/ Hari</td>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($tr->harga,0,',','.')?></td>
                        </tr>

                        <tr>
                            <?php 
                                $x = strtotime($tr->tanggal_kembali);
                                $y = strtotime($tr->tanggal_rental);
                                $jmlhari = abs(($x -$y)/(60*60*24));
                            ?>
                            <td>Jumlah Hari Sewa</td>
                            <td>:</td>
                            <td><?php echo $jmlhari?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pembayaran</td>
                            <td>:</td>
                            <td><button class = "btn btn-sm btn-success"> <?php echo number_format($tr->harga * $jmlhari, 0,',','.')?></button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url('customer/transaksi/cetak_invoice/').$tr->id_rental?>" class = "btn btn-sm btn-secondary">Print Invoice</a></td>
                        </tr>

                        <?php endforeach ; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style = "margin-top:150px">
                <div class="card-header alert alert-primary">
                    Informasi Pembayaran
                </div>
                <div class="card-body">
                    <p class = "text-success mb-3">Silhakan melakukan pembayaran melalui nomer rekening di bawah ini : </p>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bank Mandiri 32424324324</li>
                        <li class="list-group-item">Bank BCA 3242432412324</li>
                        <li class="list-group-item">Bank BNI 32424324324</li>
                        <li class="list-group-item">Bank BRI 3242214324324</li>
                    </ul>
                    <?php 
                        if(empty($tr->bukti_pembayaran)){ ?>
                            <button style = "width : 100%; " type = "button" class = "btn btn-sm btn-danger" data-toggle = "modal" data-target = "#exampleModal">
                                Upload Bukti Pembayaran
                            </button>
                    
                        <?php }elseif($tr->status_pembayaran == '0'){?>
                            <button style = "width : 100%; " class = "btn btn-sm btn-warning"><i class = "fa fa-clock-o"></i> Menunggu Konfirmasi</button>
                        <?php }elseif($tr->status_pembayaran == '1'){?>
                            <button style = "width : 100%; " class = "btn btn-sm btn-success"><i class = "fa fa-check"></i>Pembayaran Selesai</button>
                        <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal untuk upload bukti pembayaran -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
         <form method = "POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi')?>" enctype = "multipart/form-data">
            <div class="form-gorup">
                <label for="">Upload Bukti Pembayaran</label>
                <input type="hidden" name = "id_rental" value = "<?php echo $tr->id_rental?>">
                <input type="file" name = "bukti_pembayaran" class = "form-control">
            </div>
        
        </div>
            <div class="modal-footer">
                <button type="sbmit" class="btn btn-sm btn-primary">Kirim</button>
            </div>
      </form>
    </div>
  </div>
</div>