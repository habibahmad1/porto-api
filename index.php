<?php

function chanelYT($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = chanelYT('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCrzCIt5o0X88G9bCdrdbv6g&key=AIzaSyDkyu3z02GugJNMsDVCHt83_9L6QbAd_ZU');

if ($result !== null) {
  // ! PIC YT
  $profilPic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];

  // ! Name YT
  $nameYT = $result['items'][0]['snippet']['title'];

  // ! Link YT
  $linkYT = $result['items'][0]['snippet']['customUrl'];

  // ! SUBS YT
  $subs = $result['items'][0]['statistics']['subscriberCount'];
} else {
  echo "Error: Unable to retrieve channel information.";
}

// ! Video YT Latest
$videoYTLatest = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDkyu3z02GugJNMsDVCHt83_9L6QbAd_ZU&channelId=UCrzCIt5o0X88G9bCdrdbv6g &maxResults=1&order=date&part=snippet';
$result = chanelYT($videoYTLatest);
if ($result !== null) {
  $videoId = $result['items'][0]['id']['videoId'];
} else {
  echo "eror";
}

//! YT 2
$result2 = chanelYT('https://www.googleapis.com/youtube/v3/channels?key=AIzaSyDkyu3z02GugJNMsDVCHt83_9L6QbAd_ZU&part=snippet,statistics&id=UCAVR6Q0YgYa8xwz8rdg9Mrg');

if ($result2 !== null) {
  // ! PIC YT
  $profilPic2 = $result2['items'][0]['snippet']['thumbnails']['medium']['url'];

  // ! Name YT
  $nameYT2 = $result2['items'][0]['snippet']['title'];

  // ! Link YT
  $linkYT2 = $result2['items'][0]['snippet']['customUrl'];

  // ! SUBS YT
  $subs2 = $result2['items'][0]['statistics']['subscriberCount'];
} else {
  echo "Error: Unable to retrieve channel information.";
}
?>



<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Icons Boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" />

  <title>Portofolio | Habib Ahmad</title>
</head>

