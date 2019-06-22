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
    SIEM | Identitas
        <!-- <small>it all starts here</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('index.php/User')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li> -->
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <form action="<?php echo base_url(); ?>index.php/User/simpan_identitas" method="post" role="form">
    <div class="box box-body">
        <div class="box-header with-border">
            <h3 class="box-title">Identitas</h3>
            <div class="box-tools pull-right">
                <!-- <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button> -->
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
            
        </div>
        <div class="form-group has-feedback">
            <table class="table table-user-information">
                    <tbody>
                        <tr>
                        <td>Nama Peserta</td>
                        <td><input type="text" class="form-control" value="<?php echo $hasil->daerah;?>" placeholder="Nama Daerah" name="daerah"></td>
                        </tr>
                        <tr>
                        <td>Email</td>
                        <td> <input type="text" class="form-control" value="<?php echo $hasil->email;?>" placeholder="Email" name="email"></td>
                        </tr>
                        <tr>
                        <td>Surat Mandat Sebagai Admin Kafilah</td>
                        <td>  <input type="file" name="surat" required/></td>
                        </tr>
                        <tr>
                        <td colspan ="2" class="center"> <img src="<?php echo base_url('surat/'.$hasil->surat);?>" width="100%" class="center"></td>
                        </tr>
                        <tr>
                        <td class="center" colspan ="2"> <button type="submit" class="btn btn-primary btn-block btn-flat">Edit</button></td>
                        </tr>
                    </tbody>
            </table>
            <!-- <label>Daerah: </label>
            <input type="text" class="form-control" value="<?php echo $hasil->daerah;?>" placeholder="Nama Daerah" name="daerah">

            </div>
            <div class="form-group has-feedback">
                <label>Email: </label>
                <input type="text" class="form-control" value="<?php echo $hasil->email;?>" placeholder="Nama Daerah" name="daerah">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Surat Mandat Sebagai Admin Kafilah</label>
                <input type="file" name="surat" required/><br>
            </div> 
            <div class="pull-center">
            <img src="<?php echo base_url('surat/'.$hasil->surat);?>" width="600px" class="center">
                </div>
                <br>
                <br>
            <div class="col-xs-offset-4 col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Edit</button>
            </div> -->
     </div>

     </form>

</section><!-- /.content -->

<?php 
$this->load->view('_template/js');
?>