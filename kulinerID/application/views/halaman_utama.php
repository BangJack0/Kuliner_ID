<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Tugas Akhir</title>
    <link href="<?php echo base_url('assets/');?>css/cssku" rel="stylesheet">
</head>
<body> 
    <header >
    
        
            <div class="wrapper">
                <a href="" title="kuliner.id">
                <div class="logo" style="background-image: url('<?php echo base_url("assets/img/logo111.png"); ?>');">
            <nav>
                 </a>
                <div class="menu">
                <ul class="justify-content-end">
                <li><?php echo anchor('Crud/comment', '<strong>Komentar</strong>', 'class="btn"'); ?></li>
                <li><a href="#Kuliner">Kuliner</a></li>
                <li><a href="#Rekomendasi">Rekomendasi</a></li>
                <li><a href="#makanan">Makanan khas</a></li>
                <li><a href="#partners">Partners</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><?php echo anchor('Auth/index', '<strong>Edit</strong>', 'class="tbl-biru"'); ?></li>

                </ul>
                </div>
            </div>
        </nav>
    </header>
    <body>
    
    <div class="jumbotron" style="background-image: url('<?php echo base_url("assets/img/aneka.png"); ?>');">
    <div class="text-over-image">Beragam Macam Makanan Khas</div>
        </div>
        
        <div class="container">
        <section id="Kuliner">
            <?php if ($kuliner_data) : ?>
            <?php foreach ($kuliner_data as $data) : ?>
            <div class="post-container">
                    <form action="<?php echo site_url('Auth/halkuliner'); ?>" method="POST">
                        <h2><?php echo $data->kuliner_judul; ?></h2>
                        <div><a class="navbar-brand"><img src="<?php echo site_url('./upload/'.$data->kuliner_gambar) ?>" width="100%"></a></div>
                        <p><?php echo $data->kuliner_isi; ?></p>
                    </form>
                </div>
                </section>
            <?php endforeach; ?>
        <?php else : ?>
            <p>data kuliner tidak ditemukan.</p>
        <?php endif; ?>
    </div>
</div>

                       
<section id="Rekomendasi">
    <div class="tengah">
    <div class="kolom">
         <p class="deskripsi">Kuliner.ID</p>
        <h2 class="deskripsi2">Rekomendasi</h2>
        
    </div>
