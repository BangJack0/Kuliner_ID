<!DOCTYPE html>
<html lang="en">

<head>
    <title>KULINER ID</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
                <li><?php echo anchor('Auth/Hal_utama', '<strong>Kembali</strong>', 'class="tbl-biru"'); ?></li>
                <li><?php echo anchor('Auth/index', '<strong>Edit</strong>', 'class="tbl-biru"'); ?></li>
              
                </ul>
                </div>
            </div>
        </nav>
    </header>
<body>

    <div class="jumbotron-costum text-center">
    </div>

    <div class="container" style="margin-top: 30px">
      
        <h2>Comment</h2>
        <table class="table">
            <head>
                
            </head>
            <body>
                <?php if ($komentar_data) : ?>
                    <?php foreach ($komentar_data as $komentar) : ?>
                        <tr>
                            
                        <div class="container justify-content-center mt-5 border-left border-right">

<div class="d-flex justify-content-center py-2">
<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" width="90" >
    <div class="second py-2 px-2"> <span class="text1"> <?php echo $komentar->nama; ?></span>
        <div class="d-flex justify-content-between py-1 pt-2">
        <span><small class="font-weight-bold"><?php echo $komentar->isikomen; ?></small>
        </div>
    </div>
</div>          
                        </tr>
                    <?php endforeach; ?>
                <?php elseif (is_string($komentar_data)): ?>
                    <tr>
                        <td colspan="3">Tidak ada komentar.</td>
                    </tr>
                <?php endif; ?>
            </body>
        </table>
    </div>

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