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
        <li><a href="<?php echo base_url('index.php/NomerUrut') ?>"><i class="fa fa-arrow-circle-left"></i> Keembali</a></li>

    </ol>
</section>

<!-- Main content -->
<section class="hold-transition lockscreen">
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href=""><b>Siksa Waktu Anda</a>
        </div>
        <div class="lockscreen-logo">
            <a href=""><b>Siksa Waktu Anda</a>
        </div>
        <!-- User name -->
        <!-- <div class="lockscreen-name" style="align-content: center">Siksa Waktu Anda</div>
        <div class="lockscreen-name" style="align-content: center">Siksa Waktu Anda</div> -->

        <!-- START LOCK SCREEN ITEM -->
        <!-- <div class="lockscreen-item"> -->
            <table class="lockscreen-item">
                <tr>
                    <td class="center" colspan="2"> <button type="submit" class="btn btn-primary btn-block btn-flat">Acak</button></td>
                    <!-- <td class="center" colspan="2"> </td>
                    <td class="center" colspan="2"> <button type="submit" class="btn btn-primary btn-block btn-flat">Edit</button></td> -->
                </tr>
            </table>
    </div>

</section><!-- /.content -->

<?php
// $this->load->view('_template/js');
?>