</section>
            <section id="makanan">
            <table width="1500"><thead>
                <tr>
                <th>No</th>
                <th>Nama Makanan</th>
                <th>Asal Daerah</th>
                </tr></thead>
                <tr>
                <td>1</td>
                <td>Serabi</td>
                <td>Soto</td>
                </tr>
                <tr>
                <td>2</td>
                <td>Mie Aceh</td>
                <td>Nanggroe Aceh Darussalam</td>
                </tr>
                <tr>
                <td>3</td>
                <td>Rendang</td>
                <td>Sumatera Barat</td>
                </tr>
                <tr>
                <td>4</td>
                <td>Kerak Telur</td>
                <td>Jakarta</td>
                </tr>
                <tr>
                <td>5</td>
                <td>Rujak Cingur</td>
                <td>Jawa Timur</td>
                </tr>
                <tr>
                <td>6</td>
                <td>Papeda</td>
                <td>Papua Timur</td>
                </tr>
                <tr>
                <td>7</td>
                <td>Pempek</td>
                <td>Sumatera Selatan</td>
                </tr>
                <tr>
                <td>8</td>
                <td>Gulai Ikan Patin</td>
                <td>Jambi</td>
                </tr>
                <tr>
                <td>9</td>
                <td>Sate Bandeng</td>
                <td>Banten</td>
                </tr>
                <tr>
                <td>10</td>
                <td>Soto Banjar</td>
                <td>Banjarmasin</td>
                </tr>
                </table>    
            </section>
           
                        <p><b>Kabar gembira buat kamu yang ingin menikmati wisata kuliner di Indonesia, Kulineran.ID menyediakan katalog tempat makan favorit dengan berbagai macam rasa dan olahan.</b>
                           <p> Bingung Makanan Apa Yang Enak? Yuk Coba Rekomendasi Di Bawah Ini</p>
                    </div>
                    <div class="tengah">
                    <div class="kolom">
                    <div class="Admin-list">
                        <div class="kartu-Admin">
                          <img src="https://bangjack0.github.io/Kuliner.ID/asset/logo/logomakanann.png"/>
                            <p>Rekomendasi Makanan</p>
                        </div>
                        <div class="kartu-Admin">
                            <img src="https://bangjack0.github.io/Kuliner.ID/asset/logo/logominumann.png"/>
                            <p>Rekomendasi Minuman</p>
                        </div>
                        <div class="kartu-Admin">
                            <img src="https://bangjack0.github.io/Kuliner.ID/asset/logo/logolokasimakanan.png"/>
                            <p>Temukan Kuliner Terdekat Anda</p>
                        </div>
                        <div class="kartu-Admin">
                            <img src="https://bangjack0.github.io/Kuliner.ID/asset/logo/logosnack.png"/>
                            <p><b>Jajanan Snack</b> Cemilan</p>
                        </div>
                    </div>
                </div>
            </div>  
            </section>  
            <section id="partners">
                <div class="tengah">
                    <div class="kolom">
                        <p >Our Top Partners</p>
                        <h2>Partners</h2>
                        <p>Kami Telah Bekerja Sama Dengan</p>
                    </div>
                    <div class="partner-list">
                        <div class="kartu-partner">
                        <a href="https://shopee.co.id/m/shopeefood">
                        <img src="https://static.vecteezy.com/system/resources/previews/011/618/136/original/shopee-element-symbol-shopee-food-shopee-icon-free-vector.jpg" alt="Shopee Food"/></a>
                        </div>
                        <div class="kartu-partner">
                        <a href="https://food.grab.com/id/id/">
                            <img src="https://i1.wp.com/www.desaintasik.com/wp-content/uploads/2020/01/grabfood-desaintasik.png?resize=165%2C165&ssl=1"/></a>
                        </div>
                        <div class="kartu-partner">
                        <a href="https://www.gojek.com/en-id/gofood">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTAKnVM98DKYtspW4M3t1cR8VSEs9btUGfyPIvvFpjPPQAQzp6oSfpczKqKYYjkD3OGB0&usqp=CAU"/></a>
                        </div>
                        <div class="kartu-partner">
                        <a href="https://www.indonesia.travel/id/id/home">
                            <img src="https://cf.shopee.co.id/file/11a7204303d381fa0ec477e8e63d19f9"/></a>
                        </div>
                        <div class="kartu-partner">
                        <a href="https://home.amikom.ac.id/">
                            <img src="https://seeklogo.com/images/A/amikom-university-logo-9CE2EAFA60-seeklogo.com.png"/></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <div id="contact">
        
            <div class="wrapper">
            
                <a title="kuliner.id">
                
                <div class="footer">
                
                    <div class="footer-section">
                        <h3>Kuliner.ID</h3>
                        <h5>Mengenal Cita Rasa Kuliner Nusantara Dari Sabang Sampai Merauke</h5>
                    </div>
                    <div class="footer-section">
                        <h3>About</h3>
                        <h5>Banyak Sekali Kuliner Nusantara Yang Sangat Menarik Untuk Dicoba, Maka Dari Itu
                            Kami Menyediakan Platform Kuliner Dari Berbagai Daerah Di indonesia.</h5>
                    </div>
                    <div class="footer-section">
                        <h3>Contact</h3>
                        <h5>Email : kulinerid.gmail.com</h5>
                        <h5>082189467321</h5>
                        <h5>Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</h5>
                    </div>
                    <div class="footer-section">
                        <h3>Social</h3>
                        <h5><img src="https://bangjack0.github.io/Kuliner.ID/asset/logo/logoig.png" width="35">kuliner.id</h5>
                        <h5><img src="https://bangjack0.github.io/Kuliner.ID/asset/logo/logofb.png" width="35">Kuliner_ID</h5>
                        <h5><img src="https://bangjack0.github.io/Kuliner.ID/asset/logo/tiktoklogo.png" width="35">Kuliner.ID</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo2" style="background-image: url('<?php echo base_url("assets/img/logo111.png"); ?>');">
        <div id="copyright">
            <div class="wrapper">
            
                &copy; 2023. <b>PT.Kuliner.ID Indonesia.</b> All Rights Reserved.
                <p>&copy; 2017-2023 Company, Inc.</p>
            </div>
        </div>
       
            <footer class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
                <p class="company">
                    <a href="#">Privacy</a> <a href="#">Terms</a>

                </p>
                <div class="container" style="margin-top: 30px">
        
    </div>
            </footer>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>