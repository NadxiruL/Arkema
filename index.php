<?PHP
	include("database/db_conection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Program e-Waste</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">
  <link href="img/favicon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index.html" class="scrollto"><span>e</span>Waste</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html"><img src="img/ewaste.png" alt="" title="" /></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Utama</a></li>
          <li><a href="#about-us">Mengenai</a></li>
          <li><a href="#features">Sisa Elektronik</a></li>
          <li><a href="#screenshots">Kenapa Lupus</a></li>
          <li><a href="#testimonials">Testimoni</a></li>
          <li><a href="#pricing">Lupus Sekarang</a></li>
          <li><a href="#contact">Hubungi Kami</a></li>
		  <li><a href="#daftarcollecter">Daftar Collector</a></li>
          <li>
   
          </li>
          <li>
          	<a href="community/"><i class="fas fa-sign-in-alt"></i> MASUK</a>
</li>





        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  	<h4 class="translateweb"><a href="index.html">BM</a> | <a href="en.html">EN</a></h4>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1><br>Program e-Waste</h1>
      <h2>
  	  Lupuskan barang elektronik anda dengan bijak <i class="fas fa-check-circle fa-xs" style="color: green;"></i>
  	  <br>
  	<i class='fas fa-recycle fa-spin' style='font-size:15px'></i> reduce, reuse, recycle <i class='fas fa-recycle fa-spin' style='font-size:15px'></i>
      <br>
    </h2>
      <img src="img/hero-img.png" alt="Hero Imgs">
      <a href="#get-started" class="btn-get-started scrollto"><i class='fas fa-chevron-down'></i></a>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Get Started Section
  ============================-->
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    
    <div class="container">
 <!--      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/cloud.svg" alt="img" class="img-fluid">
            <h4>introducing whatsapp</h4>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/planet.svg" alt="img" class="img-fluid">
            <h4>user friendly interface</h4>
            
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/asteroid.svg" alt="img" class="img-fluid">
            <h4>build the app everyone love</h4>
            
          </div>
        </div>

      </div> -->
    </div>

  </section>

  <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="about-us padd-section wow bounceIn">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-5 col-4">
          <img src="img/logo.png" alt="About">
        </div>

        <div class="col-md-7 col-8">
          <div class="about-content">
	<?PHP 
	$hsn=mysqli_query($dbcon,"select * from announce where id='1'");
	$jhs=mysqli_fetch_array($hsn);
	?>
            <h2><strong><?PHP echo $jhs['title']; ?></strong></h2>
            <font><?PHP echo $jhs['des']; ?> </font>
<!-- 
            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i>Creative Design</li>
              <li><i class="fa fa-angle-right"></i>Retina Ready</li>
              <li><i class="fa fa-angle-right"></i>Easy to Use</li>
              <li><i class="fa fa-angle-right"></i>Unlimited Features</li>
              <li><i class="fa fa-angle-right"></i>Unlimited Features</li>
            </ul>
 -->
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Features Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeIn">

    <div class="container">
      <div class="section-title text-center">
        <h2>Sisa Elektronik Yang Diterima</h2>
        <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
      </div>
    </div>

    <div class="container">
      <div class="row">
<?PHP 
		$num=1;
		$hsn=mysqli_query($dbcon,"select * from item2 order by des ASC");
		while($jhs=mysqli_fetch_array($hsn)){
		?>
        <div class="col-sm-4 col-6">
          <div class="feature-block">
            <img src="img/s/<?PHP echo $jhs['pic'];?>" alt="img" class="img-fluid">
            <h4><?PHP echo $jhs['des'];?></h4>
          </div>
        </div>
<?PHP
}
?>
     

        

      </div>
    </div>
  </section>

  <!--==========================
    Screenshots Section
  ============================-->
  <section id="screenshots" class="padd-section text-center wow zoomIn">

    <div class="container">
      <div class="section-title text-center">
        <h2>Kenapa Nak Lupus ?</h2>
        <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
      </div>
    </div>

    <div class="container">

        <div><img src="img/banner.png" alt="img" style="width: 95%; height: 100%;"></div>

      </div>
    </div>

  </section>

  <!--==========================
    Video Section
  ============================-->

  <section id="video" class="text-center wow pulse">
    <div class="overlay">
      <div class="container-fluid container-full">
<br><br>
        <iframe width="350" height="300" src="https://www.youtube.com/embed/K62ANavtpwc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </div>
  </section>

  <!--==========================
    Team Section
  ============================-->
  <!-- <section id="team" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Team Member</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="img/team/1.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

       <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="img/team/2.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="img/team/3.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="img/team/4.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section> -->


  <!--==========================
    Testimonials Section
  ============================-->

  <section id="testimonials" class="padd-section text-center wow flash">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-8">

          <div class="testimonials-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner" role="listbox">

                <div class="carousel-item  active">

                  <div class="top-top">

                    <h2>Testimoni</h2>
                    <p>Terima kasih e-Waste! Saya dapat lupuskan henfon lama saya dengan lebih bijak. Dah lah dapat saguhati lepas lupus tu. Terbaik!!!</p>
                    <h4>Luqman<span>Pelajar PKT</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Testimoni</h2>
                    <p>Tahniah Program e-Waste, servis ini dapat digunakan oleh pelajar serta orang awam untuk menjana wang sampingan melalui melupuskan sisa elektronik yang sudah tidak digunakan</p>
                    <h4>Puan Zalina<span>Staf PKT</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Testimoni</h2>
                    <p>Saya sibuk bekerja, tidak ada masa untuk menghantar sisa elektronik yang terbengkalai di rumah. Terima kasih e-Waste kerana menyediakan servis ambil dan hantar sisa elektronik!</p>
                    <h4>Encik Kamal<span>Pekerja Swasta</span></h4>

                  </div>
                </div>

              </div>

              <div class="btm-btm">

                <ul class="list-unstyled carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ul>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="bukti" class="padd-section text-center wow tada">
	  <div class="container col-md-5 col-12">
	  	<div class="container">
				  	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100 rounded" src="img/b1.jpeg" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 rounded" src="img/b4.jpeg" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 rounded" src="img/b3.jpeg" alt="Third slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 rounded" src="img/b5.jpeg" alt="Third slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 rounded" src="img/b2.jpeg" alt="Third slide">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
			</div>
		</div>
	  </div>
	</section>
	
	
	
	<!--==========================
    Daftar Collector
  ============================-->
  <section id="daftarcollecter" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Daftar Sebagai Collector</h2>

    <div class="container">
      <div class="row">
	  
	  
	  
	  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container">

	 <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-4">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form class="form" action="" method="post">
                            <div class="form-group">
                                <label for="registerationid" class="text-white">Nombor Pendaftaran :</label><br>
								Nombor Pendaftaran :
                                <input type="text" name="nompendaftaran" placeholder="SSM / ID ORGANISASI" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name" class="text-white">Nama Organisasi / Syarikat / Industri :</label><br>
								Nama Organisasi / Syarikat / Industri :
                                <input type="text" name="namasyarikat" placeholder="Contoh PKT" class="form-control">
                            </div>
							
							<div class="form-group">
                                <label for="username" class="text-white">Username :</label><br>
								Username :
                                <input type="text" name="username"  class="form-control">
                            </div>
							
							<div class="form-group">
                                <label for="password" class="text-white">Password :</label><br>
								Password :
                                <input type="password" name="password"  class="form-control">
                            </div>
							
							<div class="form-group">
                                <label for="email" class="text-white">Email :</label><br>
								Email :
                                <input type="text" name="email"  class="form-control">
                            </div>
							
							<div class="form-group">
                                <label for="email" class="text-white">Nom. Telefon :</label><br>
								Nom. Telefon
                                <input type="text" name="nomtelefon"  class="form-control">
                            </div>
							
							<div class="form-group">
                                <label for="email" class="text-white">Status</label><br>
                                <input type="hidden" name="status" value="0"  class="form-control" >
                            </div>
							
							
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	
	</div>
</div>




<?PHP

include("database/db_conection.php");

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$nompendaftaran = $_POST['nompendaftaran'];
$namasyarikat = $_POST['namasyarikat'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nomtelefon =  $_POST['nomtelefon'];
$status = $_POST['status'];


$id=null;
$query=mysqli_query($dbcon ,"insert into collector values ('$id','$nompendaftaran','$namasyarikat', '$username', '$password', '$email', '$nomtelefon', '$status')");



?>

<?PHP
}
?>

	  
	  
	  

        

      
      </div>
    </div>
  </section>
  
  
  <!--==========================
    Daftar Community
  ============================-->
  <section id="daftarcollecter" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Daftar Sebagai Komuniti</h2>

    <div class="container">
      <div class="row">
	  
	  
	  
	  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container">

	 <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-4">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form class="form" action="" method="post">
                            <div class="form-group">

                            </div>
                            <div class="form-group">
                          <br>
								Nama :
                                <input type="text" name="costumer_name"  class="form-control">
                            </div>
							
							<div class="form-group">
                         
								Nombor Kad Pengenalan :
                                <input type="text" name="costumer_ic"  class="form-control">
                            </div>
							
							<div class="form-group">
                              
								Nombor Telefon :
                                <input type="text" name="costumer_contact"  class="form-control">
                            </div>
							
							                                <label for="registerationid" class="text-white">Kategori :</label><br>
								Pekerjaan :
                                <select name="costumer_job"  required class="form-control">
						   <option value="Professional">Professional</option>
						  <option value="Bekerja Sendiri">Bekerja Sendiri</option>
						  <option value="Berniaga">Berniaga</option>
						   <option value="Tidak Bekerja">Tidak Bekerja</option>

						</select> </br>
							
							<div class="form-group">
                         
								Alamat :
                                <textarea name="costumer_address" cols="10" rows="5" class="form-control"> </textarea>
                            </div>
							
						<!--	<div class="form-group">
                     
								Bidang Pekerjaan : <br>
                            
	    Professional   <input type="checkbox" name="costumer_job" value="Professional" class="form-control"> 
  Bekerja Sendiri <input type="checkbox" name="costumer_job" value="Bekerja Sendiri" class="form-control">
 Berniaga <input type="checkbox" name="costumer_job" value="Berniaga" class="form-control">
  Tidak Bekerja  <input type="checkbox" name="costumer_job" value="Tidak Bekerja" class="form-control">
                            </div> -->
							
							<div class="form-group">
                                <label for="email" class="text-white">Nom. Telefon :</label><br>
								Daerah :
                                     <select name="costumer_daerah"  required class="form-control">
						   <option value="Kuala Terengganu">Kuala Terengganu</option>
						  <option value="Setiu">Setiu</option>
						  <option value="Dungun">Dungun</option>
						   <option value="Kemaman">Kemaman</option>
						    <option value="Besut">Besut</option>
							 <option value="Kuala Nerus">Kuala Nerus</option>
							  <option value="Marang">Marang</option>
						</select> 
                            </div>
							
												
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	
	</div>
</div>




<?PHP

include("database/db_conection.php");

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$costumer_name = $_POST['costumer_name'];
$costumer_ic = $_POST['costumer_ic'];
$costumer_contact = $_POST['costumer_contact'];
$costumer_address = $_POST['costumer_address'];
$costumer_daerah = $_POST['costumer_daerah'];
$costumer_job = $_POST['costumer_job'];

$id=null;
$query=mysqli_query($dbcon ,"insert into costumer values ('$id','$costumer_type','$costumer_name', '$costumer_ic', '$costumer_contact', '$costumer_address', '$costumer_daerah', '$costumer_job')");



?>

<?PHP
}
?>

	  
	  
	  

        

      
      </div>
    </div>
  </section>
	

  <!--==========================
    Pricing Table Section
  ============================-->
  <section id="pricing" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Lupus Sekarang</h2>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>HANTAR SENDIRI</h4>
              <img src="img/hantar.png">
              <ul class="list-unstyled">
                <li>Hantar ke JTMK PKT</li>
                <li><a href="https://goo.gl/maps/VxpYSbkmuLC2QqQE6">Lokasi JTMK PKT</a>
                	<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63561.08080940006!2d103.10046147779434!3d5.329935010179858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x31b7be7bd94b05d9%3A0x8420c11e305a3e1d!2spoliteknik+kuala+terengganu%5C!3m2!1d5.329936!2d103.13548089999999!5e0!3m2!1sen!2ssg!4v1562639549161!5m2!1sen!2ssg" width="600" height="450" frameborder="0" style="border:0; width: 90%; height: 100%;" allowfullscreen></iframe>
                </li>
              </ul>
              <div class="table_btn">
                <a href="https://wa.me/60169404345?text=hantar%20sendiri" class="btn" target="_blank">Tanya Sekarang <i class="fab fa-whatsapp" style="font-size: 14px;"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>AMBIL & HANTAR</h4>
              <img src="img/ambil.png">
              <ul class="list-unstyled">
                <li>Berat Minimum : <font style="background-color: #F5FA9C;">100 Gram</font></li>
                <li>Berat Maksimum : <font style="background-color: #F2F795;">15 Kilogram</font></li>
                <li>Runner Datang Ambil</li>
                <li>Terima Token</li>
                <li>Kumpul Mata Ganjaran</li>
              </ul>
              <div class="table_btn">
                <a href="https://wa.me/60169404345?text=ambil%20hantar" class="btn" target="_blank">Tanya Sekarang <i class="fab fa-whatsapp" style="font-size: 14px;"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
    Blog Section
  ============================-->
  <!-- <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Latest posts</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="img/blog/blog-image-1.jpg" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section> -->

  <!--==========================
    Newsletter Section
  ============================-->
  <section id="newsletter" class="newsletter text-center wow fadeInUp">
    <div class="overlay padd-section">
      <div class="container">

