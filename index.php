<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rumah Sakit Umum Zahirah</title>
	<link href="img/rszicon.png" rel="shortcut icon">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>



	<!-- ====================================================header section ========================================================-->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.html"><img src="img/rszlogoo.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button> 
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" >Beranda</a></li>
					        <li><a class="menu" href="#about">Tentang Kami</a></li>
					        <li><a class="menu" href="#service">Pelayanan Kami </a></li>
					        <li><a class="menu" href="#team">Jadwal</a></li>
					        <li><a class="menu" href="#contact"> Kontak Kami</a></li>  
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

			
			

			<section class="slider" id="home">
				<div class="container-fluid">
					<div class="row">

					    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="header-backup"></div>
					        <!-- Wrapper for slides -->
					        <div class="carousel-inner" role="listbox">
					            <div class="item active">
					            	<img src="img/depan2.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>RS. Zahirah</h1><br>
				               			<p>Melayani Dengan Hati</p>
					                </div>
					            </div>
					            <div class="item">
					            	<img src="img/ugd2.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>UGD</h1>
					                </div>
					            </div>
					            <div class="item">
					            	<img src="img/registrasi.png" alt="">
					                <div class="carousel-caption">
				               			<h1>Kasir</h1>
					                </div>
					            </div>
					           

					        <!-- Controls -->
					        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
					            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					            <span class="sr-only">Previous</span>
					        </a>
					        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
					            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					            <span class="sr-only">Next</span>
					        </a>
					    </div>

					</div>
				</div>
			</section><!-- end of slider section -->


			<!-- about section -->
			<section class="about text-center" id="about">
				<div class="container">
					<div class="row">
						<h2>tentang kami</h2>
						<div class="about-details">
						<?php
						include "config/koneksi.php";
						$tampil=mysql_query("SELECT * FROM sejarah WHERE id_sejarah='5'");
						$r=mysql_fetch_array($tampil);
						echo "<h3>$r[judul_sejarah]</h3>";
						echo "<p>$r[isi_sejarah]</p>";
						?>
						</div>
<div class="row">
  <div class="col-md-6">
  <div class="thumbnail">
      <div class="caption">
        <h3>Visi</h3>
        <?php
						include "config/koneksi.php";
						$tampil=mysql_query("SELECT * FROM visi WHERE id_visi='1'");
						$r=mysql_fetch_array($tampil);
						
						echo "<p>$r[isi_visi]</p>";
						?> 
        </div>
    </div>
    </div>

   <div class="row">
  <div class="col-md-6">
  <div class="thumbnail">
      <div class="caption">
        <h3>Misi</h3>
        <?php
						include "config/koneksi.php";
						$tampil=mysql_query("SELECT * FROM misi WHERE id_misi='1'");
						$r=mysql_fetch_array($tampil);
						
						echo "<p>$r[isi_misi]</p>";
						?>
        </div>
    </div>
    </div>
</section><!-- end of about section -->


			<!-- service section starts here -->

			<section class="service text-center" id="service">
				<div class="container">
					<div class="row">
						<h2>Pelayanan Kami</h2>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="img/template/registrasi.png" alt="">
									</div>
								</div>
								<h3>Registrasi</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
						<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="img/template/konsultasi.jpg" alt="">
									</div>
								</div>
								<h3>Konsultasi</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="img/template/ranap.jpg" alt="">
									</div>
								</div>
								<h3>Rajal/Ranap</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="img/template/tabulinq.png" alt="">
									</div>
								</div>
								<h3>Tabungan Ibu Bersalin</h3>
							</div>
						</div>

						
					</div>
				</div>
			</section><!-- end of service section -->


			<!-- team section -->

			<section class="team" id="team">
				<div class="container">
					<div class="row">
						<div class="team-heading text-center">
							<h2>Jadwal Dokter</h2>
						</div>

						<div class="table-responsive">
							<?php
						echo 	"
						
						<table align='center' class='table'>
						<thead>
						<tr><th>No</th><th>Nama Dokter</th><th>Nama Poli</th><th>Hari<th>Jam</th></tr></thead>";

						include "config/koneksi.php";
						$tampil = mysql_query("select 
d.id_dokter, d.nm_dokter,
p.id_poli, p.nm_poli,
u.id_user, u.username,
j.id_jadok, j.hari, j.jam_mulai, j.jam_selesai
from dokter d
join jadok j on j.id_dokter = d.id_dokter
join poli p on p.id_poli = d.id_poli
join user u on u.id_user = p.id_user") or die (mysql_error());
						$no=1;
						while($f=mysql_fetch_array($tampil)){
						echo"<tr><td>$no</td>
					 	<td>$f[nm_dokter]</td>
			 			<td>$f[nm_poli]</td>
			 			<td>$f[hari]</td>
			            <td>$f[jam_mulai] - $f[jam_selesai]</td>
			            
			 			</tr>";
			$no++;
		}
	echo "</table>";

?>
<a href="admin/tampil/laporan_dokter.php"><button type="submit" class="glyphicon glyphicon-print"></button></a>
			</section><!-- end of team section -->

			<!-- map section -->
			<section class="api-map" id="contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 map" id="map"></div>
					</div>
				</div>
			</section><!-- end of map section -->

			<!-- contact section starts here -->
			<section class="contact">
				<div class="container">
					<div class="row">
							<div class="contact-caption clearfix">
								<div class="contact-heading text-center">
									<h2>Kontak</h2>
								</div>

								<div class="col-md-5 contact-info text-left">
									<h3>Kontak Informasi</h3>
									<div class="info-detail">
										<ul><li><i class="fa fa-calendar"></i><span>Setiap Hari</span> 24 Jam</li></ul>
										<ul><li><i class="fa fa-map-marker"></i><span>Alamat:</span> Jl. Sirsak No.21 Jagakarsa, Jakarta Selatan 12620</li></ul>
										<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (021) 7872210, 78888 723</li></ul>
										<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (021) 727 0013</li></ul>
										
									</div>
								</div>


								<div class="col-md-6 col-md-offset-1 contact-form">
									<h3>Lokasi</h3>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4508543147535!2d106.82146341476975!3d-6.33559689541508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edd3edb84d21%3A0x58e186ff58dc127!2sRumah+Sakit+Umum+Zahirah!5e0!3m2!1sid!2sid!4v1455507128557" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
					</div>
				</div>
			</section><!-- end of contact section -->


			<!-- footer starts here -->
			<footer class="footer clearfix">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 footer-para">
							<p>&copy;</p>
						</div>

						<div class="col-xs-6 text-right">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-skype"></i></a>
						</div>
					</div>
				</div>
			</footer>



	

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>