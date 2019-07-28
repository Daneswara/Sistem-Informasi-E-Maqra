<?php
$this->load->view('_template/header');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('_template/head');
$this->load->view('_template/side');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        SIEM | Nomor Urut
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('index.php/NomerUrut') ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a></li>

    </ol>
</section>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<section class="lockscreen-wrapper">
    <!-- <button type="submit" id="myBtnTanpil" class="btn btn-primary btn-block btn-flat">Tampil Acak</button> -->
    <div style="text-align: center;">
        <label id="sisa" style="text-align: center;font-family: 'Titillium Web', cursive;font-size: 40px;">Waktu Ambil No.Urut</label>
    </div>
    <br>
    <!-- <div>
        <?php
        //         foreach ($jadwal as $j) {
        // echo $j->waktu_akhir_acak_nourut;
        //         } 
        ?>
    </div> -->
    <div id="days"></div>
    <div id="hours"></div>
    <br>
    <br>
    <!-- <button type="submit" id="myBtn" class="btn btn-primary btn-block btn-flat" style="display: none;">Acak</button> -->
    <button type="submit" id="myBtn" class="btn btn-primary btn-block btn-flat">Acak</button>


    <!-- </div> -->

    <div id="myModal" class="modal">
        <div class="loader">
            <div class="fontAcak" id="haha"></div>
        </div>
        <div class="bottomAcak">
            <button type="submit" id="stop" class="btn btn-primary btn-block btn-flat">Stop</button>
        </div>
    </div>
    <div id="myModal2" class="modal">
        <div class="lockscreen-wrapper">
            <div class="close">
                <button type="submit" id="close" class="btn btn-primary btn-block btn-flat">
                    <span style="width:100px: height:100px; color:red;" class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div id="hasil" class="flip-card-front">
                        <!-- <div class="fontAcak2" id="hasil">
                            <Label><?php //echo (rand(0, 100)) 
                                    ?></Label>
                        </div> -->
                    </div>
                    <div id="backHasil" class="flip-card-back">
                        <!-- <h1>Kafilah Fahmil</h1>
                        <h2>Bandung</h2> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomAcak2">
            <button type="submit" id="myBtn2" class="btn btn-primary btn-block btn-flat">Acak Lagi</button>
        </div>
    </div>


</section><!-- /.content -->