<!--         <div class="row justify-content-center">
          <div class="col-md-9 col-lg-6">
            <form class="form-inline" method="POST" action="#">

              <input type="email" class="form-control " placeholder="Alamat Email" name="email">
              <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Langgan</button>

            </form>

            <font style="font-size: 25px; font-weight: 560; background-color: lightblue; padding: 10px;">Whatsapp Sekarang : <a href="https://wa.me/60169404345">0169404345</a></font>

          </div>
        </div> -->
        <div class="partner">
	        <h1>Dengan Kerjasama</h1> <br>
	        <img src="img/l/arkema.png" style="width: 15%;">
	        <img src="img/l/jas.png" style="width: 15%;">
	        <img src="img/l/tmbs.png" style="width: 15%;">
	        <img src="img/l/pkt.png" style="width: 15%;">
	    </div>

      </div>
    </div>
  </section>

  <!--==========================
    Contact Section
  ============================-->
  <!-- #contact -->

  <!--==========================
    Footer
  ============================-->
  <footer class="footer">

  	<section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Hubungi Kami</h2>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-4 col-12">
          <div class="info">
            <div>
              <!-- <i class="fa fa-map-marker"></i> -->
              <p>Arkema Thiochemicals Sdn. Bhd <br>Lot Q, Plot 1 <br> Kerteh Bio Polymer Park Phase 2 <br> 24300 Kerteh <br> Terengganu</p>
            </div>

            <div class="email">
              <!-- <i class="fa fa-envelope"></i> -->
              <p><a href="mailto:admin@arkema.com">admin@arkema.com</a></p>
            </div>

            <div>
              <!-- <i class="fa fa-phone"></i> -->
              <p><a href="tel:+6072536688">07-253 6688</a></p>
            </div>
          </div>

          <div class="social-links">
          	<a href="http://bit.ly/2U31f30" target="_blank"><img src="img/googlemap.png"></a>
            <a href="http://bit.ly/2ZjiW4a" target="_blank"><img src="img/facebook.png"></a>
            <a href="http://bit.ly/2ZrwUAr" target="_blank"><img src="img/instagram.png"></a>
            <a href="http://bit.ly/2KU3iDJ" target="_blank"><img src="img/youtube.png"></a>
          </div>
        </div>

        <div class="col-md-4 col-12">
          <div class="info">
            <div>
              <!-- <i class="fa fa-map-marker"></i> -->
              <p>Jabatan Alam Sekitar <br> Wisma Alam Sekitar <br> Jalan Sultan Omar <br> 20300 Kuala Terengganu <br> Terengganu</p>
            </div>

            <div class="email">
              <!-- <i class="fa fa-envelope"></i> -->
              <p><a href="mailto:admin@doe.gov.my">admin@doe.gov.my</a></p>
            </div>

            <div>
              <!-- <i class="fa fa-phone"></i> -->
              <p><a href="tel:+6096261044">09-626 1044</a></p>
            </div>
          </div>

          <div class="social-links">
          	<a href="http://bit.ly/2Zr0ztu" target="_blank"><img src="img/googlemap.png"></a>
            <a href="http://bit.ly/2L1Sa6o" target="_blank"><img src="img/facebook.png"></a>
            <a href="http://bit.ly/2PoWAcW" target="_blank"><img src="img/instagram.png"></a>
            <a href="http://bit.ly/2NwxSoI" target="_blank"><img src="img/youtube.png"></a>
          </div>
        </div>

        <div class="col-md-4 col-12">
          <div class="info">
            <div>
              <!-- <i class="fa fa-map-marker"></i> -->
              <p>Jabatan Teknologi Maklumat & Komunikasi <br> Politeknik Kuala Terengganu <br> Jalan Sultan Ismail <br> 20200 Kuala Terengganu <br> Terengganu</p>
            </div>

            <div class="email">
              <!-- <i class="fa fa-envelope"></i> -->
              <p><a href="mailto:ewasteweb@gmail.com">ewasteweb@gmail.com</a></p>
            </div>

            <div>
              <!-- <i class="fa fa-phone"></i> -->
              <p><a href="tel:+60169404345">016-940 4345</a></p>
            </div>
          </div>

          <div class="social-links">
          	<a href="http://bit.ly/2HmSD28" target="_blank"><img src="img/googlemap.png"></a>
            <a href="http://bit.ly/2MBM3co" target="_blank"><img src="img/facebook.png"></a>
            <a href="http://bit.ly/2ZeUiSg" target="_blank"><img src="img/instagram.png"></a>
            <a href="http://bit.ly/30Dl5V6" target="_blank"><img src="img/youtube.png"></a>
          </div>
        </div>

      </div>
    </div>
  </section>
    
    <div class="copyrights">
      <div class="container">
        <p>Program e-Waste &copy;2019</p>
        <div class="credits">
          Laman web ini dibangunkan oleh <a href="#">SohoTech</a>
        </div>
      </div>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=60169404345&text=Hi!" class="floatws" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a> -->

    </div>

  </footer>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/modal-video/js/modal-video.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>