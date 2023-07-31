<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WeBook</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap"
        media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap" />
    </noscript>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" media="print"
        onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" />
    </noscript>
    <!-- ===================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Marck+Script&display=swap" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');
    </style>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <!-- ------------------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arbutus+Slab&family=Oleo+Script&display=swap" rel="stylesheet">
    <!-- ----------------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&display=swap" rel="stylesheet">

    <link href="http://fonts.cdnfonts.com/css/aqua-grotesque" rel="stylesheet">
    <!-- ===================================== -->
    <link rel="icon" sizes="180x180" href="images/favicon/logoIcon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/logoIcon.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/logoIcon.png" />
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet" />
    <link href="css/font-awesome/css/all.min.css?ver=1.1.0" rel="stylesheet" />
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet" />
    <link href="css/ekko-lightbox.css?ver=1.1.0" rel="stylesheet" />
    <link href="css/main.css?ver=1.1.0" rel="stylesheet" />
    <script src="scripts/jquery.min.js?ver=1.1.0"></script>
    

    <noscript>
        <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
        </style>
    </noscript>
    <script type="text/javascript">
    $(document).ready(function() {
        $("a.invite").click(function(eve) {
            eve.preventDefault();
            $(this).parents("div.popup").fadeOut("slow");
        });
    });
    </script>
</head>

<!-- <body id="top"> -->

