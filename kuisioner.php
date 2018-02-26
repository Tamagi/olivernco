<!doctype html>
<?php 
session_start();
session_destroy();
?>
<html lang="en">
    <head>
        <title>Hello, world!</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/kuisioner.css">
        <!-- Bootstrap CSS -->
        <style>
            .dropdown-toggle:hover .dropdown-menu{
                display: block;
            }
        </style>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <form action="try.php" name="myform" method="post" enctype="multipart/form-data">
        <div class="logo text-center">
            <img src="img/logo-white.png">
        </div>
        <section class="kuis-1" id="kuis1">
            <div class="container">
                <div class="row justify-content-center no-gutters">
                    <div class="col-sm-10 bg-white">
                        <div class="row justify-content-end no-gutters">
                            <div class="col-sm-5">
                                <h1 class="title-form1">Sesuaikan Antara Kebutuhan Anda dan Layanan Kami.</h1>
                                <h2 class="text">Mulailah dengan mengisi data <br>diri Anda.</h2>
                                <input class="input-text" type="text" placeholder="Nama Anda" name="nama"required>
                                <input class="input-text" type="text" placeholder="Email"name="email" required>
                                <input class="input-text" type="text" placeholder="Nomor Telepon"name="telp" required>
                                <div class="row justify-content-between no-gutters">
                                    <div class="col-sm-6 text-left">
                                        <a href="index.html"class="input-button"style="color:#c5c5c5;">Kembali</a>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a class="input-button lanjut"  value="Lanjut">Lanjut</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-container">

                </div>
            </div>
        </section>
        <section class="kuis-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 text-center">
                        <h1 class="title">Anda Badan Usaha atau Perorangan</h1>
                        <div class="row justify-content-between mr-0 ml-0">
                            <div class="col-sm-6 pl-0">
                                <input type="radio" class="badanusaha" name="step1" value="1" id="badanusaha">
                                <label for="badanusaha" class="input-button-2 badan-usaha text-center">Badan Usaha</label>
                                <div class="kuis-2-help">
                                    <span>?</span>
                                    <div class="help-box">
                                    Badan usaha adalah kesatuan hukum, teknis, dan ekonomis yang bertujuan mencari laba atau keuntungan. Contoh : Koperasi, BUMN, Perum, Persero, dll.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 pr-0">
                                <input type="radio" class="perorangan" name="step1" value="2" id="profesi">
                                <label for="profesi" class="input-button-2 profesi text-center">Perorangan</label>
                                <div class="kuis-2-help" style="right:0px">
                                    <span>?</span>
                                    <div class="help-box">
                                    Anda sebagai pribadi wajib pajak yang memiliki profesi atau usaha tertentu. Contoh : Dokter, Wirausaha, Karyawan, Ahli, dll.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="kuis-badan-usaha">
            <div class="container badan-usaha-step-1">
                <h1 class="title justify-content-center text-center">Bergerak dalam bidang apa?              </h1>
                <div class="row justify-content-start text-center text-xl-left">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-xl-1">
                        <input type="radio" class="badanusaharadio" name="step2" value="1" id="pertanian" href="#step2scroll" required>
                        <label for="pertanian" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/pertanian.png">
                            <p>Pertanian</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="2" id="peternakan" href="#step2scroll">
                        <label for="peternakan" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/peternakan.png">
                            <p>Peternakan</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="3" id="toko-online" href="#step2scroll">
                        <label for="toko-online" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/toko-online.png">
                            <p>Toko-Online</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="4" id="fesyen" href="#step2scroll">
                        <label for="fesyen" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/fesyen.png">
                            <p>fesyen</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="5" id="teknologi" href="#step2scroll">
                        <label for="teknologi" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/teknologi.png">
                            <p>teknologi</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-xl-1">
                        <input type="radio" class="badanusaharadio" name="step2" value="6" id="jasa" href="#step2scroll">
                        <label for="jasa" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/jasa.png">
                            <p>jasa</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="7" id="kecantikan" href="#step2scroll">
                        <label for="kecantikan" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/kecantikan.png">
                            <p>kecantikan</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="8" id="kesehatan" href="#step2scroll">
                        <label for="kesehatan" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/kesehatan.png">
                            <p>kesehatan</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="9" id="logistik" href="#step2scroll">
                        <label for="logistik" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/logistik.png">
                            <p>logistik</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="10" id="transportasi" href="#step2scroll">
                        <label for="transportasi" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/transportasi.png">
                            <p>transportasi</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-xl-1">
                        <input type="radio" class="badanusaharadio" name="step2" value="11" id="makanan" href="#step2scroll">
                        <label for="makanan" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/makanan.png">
                            <p>makanan</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="12" id="hiburan" href="#step2scroll">
                        <label for="hiburan" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/hiburan.png">
                            <p>hiburan</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="13" id="properti" href="#step2scroll">
                        <label for="properti" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/properti.png">
                            <p>properti</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="14" id="perdagangan" href="#step2scroll">
                        <label for="perdagangan" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/perdagangan.png">
                            <p>perdagangan</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="badanusaharadio" name="step2" value="15" id="lainnya" href="#step2scroll">
                        <label for="lainnya" class="kuis-box-container text-center">
                            <img src="img/badan-usaha-icon/lainnya.png">
                            <p>lainnya</p>
                        </label>              
                    </div>
                </div>
            </div>
            <div class="container badan-usaha-step-2" id="step2scroll">
                <h1 class="title justify-content-center text-center">Berapa Omzet<br>dalam Satu Bulan?</h1>
                <div class="row justify-content-center mr-0 ml-0">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="omset" name="step3" value="1" id="omset1" href="#step3scroll" required>
                        <label for="omset1" class="kuis-box-container text-center">
                            <img src="img/step-icon/less-money.png">
                            <p>< 20Juta</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="omset" name="step3" value="2" id="omset2" href="#step3scroll">
                        <label for="omset2" class="kuis-box-container text-center">
                             <img src="img/step-icon/more-money.png">
                            <p>20 ~ 100Juta</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="omset" name="step3" value="3" id="omset3" href="#step3scroll">
                        <label for="omset3" class="kuis-box-container text-center">
                            <img src="img/step-icon/most-money.png">
                            <p>> 100Juta</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="container badan-usaha-step-3" id="step3scroll">
                <h1 class="title justify-content-center text-center">Berapa Jumlah<br>Karyawan yang Dimiliki?</h1>
                <div class="row justify-content-center mr-0 ml-0">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="jumlah" name="step4" value="1" id="jumlah1" href="#submit1">
                        <label for="jumlah1" class="kuis-box-container text-center">
                            <img src="img/step-icon/less-employee.png">
                            <p>< 10 Orang</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="jumlah" name="step4" value="2" id="jumlah2" href="#submit1">
                        <label for="jumlah2" class="kuis-box-container text-center">
                             <img src="img/step-icon/more-employee.png">
                            <p>10 ~ 40 Orang</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="jumlah" name="step4" value="3" id="jumlah3" href="#submit1">
                        <label for="jumlah3" class="kuis-box-container text-center">
                            <img src="img/step-icon/most-employee.png">
                            <p>> 40 Orang</p>
                        </label>
                    </div>
                </div>
            </div>
        </section>
        <section class="kuis-profesi">
            <div class="container">
                <h1 class="title justify-content-center text-center">Apa Profesi Anda?</h1>
                <div class="row justify-content-start text-center text-xl-left">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-xl-1">
                        <input type="radio" class="profesiradio" name="step2" value="1" id="karyawan" href="#stepprofscroll">
                        <label for="karyawan" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/karyawan.png">
                            <p>Karyawan</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="2" id="musisi" href="#stepprofscroll">
                        <label for="musisi" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/musisi.png">
                            <p>Musisi</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="3" id="youtuber" href="#stepprofscroll">
                        <label for="youtuber" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/youtuber.png">
                            <p>Youtuber</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="4" id="agen" href="#stepprofscroll">
                        <label for="agen" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/agen-asuransi.png">
                            <p>Agen Asuransi</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="5" id="selebgram" href="#stepprofscroll">
                        <label for="selebgram" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/selebgram.png">
                            <p>Selebgram</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-xl-1">
                        <input type="radio" class="profesiradio" name="step2" value="6" id="penulis" href="#stepprofscroll">
                        <label for="penulis" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/penulis.png">
                            <p>Penulis</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="7" id="wirausaha" href="#stepprofscroll">
                        <label for="wirausaha" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/wirausaha.png">
                            <p>Wirausaha</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="8" id="pengacara" href="#stepprofscroll">
                        <label for="pengacara" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/pengacara.png">
                            <p>Pengacara</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="9" id="konsultan" href="#stepprofscroll">
                        <label for="konsultan" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/konsultan.png">
                            <p>Konsultan</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="10" id="selebriti" href="#stepprofscroll">
                        <label for="selebriti" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/selebriti.png">
                            <p>Selebriti</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-xl-1">
                        <input type="radio" class="profesiradio" name="step2" value="11" id="broker" href="#stepprofscroll">
                        <label for="broker" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/broker.png">
                            <p>Broker</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="12" id="atlet" href="#stepprofscroll">
                        <label for="atlet" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/atlet.png">
                            <p>Atlet</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="13" id="dokter" href="#stepprofscroll">
                        <label for="dokter" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/dokter.png">
                            <p>Dokter</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="14" id="arsitek" href="#stepprofscroll">
                        <label for="arsitek" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/arsitek.png">
                            <p>Arsitek</p>
                        </label>              
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="profesiradio" name="step2" value="15" id="lainnyaprof" href="#stepprofscroll">
                        <label for="lainnyaprof" class="kuis-box-container text-center">
                            <img src="img/profesi-icon/lainnya.png">
                            <p>lainnya</p>
                        </label>              
                    </div>
                </div>
            </div>
            <div class="container profesi-step-2" id="stepprofscroll">
                <h1 class="title justify-content-center text-center">Berapa Penghasilan<br>dalam Satu Bulan?</h1>
                <div class="row justify-content-center mr-0 ml-0">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="omset" name="step3" value="1" id="omset4" href="#submit1" required>
                        <label for="omset4" class="kuis-box-container text-center">
                            <img src="img/step-icon/less-money.png">
                            <p>< 20Juta</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="omset" name="step3" value="2" id="omset5" href="#submit1">
                        <label for="omset5" class="kuis-box-container text-center">
                             <img src="img/step-icon/more-money.png">
                            <p>20 ~ 100Juta</p>
                        </label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <input type="radio" class="omset" name="step3" value="3" id="omset6" href="#submit1">
                        <label for="omset6" class="kuis-box-container text-center">
                            <img src="img/step-icon/most-money.png">
                            <p>> 100Juta</p>
                        </label>
                    </div>
                </div>
            </div>
        </section>
        <div class="container submit-form">
            <div class="row justify-content-center text-center">
                <input type="submit" name="submit" value="Lihat Hasil Survei" id="submit1" style="display:none" disabled>
            </div>
        </div>
        </form>
        <script>
                $(".lanjut").click(function(){
                    var x = document.forms["myform"]["nama"].value;
                    var y = document.forms["myform"]["email"].value;
                    var z = document.forms["myform"]["telp"].value;
                    var phoneno = /^\d{8,15}$/; 
                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if (x == "") {
                        alert("Nama harus diisi.");
                        return false;
                    }
                    else if(!y.match(mailformat)|| y==""){
                        alert("E-mail yang anda masukan salah.");
                        return false;
                    }
                    else if(z==""){
                        alert("Nomor telepon harus diisi.");
                        return false;
                    }
                    else if(!z.match(phoneno)){
                        alert("Nomor telepon yang anda masukan salah.");
                        return false;
                    }
                    else{
                        $("body").css("background-color","white");
                        $(".kuis-1").css("transform","scale(0)");
                        $(".kuis-1").css("opacity","0");
                        $(".kuis-1").delay(500).hide(100);
                        $(".logo").hide(500);
                        $(".kuis-2").show(100);
                        $(".kuis-2 .container").css("opacity","1");
                    }
                });
                $(".perorangan").click(function(){
                    $(".kuis-2").css("transform","scale(0)");
                    $(".kuis-2").css("opacity","0");
                    $(".kuis-2").hide(100);
                    $(".kuis-profesi").show(100);
                    $(".kuis-profesi .container").css("opacity","1");
                    $("#submit1").removeAttr('disabled');
                    $("#submit1").delay(3000).css("display","block");
                });
                $(".profesiradio").click(function(){
                    $("body, html").animate({ 
                        scrollTop: $( $(this).attr('href') ).offset().top 
                    }, 600);
                });
                $(".badan-usaha").click(function(){
                    $(".kuis-2").css("transform","scale(0)");
                    $(".kuis-2").css("opacity","0");
                    $(".kuis-2").hide(100);
                    $(".kuis-badan-usaha").show(100);
                    $(".kuis-badan-usaha .container").css("opacity","1");
                    $("#submit1").removeAttr('disabled');
                    $("#submit1").css("display","block");
                });
                $(".badanusaharadio").click(function(){
                    $("body, html").animate({ 
                        scrollTop: $( $(this).attr('href') ).offset().top 
                    }, 600);
                });
                $(".omset").click(function(){
                    $("body, html").animate({ 
                        scrollTop: $( $(this).attr('href') ).offset().top 
                    }, 600);
                });
                $(".jumlah").click(function(){
                    $("body, html").animate({ 
                        scrollTop: $( $(this).attr('href') ).offset().top 
                    }, 600);
                });
                $("#submit1").click(function(){
                    var k = document.forms["myform"]["step1"].value;
                    var a = document.forms["myform"]["step2"].value;
                    var b = document.forms["myform"]["step3"].value;
                    var c = document.forms["myform"]["step4"].value;
                    if(k==1){
                        if(a == "" ||b == ""||c==""){
                        alert("Tolong lakukan kuisioner.");
                        $("body, html").animate({ 
                            scrollTop: $(".kuis-badan-usaha").offset().top 
                            }, 300);
                        return false;
                        }
                    }
                    if(k==2){
                        if(a == "" ||b == ""){
                        alert("Tolong lakukan kuisioner.");
                            $("body, html").animate({ 
                            scrollTop: $(".kuis-profesi").offset().top 
                            }, 300);
                        return false;
                        }
                    }
                    else{
                        location.reload();
                    }
                });
        </script>
    </body>
</html>
<?php
?>