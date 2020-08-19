<section id="page-title-area" class="section-padding overlay">
<div class="container">
    <div class="row">
        <!-- Page Title Start -->
        <div class="col-lg-12">
            <div class="section-title  text-center">
                <h2>Our Cars</h2>
                <span class="title-line"><i class="fa fa-car"></i></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <!-- Page Title End -->
    </div>
</div>
</section>
<!--== Page Title Area End ==-->

<!--== Car List Area Start ==-->
<section id="car-list-area" class="section-padding">
<div class="container">
    <div class="row">
        <!-- Car List Content Start -->
        <div class="col-lg-12">
            <div class="car-list-content">
                <div class="row">
                    <!-- Single Car Start -->
                    <?php foreach($mobil as $mb):?>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-car-wrap">
                            <div class="car-list-thumb car-thumb-3">
                                <img style = "width : 100%; height : 100%;"src="<?php echo base_url('assets/upload/').$mb->gambar?>" alt="">
                            </div>
                            <div class="car-list-info without-bar">
                                <h2><a href="<?php ?>"><?php echo $mb->merk?></a></h2>
                                <h5>Rp. <?php echo number_format($mb->harga, 0 , ',','.')?>/ Hari</h5>
                                <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                <ul class="car-info-list">
                                    <li>
                                        <?php if($mb->ac == "1"){
                                            echo "<i class = 'fa fa-check-square text-warning'></i>";
                                        }else{
                                            echo "<i class = 'fa fa-times-circle text-danger'></i>";
                                        }
                                        ?> Ac
                                    </li>
                                    <li>
                                        <?php if($mb->supir == "1"){
                                            echo "<i class = 'fa fa-check-square text-warning'></i>";
                                        }else{
                                            echo "<i class = 'fa fa-times-circle text-danger'></i>";
                                        }
                                        ?> Supir
                                    </li>
                                    <li>
                                        <?php if($mb->mp3_player == "1"){
                                            echo "<i class = 'fa fa-check-square text-warning'></i>";
                                        }else{
                                            echo "<i class = 'fa fa-times-circle text-danger'></i>";
                                        }
                                        ?> mp3 Player
                                    </li>
                                    <li>
                                        <?php if($mb->central_lock == "1"){
                                            echo "<i class = 'fa fa-check-square text-warning'></i>";
                                        }else{
                                            echo "<i class = 'fa fa-times-circle text-danger'></i>";
                                        }
                                        ?> Central Lock
                                    </li>
                                </ul>
                                <p class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star unmark"></i>
                                </p>
                                <a href="#" class="rent-btn">Rental</a>
                                <a href="<?php echo base_url('customer/data_mobil/detail_mobil/').$mb->id_mobil?>" class="rent-btn">Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Car End -->

                    <?php endforeach;?>
                    <!-- Single Car End -->
                </div>
            </div>

           
            <!-- Page Pagination End -->
        </div>
        <!-- Car List Content End -->
    </div>
</div>
</section>
<!--== Car List Area End ==-->

<!--== Footer Area Start ==-->
<section id="footer-area">
<!-- Footer Widget Start -->
<div class="footer-widget-area">
    <div class="container">
        <div class="row">
            <!-- Single Footer Widget Start -->
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget">
                    <h2>About Us</h2>
                    <div class="widget-body">
                        <img src="assets/img/logo.png" alt="JSOFT">
                        <p>Lorem ipsum dolored is a sit ameted consectetur adipisicing elit. Nobis magni assumenda distinctio debitis, eum fuga fugiat error reiciendis.</p>

                        <div class="newsletter-area">
                            <form action="index.html">
                                <input type="email" placeholder="Subscribe Our Newsletter">
                                <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Single Footer Widget End -->

            <!-- Single Footer Widget Start -->
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget">
                    <h2>Recent Posts</h2>
                    <div class="widget-body">
                        <ul class="recent-post">
                            <li>
                                <a href="#">
                                    Hello Bangladesh! 
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Lorem ipsum dolor sit amet
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Hello Bangladesh! 
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    consectetur adipisicing elit?
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Single Footer Widget End -->

            <!-- Single Footer Widget Start -->
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget">
                    <h2>get touch</h2>
                    <div class="widget-body">
                        <p>Lorem ipsum doloer sited amet, consectetur adipisicing elit. nibh auguea, scelerisque sed</p>

                        <ul class="get-touch">
                            <li><i class="fa fa-map-marker"></i> 800/8, Kazipara, Dhaka</li>
                            <li><i class="fa fa-mobile"></i> +880 01 86 25 72 43</li>
                            <li><i class="fa fa-envelope"></i> kazukamdu83@gmail.com</li>
                        </ul>
                        <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
                    </div>
                </div>
            </div>
            <!-- Single Footer Widget End -->
        </div>
    </div>
</div>
<!-- Footer Widget End -->
</body>