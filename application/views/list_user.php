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
              <h3 class="box-title">Daftar User Daerah</h3>
              <div class="box-tools pull-right">
              <button id="myBtn" type="button" class="btn btn-success">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				Tambah User Daerah
				</button>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                    <td>Daerah</td>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>No. HP</td>
                    <td>Surat Mandat</td>
                    <td>Status</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list_user as $user) {
                    echo "<tr><td>$user->daerah</td>
                        <td>$user->nama</td><td>$user->email</td>
                        <td>$user->nohp</td>
                        <td><a href='".base_url("surat/")."$user->surat' target='_blank'>$user->surat</a></td>
                        <td><a href='#approve' type='button' class='btn btn-info'>Approve</button></td>
                        <td><a href='#edit' type='button' class='btn btn-warning'>Edit</button></td>
                        <td><a href='#delete' type='button' class='btn btn-danger' data-myvalue='$user->id' data-toggle='modal' data-target='#modal-danger'>Delete</button></td>";
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
                <h2>Tambah User Daerah</h2>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url(); ?>index.php/User/daftar/0" enctype="multipart/form-data">
                    <table class="table table-user-information">
                    <tbody>
                        <tr>
                        <td>Nama</td>
                        <td><input type="text" class="form-control" placeholder="Nama" name="nama" required>
                        </td>
                        </tr>
                        <tr><td>Daerah</td>
                        <td><input type="text" class="form-control" placeholder="Daerah" name="daerah" required>
                        </td></tr>                     
                        <tr><td>No. HP</td>
                        <td><input type="number" class="form-control" placeholder="No Hp" name="nohp" required>
                        </td></tr>
                        <tr><td>Email</td>
                        <td><input type="text" class="form-control" placeholder="Email" name="email" required>
                        </td></tr>
                        <tr><td>Password</td>
                        <td><input type="password" class="form-control" placeholder="Password" name="password" required>
                        </td></tr>
                        <tr><td>Surat Mandat</td>
                        <td><input type="file" id="exampleInputFile" name="surat" required>
                        </td></tr>
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
    <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Perhatian</h4>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin akan menghapus data user daerah: <span id="modal-myvalue"></span> &hellip;</p>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <a href="clear.php?clear_id=" type="button" class="btn btn-outline">Delete</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
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

<?php 
$this->load->view('_template/js');
?>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>