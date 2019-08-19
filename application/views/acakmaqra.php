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
        SIEM | Acak Maqra
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('index.php/AcakMaqra') ?>"><i class="fa fa-arrow-circle-left"></i> Kembali</a></li>

    </ol>
</section>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<section class="lockscreen-wrapper">
    <!-- <button type="submit" id="myBtnTanpil" class="btn btn-primary btn-block btn-flat">Tampil Acak</button> -->
    <div style="text-align: center;">
        <label id="sisa" style="text-align: center;font-family: 'Titillium Web', cursive;font-size: 40px;">Waktu Ambil Maqra</label>
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
            <button type="submit" id="myBtn2" class="btn btn-primary btn-block btn-flat">Acak Lagi?</button>
        </div>
    </div>


</section><!-- /.content -->

<script>
    var user_id= '<?php echo $_SESSION['id'];?>';
    var modal = document.getElementById('myModal');
    var modal2 = document.getElementById('myModal2');
    var btn = document.getElementById("myBtn");
    var btn2 = document.getElementById("myBtn2");
    var span = document.getElementById("close");
    var stop = document.getElementById("stop");
    var hasil = document.getElementById("hasil");
    var rand = 0;
    var pd=0;
    var pdTemp=0;
    var banyak_peserta_daerah = "<?php echo $peserta_perdaerah?>"-1;
    var tgl_acak;
    var jmlpeserta = "<?php echo $banyak; ?>";
    var jmlpesertaperkategori = "<?php echo $peserta_perkategori; ?>";
    var NamaKategori = "<?php $i = 0;
                        foreach ($kategori as $k) {
                            echo $k->kategori . ',';
                            $i++;
                        } ?>";
    splitNamaKetegori = NamaKategori.split(",");
    idKategori = "<?php echo $kategori_awal; ?>";
    var pesertaDaerahTemp = "<?php $i = 0;
                            foreach ($peserta_daerah as $peserta) {
                                echo $peserta->id . ',';
                                $i++;
                            } ?>";
    splitPesertaDaerah = pesertaDaerahTemp.split(",");
    var pesertaDaerahTempUserid = "<?php $i = 0;
                            foreach ($peserta_daerah as $peserta) {
                                echo $peserta->user_id . ',';
                                $i++;
                            } ?>";
    splitPesertaDaerahUserid = pesertaDaerahTempUserid.split(",");
    var pesertaDaerahTempNama = "<?php $i = 0;
                            foreach ($peserta_daerah as $peserta) {
                                echo $peserta->nama . ',';
                                $i++;
                            } ?>";
    splitPesertaDaerahNama = pesertaDaerahTempNama.split(",");
    var pesertaDaerahTempKategori = "<?php $i = 0;
                            foreach ($peserta_daerah as $peserta) {
                                echo $peserta->kategori . ',';
                                $i++;
                            } ?>";
    splitPesertaDaerahKategori = pesertaDaerahTempKategori.split(",");
    var pesertaDaerahTempUrut = "<?php $i = 0;
                            foreach ($peserta_daerah as $peserta) {
                                echo $peserta->maqra . ',';
                                $i++;
                            } ?>";
    splitPesertaDaerahUrut = pesertaDaerahTempUrut.split(",");
    
    console.log('idKategori :', splitPesertaDaerahUrut[pd]);
    while (pdTemp <= banyak_peserta_daerah) {
        // console.log('splitPesertaDaerahUrut[pdTemp]',splitPesertaDaerahUrut[pdTemp]);
        if (splitPesertaDaerahUrut[pdTemp]== null || splitPesertaDaerahUrut[pdTemp]== 0 ){
            pd = pdTemp;
            console.log('pd',pd);
            break;
        }else{
            pdTemp++;
            console.log('pdTemp',pdTemp);
        }
    }
    $(function() {
        var ele = $('#haha');
        var clr = null;
        (loop = function() {
            var rand = (Math.random() * jmlpesertaperkategori + 1) >> 0;
            clearTimeout(clr);
            ele.html(rand);
            setTimeout(loop, 80);
        })();
    });
    $(function() {
        //     var ele2 = $('#hasil');
        rand = Math.floor((Math.random() * jmlpesertaperkategori + 1));
        for (d = 0; d < splitPesertaDaerahUrut.length ; d++) {
            console.log('d atas',d);
            console.log('panjang', splitPesertaDaerahUrut.length);
            for(e=0; e <splitPesertaDaerahUrut.length; e++){
                if(rand == splitPesertaDaerahUrut[e]){
                    tempRand++;
                }else{
                    rand = rand;
                }
            }
            if (rand != "0" && tempRand == 0 ) {
                break;
            } else {
                rand = Math.floor((Math.random() * jmlpesertaperkategori + 1));
                d=0;
                console.log('rand',rand);
                console.log('d bawah',d);
            }
        }
        //     ele2.html(rand2);
        html2 = '<h1>Kafilah <br>'+splitPesertaDaerahNama[pd]+'<br>' + splitNamaKetegori[splitPesertaDaerahKategori[pd]] + '<br></h1><h1>Nomor Urut <br>' + rand + '</h1>';
        $('#backHasil').html(html2);

        html = '<div class="fontAcak2" id="hasil">' + rand + '</div>';
        $('#hasil').html(html);
    });

    btn.onclick = function() {
        modal.style.display = "block";
    }
    btn2.onclick = function() {
        console.log('banyak_peserta_daerah',banyak_peserta_daerah );
        if(pd == banyak_peserta_daerah){
            alert("Peserta anda sudah dipilih semua nomor urut maqranya");
            console.log('Peserta anda sudah dipilih semua nomor urutnya', pd);
            location.reload();
        }else{
            var linkupdateKategori = "<?php echo base_url(); ?>index.php/AcakMaqra/getPesertaDaerah/"+(pd+1)+"";
            console.log('Peserta', pd);
            $(location).attr('href',linkupdateKategori);
            console.log('p',p);
        }
        // if(pdTemp>banyak_peserta_daerah){
        //     modal.style.display = "none";
        // }else{
        //     modal.style.display = "block";
        // }
        // modal.style.display = "block";
        // modal2.style.display = "none";
        // hasil.style.display = "block";
        // $(function() {
        //     //     var ele2 = $('#hasil');
        //     var rand = Math.floor((Math.random() * jmlpesertaperkategori + 1));
        //     for (d = 0; d < 1000; d++) {
        //         if (rand != "0") {
        //             break;
        //         } else {
        //             rand = Math.floor((Math.random() * jmlpesertaperkategori + 1));
        //         }
        //     }
        //     //     ele2.html(rand2);
        //     html2 = '<h1>Kafilah <br><br>' + splitNamaKetegori[idKategori] + '<br></h1><h1>Nomor Urut <br>' + rand + '</h1>';
        //     $('#backHasil').html(html2);

        //     html = '<div class="fontAcak2" id="hasil">' + rand + '</div>';
        //     $('#hasil').html(html);
        // });
    }
    stop.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "block";
        //  var d = new Date().toISOString().slice(0, 19).replace('T', ' ');
        

        console.log('idKategori :', splitPesertaDaerah[pd]);
        var tzoffset = (new Date()).getTimezoneOffset() * 60000; //offset in milliseconds
        tgl_acak = (new Date(Date.now() - tzoffset)).toISOString().slice(0, 19).replace('T', ' ');
        
        // tgl_acak = new Date().toISOString().slice(0, 19).replace('T', ' ') ;
        // tgl_acak = d;
        //tgl_acak = d.format("YYYY-MM-DD");
        console.log('tgl_acaSDSDk', tgl_acak);
        console.log('rand', rand);
        console.log('kategori', splitNamaKetegori[splitPesertaDaerahKategori[pd]]);
        var myKeyVals = {
            user_id: splitPesertaDaerahUserid[pd],
            hasil: rand,
            tgl_acak: tgl_acak,
            kategori: splitNamaKetegori[splitPesertaDaerahKategori[pd]]
        }
        console.log('splitPesertaDaerahUserid', splitPesertaDaerahUserid[pd]);
        console.log('splitPesertaDaerahNama[pd]', splitPesertaDaerahNama[pd]);
        console.log('splitPesertaDaerahKategori[pd]', splitPesertaDaerahKategori[pd]);
        console.log('rand', rand);
        var updateData = {
            id:splitPesertaDaerah[pd],
            user_id: splitPesertaDaerahUserid[pd],
            nama: splitPesertaDaerahNama[pd],
            kategori: splitPesertaDaerahKategori[pd],
            // urutan: rand,
            maqra:rand
            // tema:null
        }
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url(); ?>index.php/AcakMaqra/postMaqra",
            data: myKeyVals,
            dataType: "text",
            success: function(data) {
               // alert("Save Complete")
                console.loh('simpan');
            }
        });
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url(); ?>index.php/AcakMaqra/updateMaqraPeserta/"+splitPesertaDaerah[pd]+"",
            data: updateData,
            dataType: "text",
            success: function(data) {
                alert("Save Complete")
            }
        });        

        console.log('Dibawah', d.toLocaleString());
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
        // console.log('coba', coba);

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
            if(pdTemp>banyak_peserta_daerah){
                myBtn.style.display = "none";
            }else{
                myBtn.style.display = "block";
            }
            // myBtn.style.display = "block";
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