<script>
    var jmlpeserta = "<?php echo $banyak; ?>";
    var jmlpesertaperkategori = "<?php echo $peserta_perkategori;?>";
    var NamaKategori = "<?php $i = 0;
                        foreach ($kategori as $k) {
                            echo $k->kategori . ',';
                            $i++;
                        } ?>";
    splitNamaKetegori = NamaKategori.split(",");
    idKategori = "<?php echo $kategori_awal; ?>";
    console.log('idKategori :', jmlpesertaperkategori);
    $(function() {
        var ele = $('#haha');
        var clr = null;
        (loop = function() {
            var rand = (Math.random() * jmlpesertaperkategori+1) >> 0;
            clearTimeout(clr);
            ele.html(rand);
            setTimeout(loop, 80);
        })();
    });

    $(function() {
        //     var ele2 = $('#hasil');
        var rand = Math.floor((Math.random() * jmlpesertaperkategori+1));
        for (d = 0; d < 1000; d++) {
            if (rand != "0") {
                break;
            } else {
                rand = Math.floor((Math.random() * jmlpesertaperkategori+1));
            }
        }
        //     ele2.html(rand2);
        html2 = '<h1>Kafilah <br><br>' + splitNamaKetegori[idKategori] + '<br></h1><h1>Nomor Urut <br>' + rand + '</h1>';
        $('#backHasil').html(html2);

        html = '<div class="fontAcak2" id="hasil">' + rand + '</div>';
        $('#hasil').html(html);
    });
    var modal = document.getElementById('myModal');
    var modal2 = document.getElementById('myModal2');
    var btn = document.getElementById("myBtn");
    var btn2 = document.getElementById("myBtn2");
    var span = document.getElementById("close");
    var stop = document.getElementById("stop");
    var hasil = document.getElementById("hasil");
    btn.onclick = function() {
        modal.style.display = "block";
    }
    btn2.onclick = function() {
        modal.style.display = "block";
        modal2.style.display = "none";
        hasil.style.display = "block";
        $(function() {
            //     var ele2 = $('#hasil');
            var rand = Math.floor((Math.random() * jmlpesertaperkategori+1));
            for (d = 0; d < 1000; d++) {
                if (rand != "0") {
                    break;
                } else {
                    rand = Math.floor((Math.random() * jmlpesertaperkategori+1));
                }
            }
            //     ele2.html(rand2);
            html2 = '<h1>Kafilah <br><br>' + splitNamaKetegori[idKategori] + '<br></h1><h1>Nomor Urut <br>' + rand + '</h1>';
            $('#backHasil').html(html2);

            html = '<div class="fontAcak2" id="hasil">' + rand + '</div>';
            $('#hasil').html(html);
        });
    }
    stop.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "block";
        var d = new Date();
        var tgl_acak = d.toLocaleString();
        console.log('tgl_acaSDSDk', d.toLocaleString());
        // $.ajax({
        //     url: "<?php //echo base_url(); ?>index.php/NomerUrut/postNomor"
        //     type: "POST",
        //     dataType: "json",
        //     data: {
        //         "user_id": rand "hasil": rand,
        //         "tgl_acak": tgl_acak,
        //         "kategori": kategori
        //     },
        //     success: function(data) {
        //         // console.log('data', data);
        //     },
        //     error: function(data) {
        //         // do something
        //     }
        // });
    }
    span.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function makeTimer() {
        // var btnTampil = document.getElementById('myBtnTanpil');
        // btnTampil.onclick = function() {
        //     myBtn.style.display = "block";
        // }

        // var endTime = new Date("29 April 2020 9:56:00 GMT+07:00");
        var coba = "<?php foreach ($jadwal as $j) {
                        echo $j->waktu_akhir_acak_nourut;
                    } ?>";
        console.log('coba', coba);

        var endTime = new Date(coba);
        endTime = (Date.parse(endTime) / 1000);

        var now = new Date();
        now = (Date.parse(now) / 1000);

        var timeLeft = endTime - now;

        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

        if (hours < "10") {
            hours = "0" + hours;
        }
        if (minutes < "10") {
            minutes = "0" + minutes;
        }
        if (seconds < "10") {
            seconds = "0" + seconds;
        }

        // $("#days").html(days + "<span>  Hari</span>");
        // $("#hours").html(hours + " : " + minutes + " : " + seconds + " ");
        // $("#hours").html(+ hours + "<span>Hours</span>" + minutes + "<span>Minutes</span>" + seconds + "<span>Seconds</span>");

        // $("#minutes").html(minutes + "<span>Minutes</span>");
        // $("#seconds").html(seconds + "<span>Seconds</span>");
        if (parseInt(days) < 0) {
            myBtn.style.display = "block";
            days.style.display = "none";
            hours.style.display = "none";
            sisa.style.display = "none";
        } else {
            $("#days").html(days + "<span>  Hari</span>");
            $("#hours").html(hours + " : " + minutes + " : " + seconds + " ");
        }

    }

    setInterval(function() {
        makeTimer();
    }, 1000);