<body id="home">
  <!-- Navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-sm" style="background-color: #0551c2">
    <div class="container">
      <a class="navbar-brand" href="#home">Habib Ahmad</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#project">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Jumbottron -->
  <section class="jumbotron text-center">
    <img src="img/profil.jpg" alt="Habib Ahmad" width="200" class="rounded-circle img-thumbnail" id="profil" />
    <h1 class="display-4 text-white">Habib Ahmad</h1>
    <p class="lead text-white">3D Modeling | UI Design | Programmer</p>
    <a href="https://drive.google.com/file/d/15q_TJfgIrxXrvsB6XuyASi1PnveQ-iqc/view?usp=sharing" target="_blank" class="btn btn-primary"><i class="bi bi-filetype-pdf"></i> My PDF</a>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,96L34.3,90.7C68.6,85,137,75,206,90.7C274.3,107,343,149,411,165.3C480,181,549,171,617,154.7C685.7,139,754,117,823,117.3C891.4,117,960,139,1029,149.3C1097.1,160,1166,160,1234,149.3C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
  </section>
  <!-- End Jumbottron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row d-flex justify-content-center fs-5 text-center">
        <div class="col-md-6">
          <p>
            Halo, Selamat datang di halaman Portofolio Saya, Perkenalkan nama saya Habib Ahmad lulusan S1 dengan jurusan Sistem Informasi, Saya mempunyai beberapa keahlian seperti UI Designer, 3D Modeling, dan Programmer. Halaman ini
            merupakan tempat berbagi saya mengenai portofolio yang berisi tentang profil dan project saya.
          </p>
        </div>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#780000" fill-opacity="1" d="M0,160L30,138.7C60,117,120,75,180,74.7C240,75,300,117,360,154.7C420,192,480,224,540,229.3C600,235,660,213,720,186.7C780,160,840,128,900,138.7C960,149,1020,203,1080,192C1140,181,1200,107,1260,69.3C1320,32,1380,32,1410,32L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>
  </section>
  <!-- End About -->

  <!-- My Sosmed -->
  <section id="sosmed" class="sosmed">
    <div class="container text-white">
      <div class="row mb-5">
        <div class="col text-center">
          <h2>My Games</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- Kolom Honkai Impact -->
        <div class="col-md-5 ">
          <div class="row text-center">
            <div class="col-md-4">
              <img src="<?= $profilPic; ?>" alt="yt thumb" width="100px" height="100px" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <a href="https://www.youtube.com/<?= $linkYT ?>" target="_blank" class="text-white">
                <h5><?= $nameYT; ?></h5>
              </a>
              <p><?= $subs; ?> Subscribers</p>
              <div class="g-ytsubscribe" data-channelid="UCrzCIt5o0X88G9bCdrdbv6g" data-layout="default" data-count="default"></div>
            </div>
          </div>
          <div class="row mt-4 pb-3">
            <div class="col">
              <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/-FrbSYzlqdU?rel=0" title="YouTube video" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <!-- Kolom Honkai Impact -->
        <div class="col-md-5">
          <div class="row text-center">
            <div class="col-md-4">
              <img src="<?= $profilPic2; ?>" alt="yt thumb" width="100px" height="100px" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <a href="https://www.youtube.com/<?= $linkYT2 ?>" target="_blank" class="text-white">
                <h5><?= $nameYT2; ?></h5>
              </a>
              <p><?= $subs2; ?> Subscribers</p>
              <div class="g-ytsubscribe" data-channelid="UCAVR6Q0YgYa8xwz8rdg9Mrg" data-layout="default" data-count="default"></div>
            </div>
          </div>
          <div class="row mt-4 pb-3">
            <div class="col">
              <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/vRj3YbsVTPc?rel=0" title="YouTube video" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#406099" fill-opacity="1" d="M0,192L34.3,192C68.6,192,137,192,206,170.7C274.3,149,343,107,411,85.3C480,64,549,64,617,74.7C685.7,85,754,107,823,133.3C891.4,160,960,192,1029,192C1097.1,192,1166,160,1234,154.7C1302.9,149,1371,171,1406,181.3L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
  </section>
  <!-- My Sosmed End -->

  <!-- Galery -->
  <section id="project">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2 class="text-white">My Project</h2>
        </div>
      </div>
      <div class="row mb-3 justify-content-center">
        <div class="col-sm-4 mb-3">
          <div class="card">
            <img src="img/project/1.jpg" class="card-img-top" alt="project 1" height="280px" />
            <div class="card-body text-center">
              <p class="card-text"><strong>UI Food Application</strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-3">
          <div class="card">
            <img src="img/project/2.jpg" class="card-img-top" alt="project 2" height="280px" />
            <div class="card-body text-center">
              <p class="card-text"><strong>3D Render Beach</strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-3">
          <div class="card">
            <img src="img/project/3.jpg" class="card-img-top" alt="project 3" height="280px" />
            <div class="card-body text-center">
              <p class="card-text"><strong>3D Render Box</strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-3">
          <div class="card">
            <img src="img/project/4.jpg" class="card-img-top" alt="project 4" height="280px" />
            <div class="card-body text-center">
              <p class="card-text"><strong>UI E-Commerce Application</strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-3">
          <div class="card">
            <img src="img/project/5.jpg" class="card-img-top" alt="project 5" height="280px" />
            <div class="card-body text-center">
              <p class="card-text"><strong>UI Digital Wallet Application</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,213.3C480,224,549,192,617,192C685.7,192,754,224,823,213.3C891.4,203,960,149,1029,133.3C1097.1,117,1166,139,1234,133.3C1302.9,128,1371,96,1406,80L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
  </section>
  <!-- End Galery -->

  <!-- Contact Me -->
  <section id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <!-- form.123formbuilder.com script begins here -->
          <script type="text/javascript" defer src="https://form.123formbuilder.com/embed/6518481.js" data-role="form" data-default-width="650px"></script>
          <!-- form.123formbuilder.com script ends here -->
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#406099" fill-opacity="1" d="M0,64L34.3,85.3C68.6,107,137,149,206,144C274.3,139,343,85,411,58.7C480,32,549,32,617,53.3C685.7,75,754,117,823,138.7C891.4,160,960,160,1029,138.7C1097.1,117,1166,75,1234,48C1302.9,21,1371,11,1406,5.3L1440,0L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
  </section>
  <!-- End Contact Me -->

  <!-- footer -->
  <footer class="text-white text-center pb-5" style="background-color: #406099">
    <p>Created with <i class="bi bi-heart-fill" style="color: red"></i> by <a href="#" class="text-white" style="text-decoration: none">Habib Ahmad</a></p>
  </footer>
  <!-- end footer -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Button Subs HI-->
  <script src="https://apis.google.com/js/platform.js"></script>

  <!-- Button Subs HI-->
  <script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>