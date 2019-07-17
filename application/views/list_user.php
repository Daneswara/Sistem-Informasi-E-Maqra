<?php 
$this->load->view('_template/header');
?>
<?php
if($this->session->userdata('access') == "admin"){
    $this->load->view('_template/head_admin');
    $this->load->view('_template/side_admin');

} else{
    $this->load->view('_template/head');
    $this->load->view('_template/side');
}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        SIEM | Daftar User
        <!-- <small>it all starts here</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('index.php/Peserta')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li> -->
    </ol>
    
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <!-- <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Title</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div> -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar User</h3>
              <div class="box-tools pull-right">
              <button id="myBtn" type="button" class="btn btn-success">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				Tambah User
				</button>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>No. HP</td>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list_user as $user) {
                    echo "<tr><td>$user->nama</td><td>$user->email</td>
                        <td>$user->nohp</td>";
                }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

    <!-- </div> -->
    <!-- /.box -->
    <div id="myModal" class="modal" >
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Tambah data</h2>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url(); ?>index.php/Peserta/">
                    <table class="table table-user-information">
                    <tbody>
                        <tr>
                        <td>Nama User</td>
                        <td><input type="text" name="nama" class="form-control" placeholder="Nama User"/></td>
                        </tr>
                        <tr>
                        <td>Email</td>
                        <td><input type="text" name="kategori" class="form-control" placeholder="Email"/></td>
                        </tr>                     
                        
                        <tr>
                        <td><input class="btn btn-success" type="submit" name="btnSubmit" value="Tambahkan"></td>
                        </tr>
                    </tbody>
                    </table>
                </form>
            </div>
            </div>
            <br><br><br>
        </div>
    </div>
<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
}
</script>
</section><!-- /.content -->

<!-- <?php 
$this->load->view('_template/js');
?>