</script>
<style type="text/css">
    .output {
        text-align: center;
        margin: 20px;
        padding: 20px;
        background: gray;
        border-radius: 10px;
        font-size: 80px;
        width: 80px;
        color: white;
        float: left;
    }


    #days {
        text-align: center;
        font-family: 'Titillium Web', cursive;
        font-size: 80px;
        color: #db4844;
    }

    #hours {
        text-align: center;
        font-family: 'Titillium Web', cursive;
        font-size: 50px;
        color: #f07c22;
    }

    #minutes {
        font-family: 'Titillium Web', cursive;
        font-size: 100px;
        color: #f6da74;
    }

    #seconds {
        font-family: 'Titillium Web', cursive;
        font-size: 50px;
        color: #abcd58;
    }

    .flip-card {
        background-color: transparent;
        width: 500px;
        height: 300px;
        perspective: 1000px;
    }

    .flip-card-inner {
        position: absolute;
        top: 10%;
        left: -5%;
        /* width: 60%;
        height: 60%; */
        /* position: relative; */
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
    }

    .flip-card-front {
        background-color: #2980b9;
        color: black;
    }

    .flip-card-back {
        background-color: #2980b9;
        color: white;
        transform: rotateY(180deg);
    }


    .loader {
        position: absolute;
        top: 30%;
        left: 35%;
        width: 40%;
        height: 40%;
        margin-left: -25px;
        margin-top: -25px;
        background-color: #2980b9;
        -webkit-animation: sk-rotateplane 0.4s infinite ease-in-out;
        animation: sk-rotateplane 0.4s infinite ease-in-out;
    }

    .fontAcak {
        font-size: 130pt;
        text-align: center;
        color: white;
    }

    .fontAcak2 {
        font-size: 160pt;
        text-align: center;
        color: white;
    }


    .bottomAcak {
        position: absolute;
        width: 400px;
        height: 400px;
        top: 70%;
        bottom: 0px;
        right: 25%;
        left: 40%;
        margin-left: -45px;

    }

    .bottomAcak2 {
        position: absolute;
        width: 400px;
        height: 400px;
        top: 80%;
        bottom: 0px;
        right: 25%;
        left: 40%;
        margin-left: -45px;

    }

    .glyphicon {
        font-size: 50pt;
    }

    .close {
        position: absolute;
        top: 5%;
        left: 87%;
        color: transparent;
    }

    .loader2 {
        position: absolute;
        top: 20%;
        left: 20%;
        width: 60%;
        height: 60%;
        /* margin-left: -25px;
        margin-top: -25px; */
        background-color: #2980b9;
        /* -webkit-animation: sk-rotateplane 0.4s infinite ease-in-out;
        animation: sk-rotateplane 0.4s infinite ease-in-out; */
    }


    @-webkit-keyframes sk-rotateplane {
        0% {
            -webkit-transform: perspective(120px);
        }

        50% {
            -webkit-transform: perspective(120px) rotateY(180deg);
        }

        100% {
            -webkit-transform: perspective(120px) rotateY(180deg) rotateX(180deg);
        }
    }

    @keyframes sk-rotateplane {
        0% {
            -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);
            transform: perspective(120px) rotateX(0deg) rotateY(0deg);
        }

        50% {
            -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
            transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
        }

        100% {
            -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
        }
    }

    .spiralContainer {
        border-radius: 50%;
        width: 200px;
        height: 200px;
        overflow: hidden;
        margin: 20px;

        -webkit-animation: spin 3s linear 0s infinite reverse;
        -moz-animation: spin 3s linear 0s infinite reverse;
        -ms-animation: spin 3s linear 0s infinite reverse;
        -o-animation: spin 3s linear 0s infinite reverse;
        animation: spin 3s linear 0s infinite reverse;

        -webkit-animation-play-state: paused;
        -moz-animation-play-state: paused;
        -ms-animation-play-state: paused;
        -o-animation-play-state: paused;
        animation-play-state: paused;
    }

    .spiral {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background-image: url(http://farm7.staticflickr.com/6115/6319704650_0a2bd0dcef_o.jpg);
        background-repeat: no-repeat;
        background-position: 50% 50%;


        -webkit-animation: spin 6s linear 0s infinite normal;
        -moz-animation: spin 6s linear 0s infinite normal;
        -ms-animation: spin 6s linear 0s infinite normal;
        -o-animation: spin 6s linear 0s infinite normal;
        animation: spin 6s linear 0s infinite normal;
    }

    .spiralContainer:hover {
        -webkit-animation-play-state: running;
        -moz-animation-play-state: running;
        -ms-animation-play-state: running;
        -o-animation-play-state: running;
        animation-play-state: running;
    }

    @keyframes spin {
        0% {
            transform: rotate(360deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(360deg);
        }

        100% {
            -webkit-transform: rotate(0deg);
        }
    }

    @-ms-keyframes spin {
        0% {
            -ms-transform: rotate(360deg);
        }

        100% {
            -ms-transform: rotate(0deg);
        }
    }

    @-moz-keyframes spin {
        0% {
            -moz-transform: rotate(360deg);
        }

        100% {
            -moz-transform: rotate(0deg);
        }
    }

    @-o-keyframes spin {
        0% {
            -o-transform: rotate(360deg);
        }

        100% {
            -o-transform: rotate(0deg);
        }
    }
</style>
<script>
    $('.home-particles').particleground({
        dotColor: '#fff',
        lineColor: '#555555',
        particleRadius: 6,
        curveLines: true,
        density: 10000,
        proximity: 110
    });;
    // });
</script>
<style type="text/css">
    .home-particles {
        background: #d2d6de;
        overflow: hidden;

    }

    .home-particles .pg-canvas {
        position: absolute;
        top: 0;
        left: 0;
        height: 100% !important;
        width: 100% !important;
        opacity: .52;
        background-image: url(<?php echo base_url(); ?>surat/themes10.jpg);
    }

    .home-particles .shadow-overlay {
        background: #d2d6de;
        display: none;
    }
</style>
<?php
$this->load->view('_template/js');
?>