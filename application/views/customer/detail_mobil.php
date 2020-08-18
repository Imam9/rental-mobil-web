<div class = "container mt-5 mb-5">
    <div class = "card" style = "margin-top:200px;">
        <div class = "card-body">
            <?php foreach ($detail as $dt) :?>
                <div class = "row">
                    <div class = "col-md-6">
                        <img style = "width : 500px; height : 400px; " src="<?php echo base_url().'assets/upload/'.$dt->gambar?>" alt="">
                    </div>
                    <div class = "col-md-6">
                        <table class = "table">
                            <tr>
                                <th>Merk</th>
                                <th><?php echo $dt->merk?></th>
                            </tr>
                            <tr>
                                <th>Nomor Plat</th>
                                <th><?php echo $dt->no_plat?></th>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <th><?php echo $dt->warna?></th>
                            </tr>
                            <tr>
                                <th>Tahun Produksi Mobil</th>
                                <th><?php echo $dt->tahun?></th>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php 
                                    if($dt->status == "1"){
                                        echo "<span>Tersedia</span>";
                                    }else{
                                        echo "<span>Tidak Tersedia</span>"; 
                                    }
                                
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <?php
                                    if ($dt->status == "0") {
                                    echo "<span class = 'btn btn-danger disable'>Telah di Rental</span>";
                                    }else{
                                    echo anchor('customer/rental/tambah_rental'.$dt->id_mobil, '<button class = "btn btn-success">Rental</button>');
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>