<body>
    <!-- bagian popup -->
    <div class="popup">
        <div id="box">
            <div class=" row mt-5 title text-center text-white">
                <div class="col-md-12 c_depan">
                    <h5 class="font-weight mt-4">The Wedding Of</h5>
                    <h2 class="mb-4 display-4" style="font-family: 'Noto Serif Display', serif">Soekarno & Fatmawati</h2>
                    <h5 class="font-weight date-sparator">27 December 2021</h5>
                    <br />
                    <button type="button" onclick="toggleMusic()" class="btn btn-sm btn-info px-sm-4 mb-1 mt-1" data-toggle="modal" data-target="#myModal"
                        style="z-index: 119; border-radius: 10px;">
                        <a class="invite" href="#home" style="text-decoration: none; color:black;">
                            <p style="font-family: 'Dancing Script', cursive;  padding:5px auto; margin-bottom: 0px;"><b>Open Now</b></p>
                        </a>
                    </button>
                    <div class="mt-4">
                        <h5 style="color: #fff">Yth.</h5>
                        <p style="margin-top:-12px;">Bapak/Ibu/Saudara</p>
                        <h4 style="font-family: 'Acme', sans-serif; margin-top:-8px;">
                                <?php
                            if (isset($_GET['p'])) {
                                echo $_GET['p'];
                            }else if (isset($_GET['w'])) {
                                echo $_GET['w'];
                            } else {
                                // Fallback behaviour goes here
                                echo "Tamu Undangan";
                            } ?>
                        </h4>
                            <?php
                            if (isset($_GET['p']) || isset($_GET['w']) ) {
                                echo '<p style="margin-top:-15px; font-size:12px;">[mohon maaf apabila ada kesalahan penulisan nama dan gelar]</p>';
                            }else{
                                // Fallback behaviour goes here
                            } 
                            ?>
                        <p style="margin-top:22px;">Di Tempat</p>
                    </div>
                    <!-- ---------Tombol QR CODE-------- -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#QRCode" style="z-index: 119;">
                    <b>Show QR Code</b>
                    </button>                       
            <!-- ---------AKHIR Tombol OR CODE-------- -->
                </div>
            </div>
        </div>
    </div>
    <!-- akhir dari popup -->
    <!-- Modal QR Code-->
    <div id="QRCode" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

            <!-- Modal content-->
            <div class="modal-content" style="z-index: 121;">
                <div class="modal-body mt-0 mb-0">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-10 col-10">
                        <h4 class="text-center" style="font-family:'Roboto Slab', serif;">Scan Barcode Di Bawah ini!</h4>
                        <hr>
                        <?php
                            include('images/phpqrcode/qrlib.php');
                            // remember to sanitize that - it is user input!
                            if (isset($_GET['p'])) {
                                $tamu = $_GET['p'] ." (Teman Mempelai Pria)";
            
                            }else if (isset($_GET['w'])){
                                $tamu = $_GET['w'] ." (Teman Mempelai Wanita)";
                            } else {
                                $tamu = 'Tamu Undangan';
                            } 

                            QRcode::png($tamu, "images/QRCode/dataTamu.png", "Scan", 6,6);
                        ?>
            <img src="images/QRCode/dataTamu.png" alt="QR Code">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-danger btn-sm px-sm-4" data-dismiss="modal">
                        <h6 style="font-family: 'Aqua Grotesque', sans-serif; padding:5px auto; margin-bottom: 0px; margin-top:2px;">Close</h6>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <!--Akih Modal QR Code-->
    
    <header></header>
    <div class="page-content">
        <div class="div">
            <!-- menu -->
            <div class="row justify-content-center fixed-bottom" style="z-index: 99; bottom: 10px;">
                <div class="col-lg-6 col-10">
                <nav class="navbar navbar-expand-lg navbar-light overflow-auto" id="nav-menu">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#home"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                                </svg>
                                <br>
                                Home</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#couple"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                </svg><br> Couple</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#events"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                </svg><br> Events</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#gallery"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-images" viewBox="0 0 16 16">
                                    <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    <path
                                        d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                                </svg><br> Gallery</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#story"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                                </svg><br> Story</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#rsvp"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
                                </svg><br> RSVP</a></li>
                    </ul>
                </nav>
                </div>
            </div>
            <!-- akhir menu -->
            
            <!-- </div> -->

            <div class="ww-home-page" id="home">
                <div class="ww-wedding-announcement d-flex align-items-center justify-content-start">
                    <div class="container ww-announcement-container">
                        <p class="h2 mt-5 ww-title" data-aos="zoom-in-down" data-aos-delay="300"
                            data-aos-duration="1000" data-aos-offset="10">The Wedding</p>
                        <p class="ww-couple-name ww-title nama" data-aos="zoom-in-down" data-aos-delay="300"
                            data-aos-duration="1000">Soekarno & Fatmawati</p>
                        <!-- <img class="img-fluid mt-1" src="images" alt="Heart" data-aos="zoom-in-down"
                            data-aos-delay="300" data-aos-duration="1000" /> -->
                        <p class="h2 mt-5 ww-title" data-aos="zoom-in-down" data-aos-delay="300"
                            data-aos-duration="1000" data-aos-offset="10">27<sup>th</sup> Desember 2021</p>
                    </div>
                </div>
            </div>
            
            <div class="ww-section couple" id="couple" style="background-color: rgba(117, 16, 16, 0.8); border-top: 5px solid #daa520;">
                <div class="container">
                    <!-- <div class="card">
                        <div class="card-body"> -->
                            <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Groom &
                            Bride</h2>
                            <div class="text-center justify-content-center">
                            <p><i>Bismillahirrahmanirrahim</i></p>
                            <p><b>Dengan penuh rasa suka cita, kami bermaksud mengundang Bapak/Ibu/Saudara untuk menghadiri
                                    acara <br> pernikahan putra-putri kami:</b></p>
                            </div>
                            <div class="row text-center justify-content-center">
                                <div class="col-md-5 col-10">
                                <div class="card">
                                    <div class="card-body">
                                    
                                    <div class="mt-3">
                                        <img class="img-fluid rounded-circle border-danger" src="images/mempelai/mempelai_pria.jpg" style="height: 300px; width:300px;" alt="Groom"
                                            data-aos="flip-left" data-aos-duration="1000" />
                                        <p class="pt-3 text-left text-muted">
                                            Hai nama saya Soekarno,saya putra pertama dari dua bersaudara.
                                        </p>
                                        <h3 class="h2 ww-title">Soekarno</h3>
                                        <h6>Putra dari</h6>
                                        <h6>Bapak Ikhsan & Ibu Rusti</h6>
                                        <p>Jl. Dukuh Raya, No. 1, Desa Pesu, Kec. Klaten, Kab. Klaten, Jawa Tengah</p>
                                        <div class="ww-social-links">
                                            <a class="btn btn-link" href="#"><i class="fab fa-facebook-f"
                                                    aria-hidden="true"></i></a><a class="btn btn-link" href="#" ><i
                                                    class="fab fa-twitter" aria-hidden="true"></i></a><a class="btn btn-link"
                                                href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a><a
                                                class="btn btn-link" href="#"><i class="fab fa-instagram"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-2 dan" style="font-family: 'Noto Serif Display', serif">
                                    <!-- <img class="img-fluid" height="80" width="80" src="images/cincin.jpeg" alt="cincin" srcset="">     -->
                                    &
                                </div>
                                <div class="col-md-5 col-10">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="mt-3">
                                        <img class="img-fluid rounded-circle border-primary" src="images/mempelai/mempelai_wanita.jpg" style="height: 300px; width:300px;" alt="Bride"
                                            data-aos="flip-right" data-aos-duration="1000" />
                                        <p class="pt-3 text-left text-muted">
                                            Hai nama saya Fatmawati,saya putri kedua dari dua bersaudara.
                                        </p>
                                        <h3 class="h2 ww-title">Fatmawati</h3>
                                        <h6>Putri dari</h6>
                                        <h6>Bapak Putra & Ibu Putri</h6>
                                        <p>Jl. Dukuh Raya, No. 1, Desa Pesu, Kec. Klaten, Kab. Klaten, Jawa Tengah</p>
                                        <div class="ww-social-links">
                                            <a class="btn btn-link" href="#"><i class="fab fa-facebook-f"
                                                    aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i
                                                    class="fab fa-twitter" aria-hidden="true"></i></a><a class="btn btn-link"
                                                href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a><a
                                                class="btn btn-link" href="#"><i class="fab fa-instagram"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        <!-- </div>
                    </div> -->
                </div>
            </div>
            
            <!-- ----------------------------------- -->
            <div class="ww-section event" id="events">
            <svg style="margin-top: -230px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#751010" fill-opacity="" d="M0,96L40,106.7C80,117,160,139,240,138.7C320,139,400,117,480,112C560,107,640,117,720,122.7C800,128,880,128,960,117.3C1040,107,1120,85,1200,80C1280,75,1360,85,1400,90.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
                <div class="container ww-wedding-event">
                    <div class="card bg">
                        <div class="card-body event-b">
                        <h2 class="h1 text-center pb-3 ww-title text-dark" data-aos="zoom-in-down" data-aos-duration="1000">Wedding
                        Events</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-sm-10">
                            <div class="my-3">
                                <div class="card acara">
                                    <div class="card-body">
                                        <div class="h2 text-center">Wedding Party</div>
                                        <hr>
                                        <ul>
                                            <li class="pt-2"><i class=" far fa-calendar-alt"></i><span class="pl-2 ">27
                                                    Desember 2021, 09.00 - 16.00 WIB</span></li>
                                            <li><i class="fas fa-home"></i><span class="pl-2 ">Kediaman
                                                    Mempelai Wanita</span></li>
                                            <li><i class="fas fa-map-marker-alt"></i><span class="pl-2 ">Jl. Dukuh
                                                    Raya, No. 1, Desa Pesu, Kec.
                                                    Klaten, Kab.
                                                    Klaten, Jawa Tengah</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                                <div class="row justify-content-center text-center">
                                    <div class="col-md">
                                        <a style="color: white; text-decoration:none;" href="http://"
                                        target="_blank" rel="noopener noreferrer">
                                        <button type="button" class="btn btn-lg btn-outline-danger rounded-pill">
                                            <h4 class="pl-3 pr-3"> Live Streaming Youtube <i
                                                    class="fab fa-youtube pl-2"></i>
                                            </h4>
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-1"></div>
                        <div class="col-md-5 col-sm-10">
                            <div class="my-3">
                                <div class="card acara">
                                    <div class="card-body">
                                        <div class="h2 text-center">Reception</div>
                                        <hr>
                                        <ul>
                                            <li class="pt-2"><i class=" far fa-calendar-alt"></i><span class="pl-2 ">28
                                                    Desember 2021, 10.00 - 16.00 WIB</span></li>
                                            <li><i class=" fas fa-home"></i><span class="pl-2 ">City
                                                    Place,
                                                    Hotel, Klaten</span></li>
                                            <li><i class="fas fa-map-marker-alt"></i><span class="pl-2 ">Jl. Dukuh
                                                    Raya, No. 1, Desa Pesu, Kec.
                                                    Klaten, Kab.
                                                    Klaten, Jawa Tengah</span></li>
                                        </ul>

                                    </div>
                                </div>
                                <br>
                                <div class="row justify-content-center text-center">
                                    <div class="col-md">
                                        <a style="color: white; text-decoration:none;" href="https://"
                                        target="_blank" rel="noopener noreferrer">
                                        <button type="button" class="btn btn-lg btn-outline-info rounded-pill">
                                            <h4 class="pl-3 pr-3">Live Streaming Zoom <i class="fas fa-video pl-2"></i></h4>
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- --------------------------------------- -->
            <div class="ww-section save-date" id="save-date">
                <div class="container">
                    <!-- timer -->
                    <div class="row justify-content-center text-center">
                        <div class="col-md-1 col-2 mx-1 info-panel">
                            <h2 class="timer"><span class="hari ex1">00</span></h2>
                            <p><b>Hari</b></p>
                        </div>
                        <div class="col-md-1 col-2 mx-1 info-panel">
                            <h2 class="timer"><span class="jam ex2">00</span></h2>
                            <p><b>Jam</b></p>
                        </div>
                        <div class="col-md-1 col-2 mx-1 info-panel">
                            <h2 class="timer"><span class="menit ex3">00</span></h2>
                            <p><b>Menit</b></p>
                        </div>
                        <div class="col-md-1 col-2 mx-1 info-panel">
                            <h2 class="timer"><span class="detik ex4">00</span></h2>
                            <p><b>Detik</b></p>
                        </div>
                    </div>
                    <!-- akhir timer -->
                    <div class="row justify-content-center text-center mt-4">
                        <div class="col-lg-8">
                            <a type="button" class="btn btn-danger pl-2 pr-2" href="https://calendar.google.com/calendar/u/0/r/eventedit/copy/MGlpYTk0Zm92YmJjbm5wdmtlMzNxYTIxM2QgYTAwNm91OG00NzJmanFlMXBhYzk2azF0dWNAZw" target="_blank">
                                <h5>Save Date <i class="far fa-calendar-alt"></i></h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------------------------------- -->
            <div class="ww-section" id="people" style="background-color: rgba(117, 16, 16, 0.8);">
                <div class="container ww-couple-friends">
                    <h2 class="h1 text-center pt-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Groomsmen
                        & Bridesmaids</h2>
                    <div class="carousel slide" id="ww-carouselIndicator" data-ride="carousel" data-aos="zoom-in-up"
                        data-aos-duration="1000">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#ww-carouselIndicator" data-slide-to="0"></li>
                            <li data-target="#ww-carouselIndicator" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top img-fluid" src="images/mempelai/teman_cowo1.jpg" alt="Groom Men 1" />
                                            <div class="card-body text-center">
                                                <div class="h5">Han Ji Pyeong</div>
                                                <p class="mb-0 text-muted">Mentor</p>
                                                <p class="text-muted">Groomsmen</p>
                                                <div class="ww-social-links">
                                                    <a class="btn btn-link" href="#"><i class="fab fa-facebook-f"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top" src="images/mempelai/teman_cowo2.jpg" alt="Groom Men 2" />
                                            <div class="card-body text-center">
                                                <div class="h5 text-center">Kim Yong San</div>
                                                <p class="mb-0 text-muted">Bestie</p>
                                                <p class="text-muted">Groomsmen</p>
                                                <div class="ww-social-links">
                                                    <a class="btn btn-link" href="#"><i class="fab fa-facebook-f"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top" src="images/mempelai/teman_cowo3.jpg" alt="Groom Men 3" />
                                            <div class="card-body text-center">
                                                <div class="h5 text-center">Lee Chul San</div>
                                                <p class="mb-0 text-muted">Bestie</p>
                                                <p class="text-muted">Groomsmen</p>
                                                <div class="ww-social-links">
                                                    <a class="btn btn-link" href="#"><i class="fab fa-facebook-f"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top" src="images/mempelai/teman_cewe1.JPG"
                                                alt="Bride Maid 1" />
                                            <div class="card-body text-center">
                                                <div class="h5">Choi Won Deok</div>
                                                <p class="mb-0 text-muted">Grandmother</p>
                                                <p class="text-muted">Bridesmaids</p>
                                                <div class="ww-social-links">
                                                    <a class="btn btn-link" href="#"><i class="fab fa-facebook-f"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top" src="images/mempelai/teman_cewe2.jpg"
                                                alt="Bride Maid 2" />
                                            <div class="card-body text-center">
                                                <div class="h5 text-center">Seo In Jae</div>
                                                <p class="mb-0 text-muted">Sister</p>
                                                <p class="text-muted">Bridesmaids</p>
                                                <div class="ww-social-links">
                                                    <a class="btn btn-link" href="#"><i class="fab fa-facebook-f"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top" src="images/mempelai/teman_cewe3.jpg"
                                                alt="Bride Maid 3" />
                                            <div class="card-body text-center">
                                                <div class="h5 text-center">Jeong Sa Ha</div>
                                                <p class="mb-0 text-muted">Bestie</p>
                                                <p class="text-muted">Bridesmaids</p>
                                                <div class="ww-social-links">
                                                    <a class="btn btn-link" href="#"><i class="fab fa-facebook-f"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- --------------------------- -->
            
            <div class="ww-section" id="gallery" style="background-color: rgb(117, 16, 16); border-top: 5px solid #daa520; border-bottom: 5px solid #daa520;">
                <div class="ww-photo-gallery">
                    <div class="container">
                        <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Photo
                            Gallery</h2>

                        <div class="ww-gallery" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="300" data-aos-duration="1000" data-aos-offset="0">
                            <div class="card-columns">
                                <div class="card" data-groups='["vacation","ceremony"]'>
                                    <a href="images/mempelai/galeri.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/mempelai/galeri.jpg"
                                            alt="Gallery Pic 1" /></a>
                                </div>
                                <div class="card" data-groups='["party","wedding"]'>
                                    <a href="images/mempelai/galeri1.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/mempelai/galeri1.jpg"
                                            alt="Gallery Pic 2" /></a>
                                </div>
                                <div class="card" data-groups='["vacation"]'>
                                    <a href="images/mempelai/galeri2.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/mempelai/galeri2.jpg"
                                            alt="Gallery Pic 3" /></a>
                                </div>
                                <div class="card" data-groups='["party","vacation"]'>
                                    <a href="images/mempelai/galeri3.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/mempelai/galeri3.jpg"
                                            alt="Gallery Pic 4" /></a>
                                </div>
                                <div class="card" data-groups='["vacation"]'>
                                    <a href="images/mempelai/galeri4.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/mempelai/galeri4.jpg"
                                            alt="Gallery Pic 5" /></a>
                                </div>
                                <div class="card" data-groups='["wedding","ceremony","party"]'>
                                    <a href="images/mempelai/galeri5.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/mempelai/galeri5.jpg"
                                            alt="Gallery Pic 6" /></a>
                                </div>
                                <div class="card" data-groups='["vacation"]'>
                                    <a href="images/mempelai/galeri6.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/mempelai/galeri6.jpg"
                                            alt="Gallery Pic 7" /></a>
                                </div>
                                <div class="card" data-groups='["wedding","party"]'>
                                    <a href="images/mempelai/galeri8.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/mempelai/galeri8.jpg"
                                            alt="Gallery Pic 8" /></a>
                                </div>
                            </div>
                            <div class="row justify-content-center text-center mt-5 mb-5" data-aos="fade-up"
                                data-aos-duration="3000">
                                <div class="col-lg-12">
                                    <!-- <iframe style=" width:100%; height:400px; border: 2px solid #daa520;"
                                        src="images/mempelai/video_galeri.mp4" title="Video Galeri"
                                        frameborder="0";
                                        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"
                                        allowfullscreen type="text/html"></iframe> -->
                                        <iframe style=" width:100%; height:400px; border: 2px solid #daa520;"
                                        src="images/mempelai/video_galeri.mp4" title="Video Galeri"
                                        frameborder="0" allowfullscreen type="text/html"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------------- -->
            <div class="ww-section story" id="story">
                <div class="container our-story">
                    <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Our Story
                    </h2>
                    <div class="row justify-content-center text-center">
                        <div class="col-md-10">
                            <!-- ----------------- -->
                            <div class="carousel slide" id="story-carouselIndicator" data-ride="carousel"
                                data-aos="zoom-in-up" data-aos-duration="1000">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#story-carouselIndicator" data-slide-to="0"></li>
                                    <li data-target="#story-carouselIndicator" data-slide-to="1"></li>
                                    <li data-target="#story-carouselIndicator" data-slide-to="2"></li>
                                    <li data-target="#story-carouselIndicator" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card mb-2 border-warning rounded-left">
                                            <div class="row no-gutters">
                                                <div class="col-md-5">
                                                    <img class="img-fluid" src="images/mempelai/moment.jpg"
                                                        alt="Reception">
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h3 class="card-title">Pertama Kali Kenalan</h3>
                                                        <p class="card-text">This is a wider card with supporting text
                                                            below as a
                                                            natural lead-in to additional content. This content is a
                                                            little bit
                                                            longer.</p>
                                                        <p class="card-text"><small class="text-muted">1 Desember
                                                                2021</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card mb-2 border-warning rounded-left">
                                            <div class="row no-gutters">
                                                <div class="col-md-5">
                                                    <img class="img-fluid" src="images/mempelai/moment.jpg" alt="Reception">
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h3 class="card-title">First Date</h3>
                                                        <p class="card-text">This is a wider card with supporting text
                                                            below as a
                                                            natural lead-in to additional content. This content is a
                                                            little bit
                                                            longer.</p>
                                                        <p class="card-text"><small class="text-muted">5 Desember
                                                                2021</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card mb-2 border-warning rounded-left">
                                            <div class="row no-gutters">
                                                <div class="col-md-5">
                                                    <img class="img-fluid" src="images/mempelai/moment.jpg"
                                                        alt="Reception">
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h3 class="card-title">Moment Menjalin Kasih</h3>
                                                        <p class="card-text">This is a wider card with supporting text
                                                            below as a
                                                            natural lead-in to additional content. This content is a
                                                            little bit
                                                            longer.</p>
                                                        <p class="card-text"><small class="text-muted">8 Desember
                                                                2021</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card mb-2 border-warning rounded-left">
                                            <div class="row no-gutters">
                                                <div class="col-md-5">
                                                    <img class="img-fluid" src="images/mempelai/moment.jpg"
                                                        alt="Reception">
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="card-body">
                                                        <h3 class="card-title">Engagement</h3>
                                                        <p class="card-text">This is a wider card with supporting text
                                                            below as a
                                                            natural lead-in to additional content. This content is a
                                                            little bit
                                                            longer.</p>
                                                        <p class="card-text"><small class="text-muted">18 Desember
                                                                2021</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ------------------------ -->
            <div class="ww-section maps" id="maps" style="background-color: rgb(117, 16, 16);">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col text-center">
                            <h2 class="h1 ww-title pb-2">Denah Lokasi</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center locs">
                        <div class="col-lg-12">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5147512900467!2d106.82016851431!3d-6.195607562421398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421963cd607%3A0x503cb9e9306e657a!2sHotel%20Indonesia%20Kempinski%20Jakarta!5e0!3m2!1sen!2sid!4v1639741700974!5m2!1sen!2sid"
                                width="600" height="450" style="border: 2px solid #daa520; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center mt-3 mb-3">
                        <div class="col-lg-8">
                            <h5 class="pr-3 mp-3"><a type="button" href="https://goo.gl/maps/Y1DiKSM7aC8QqMcZ9"
                                    target="_blank">
                                    Lokasi
                                    <i class="fas fa-map-marker-alt"></i></a></h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="ww-section" id="gift" style="background-color: rgba(117, 16, 16, 0.8); border-top: 5px solid #daa520;">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col text-center">
                            <h2 class="h1 ww-title">Kirim Hadiah</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center mt-5 mb-5">
                        <div class="col-lg-8">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-lg btn-outline-warning rounded-pill"
                                data-toggle="modal" data-target="#exampleModal">
                                <h4 class="pl-3 pr-3"><i class="fas fa-gift pr-2"></i> Kirim Hadiah</h4>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="row justify-content-center text-center mt-3">
                                            <div class="col-lg-3 col-3"></div>
                                            <div class="col-lg-6 col-6">
                                            <h4 class="justify-content-center text-center " id="exampleModalLabel" style="font-family: 'Oleo Script', cursive;">Give Gifts to Brides</h4>
                                            </div>
                                            <div class="col-lg-3 col-3 pr-4">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="modal-header" style="margin-top: -20px;">
                                        </div>
                                        <div class="modal-body">
                                            <span style="color: #daa520;"><i class="fas fa-envelope-open-text fa-5x"></i></span>
                                            <p style="font-family:'Roboto Slab', serif;"><i>Dengan penuh kehangatan, untuk melengkapi kebahagiaan pengantin, bentuk tanda kasih dapat Anda berikan dengan cara cashless melalui rekening bank/scan QR code e-wallet berikut:</i></p>
                                            <hr>
                                            <br>
                                            <div class="row justify-content-center">
                                                <div class="col-md-5 col-5 text-left">
                                                    <h6>Bank BCA</h6>
                                                    <b>212334433333321</b>
                                                    <p>a/n Soekarno</p>
                                                </div>
                                                <div class="col-md-5 col-5">
                                                    <img class="img-fluid" src="images/bank_BCA.png" alt="bank BCA">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row justify-content-center">
                                                <div class="col-md-5 col-5 text-left">
                                                    <h6>Bank Mandiri</h6>
                                                    <b>212334433333321</b>
                                                    <p>a/n Soekarno</p>
                                                </div>
                                                <div class="col-md-5 col-5">
                                                    <img class="img-fluid" src="images/bank_mandiri.jpg"
                                                        alt="bank Mandiri">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12">
                                                    <h4 style="font-family:'Roboto Slab', serif;">Scan Barcode</h4>
                                                    <img class="img-fluid" src="images/barcode.jpg" alt="barcode">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="ww-section ww-rsvp-detail text-dark" id="rsvp">
            <svg style="margin-top: -250px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#751010" fill-opacity="" d="M0,32L40,53.3C80,75,160,117,240,117.3C320,117,400,75,480,74.7C560,75,640,117,720,122.7C800,128,880,96,960,90.7C1040,85,1120,107,1200,101.3C1280,96,1360,64,1400,48L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
                <div class="container">
                    <div class="col text-center">
                        <h2 class="h1 ww-title pb-1" data-aos="zoom-in-down" data-aos-duration="1000">Join Our Party
                        </h2>
                    </div>
                    <div class="row ww-rsvp-form">
                        <div class="col-md-10">
                            <div class="card-body">
                                <form id="form" method="POST">
                                    <div class="row">
                                        <div class="col-md pb-1">
                                            <div class="form-group">
                                                <label for="nama">Your Name*</label>
                                                <input class="form-control" id="nama" type="text" name="nama"
                                                    required="required" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md pb-1">
                                            <div class="form-group">
                                                <label for="konfirmasi">Confirm*</label>
                                                <select class="form-control" id="konfirmasi" name="konfirmasi" required>
                                                    <option value=""> Pilih </option>
                                                    <option value="Hadir">Hadir</option>
                                                    <option value="Tidak Hadir">Tidak Hadir</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="pesan">Your Message</label>
                                                <textarea class="form-control" id="pesan" name="pesan"
                                                    rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center">
                                            <button class="btn btn-danger btn-submit" id="Submit" name="submit"
                                                type="submit"><span style="padding-left: 10px; padding-right:10px;">Send</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="card scrollmenu">
                                <div class="card-body ucapan" id="tampil">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <button style="z-index: 99; left: 6px; bottom: 100px; position: fixed" onclick="toggleMusic()"
                class="btn btn-primary" id="btn-playback" data-play="false">
                <i class="fa fa-play"></i>
                <span id="btn-text"></span>
            </button> -->
            <div style="z-index: 99; left: 16px; bottom: 90px; position: fixed; text-decoration:none;" onclick="toggleMusic()"
                 id="btn-playback" data-play="false">
            <img class="img-fluid rounded-circle border border-warning" width="40" height="40" id="ubah" src="images/btn_musik/play.jpeg" alt="play-stop" srcset="" style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);">
            <span id="btn-text"></span>
            </div>
            <audio id="audio" src="musik/lagu.mp3" loop>
        </div>
    </div>
    <footer>
        <div class="ww-footer bg-light" style="margin-bottom: 80px">
            <div class="container text-center py-4">
                <p class="my-0" style="font-family: 'Marck Script', cursive; font-size:11px;">Ejaan telah disesuaikan (sebaik mungkin) dengan
                    PUEBI</p>
                <p class="my-0" style="font-family: 'Oleo Script', cursive;">Thank You!</p>
                <p class="mb-0" style="font-family: 'Arbutus Slab', serif; font-size:12px"> Powered with <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill text-danger" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg> by <img src="images/favicon/wb.png" alt="logo" class="img-fluid" style="width: 25px; height: 30px;"><a class="credit" href="https://webook.id/" target="_blank"> Webook</a></p>
            </div>
        </div>
    </footer>
    
    <!-- protocol -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <button type="button" class="close mb-1" data-dismiss="modal" aria-label="Close">
                    <h1><span aria-hidden="true">&times;</span></h1>
                </button>

                <div class="modal-body">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-12 col-12">
                            <img class="img-fluid" src="images/protokol.jpg" alt="prokes">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <!-- <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <h5>Close</h5>
                    </button> -->
                </div>
            </div>

        </div>
    </div>
    <!-- jquery comment -->
    <script type="text/javascript">
    $(document).ready(function() {

        $('#tampil').load("database/tampil.php");

        $("#Submit").click(function() {
            //validasi data
            $("#form").validate({
                rules: {
                    nama: {
                        required: true
                    },
                    konfirmasi: {
                        required: true
                    }
                },
                //script simpan data
                submitHandler: function (form) {
                    var data = $('#form').serialize();
                    $.ajax({
                        type: 'POST',
                        url: "database/pesan.php",
                        data: data,

                        cache: false,
                        success: function(data) {
                            $('#tampil').load("database/tampil.php");
                        }
                    });
                    //kosongkan form nama dan konfirmasi
                    document.getElementById("nama").value = "";
                    document.getElementById("konfirmasi").value = "";
                    document.getElementById("pesan").value = "";
                        return false;
                }
            });
        });
    });
    </script>    

    <script src="scripts/jquery.min.js?ver=1.1.0"></script>
    <script src="scripts/bootstrap.bundle.min.js?ver=1.1.0"></script>
    <script src="scripts/aos.js?ver=1.1.0"></script>
    <script src="scripts/ekko-lightbox.min.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
    <script src="scripts/jquery.validate.js?ver=1.19.2"></script>

    <!-- <script>
    angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
    $(document).ready(function() {
        setTimeout(function() {
            $('#myModal').modal('show');
        }, 8000);
    });
    angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
    setTimeout(function() {
        $('#myModal').modal('hide');
    }, 3000);
    </script> -->
</body>

</html>