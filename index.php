<?php 
  require_once('config/config.php');
  require_once('config/koneksi_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style1.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
        .fontgoogle{
            font-family: 'Shadows Into Light', cursive
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary sticky-xl-top">
        <div class="container-fluid">
          <a class="navbar-brand text-danger" href="#">RAHMAD <span style="color: rgb(25, 44, 219);">HIDAYAT</span> PUTRA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse left position-sticky" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact_us" id>Contact Us </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Download
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="materi/01 - pengenalan html.pdf" download="">materi HTML<i class="bi bi-file-earmark-text"></i></a></li>
                  <li><a class="dropdown-item" href="materi/09 10 - Pengenalan CSS (1).pdf" download="">materi CSS<i class="bi bi-braces"></i></a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="materi/13 14 - Bootstrap.pdf" download="">materi Bootstrap<i class="bi bi-people-fill"></i></a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="resume.html">Resume</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="project_uas/">My store</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- header --> 
    <header class="bg-info opacity-75">
      <br>
      <div class="container-fluid justify-content-center d-flex flex-row align-items-center">
        <h2 class="text-uppercase text-dark"><b>sirlock xander</b><br><span class="p-3"><b>Si manusia senja</b></span></h2>
        <img src="img/32-modified.png" class="img1" alt="">
      </div>
      <br>
    </header>
    <!-- section -->
    <section id="about">
        <div class="container-fluid d-flex section1 flex-column align-items-center">
            <h3 class="fontgoogle">----------||TENTANG DIRIKU||----------</h3>
            <marquee width="750"><p><h3 class="text-uppercase fontgoogle">Saya adalah seorang anak pertama dari 4 bersaudara </h3></p></marquee>
           </div>
    </section>
    <!-- section about -->
    <section class="section1">
        <h3 class="text-lg-center fontgoogle">-----Website tentang mendesign sebuah web-----</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                  <?php 
                    $qry_blog= mysqli_query($connect_db,"select * from mst_blog ");
                    while($row = mysqli_fetch_array($qry_blog)){
                  ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-1 mb-3 container" style="max-width: 1050px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="img/3x4.png" class="img-fluid rounded-start" style="width: fit-content;" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row['judul'];?></h5>
                                            <a href="#" class="btn btn-primary"><?= $row['date_input']; ?></a>
                                            <a class="text-info">created by <?= $row['author'];?></a>
                                            <p class="card-text"><?= substr($row['isi'],0,200); ?>
                                                <a href="detailblog1.html">
                                                    <u>baca selengkapnya</u>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }; ?>
                </div>
</div>
</div>
</div>
	<!-- contact us -->
	<section id="contactus">
		<div class="container p-4 fontgoogle bg-light opacity-100">
			<h1 class="text-primary text-opacity-100 text-center pb-3">=== Contact Us ===</h1>
			<div class="row">
				<div class="col col-lg-2"></div>
				<div class="col col-lg-7">
					<form action="#">
						<div class="row mb-3">
							<label for="staticEmail" class="col-md-3 form-label">Email</label>
							<div class="col-md-9">
								<input type="text" class="form-control" id="staticEmail" value="email@example.com" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="nama`" class="col-md-3 form-label">Nama Lengkap</label>
							<div class="col-md-9">
								<input type="text" class="form-control" id="nama" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="info" class="col-md-3 form-label">Informasi</label>
							<div class="col-md-9">
								<select name="info" id="info" class="form-select">
									<option value="">Sharing Artikel</option>
									<option value="">Penawaran Kerja</option>
									<option value="">Lain-lain</option>
								</select>
							</div>
						</div>
						<div class="row mb-3">
							<label for="ket" class="col-md-3 form-label">Keterangan</label>
							<div class="col-md-9">
								<textarea name="ket" id="ket" cols="30" rows="5" class="form-control"></textarea>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-9 text-center">
								<button class="btn btn-primary btn-sm"><i class="bi bi-envelope"></i> Simpan</button>
								<button class="btn btn-secondary btn-sm"><i class="bi bi-reply"></i> Batal</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    <br>
    </section>
    <!-- footer -->
    <footer class="bg3 bg-opacity-25 p-5"><h3 class="text-lg-center"></h3>
      <div class="row container-fluid">
        <div class="col-1 col-md-1"></div>
        <div class="col-2 col-md-5 ps-1 container-fluid">
          <h5 class="warnatext2"><b>HEAD OFFICE</b></h5>
          <p class="warnatext2"><b>jalan RA kartini blok AA no 1 newyork 125100 chichago, US</p></b>
          <p class="warnatext2"><b>Telepon: 082140479329</b></p>
          <p class="warnatext2"><b>Email:sirlock1812@gmail.com</b></p>
        </div>
        <div class="col-3 col-md-5">
            <div class="row">
                <div class="col-1 col-md-3">
                </div>
            <br>
            <div class="col-2 col-md-6">
                <div class="row ps-3 pb-2">
                    <div class="container"><a href="http://wa.me/6285904351687" target="_blank" rel=""><h4 class="warnatext2"><i class="bi-whatsapp pe-md-2"></i></a>WhatsApp</h4></div>
                    <div><br></div>
                    <div class="container"><a href="https://www.instagram.com/rahipu_212/" target="_blank"><h4 class="warnatext2"><i class="bi-instagram pe-md-2"></i></a>Instagram</h4></div>
                    <div><br></div>
                    <div class="container"><a href="https://web.facebook.com/sirlock.xander/" target="_blank"><h4 class="warnatext2"><i class="bi bi-facebook pe-md-2"></i></a>Facebook</h4></div>
                </div>
            </div>
            <br>
            <div class="col-3 col-md-3">
            </div>
            </div>
        </div>
        <div class="col-1 col-md-1"></div>
      </div>
    </footer>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>