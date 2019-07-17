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
        SIEM | Peserta
        <!-- <small>it all starts here</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('index.php/Peserta')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li> -->
    </ol>
    
</section>

<!-- Main content -->
<section class="content home-particles">

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
              <h3 class="box-title">Peserta</h3>
              <div class="box-tools pull-right">
              <button id="myBtn" type="button" class="btn btn-success">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				Tambah Peserta
				</button>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                    <td>Nama Peserta</td>
                    <td>Kategori</td>
                    <td>Urutan</td>
                    <td>Maqra</td>
                    <td>Tema</td>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list_peserta as $peserta) {
                    echo "<tr><td>$peserta->nama</td><td>$peserta->kategori</td>
                        <td>$peserta->urutan</td><td>$peserta->maqra</td>
                        <td>$peserta->tema</td>";
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
                        <td>Nama Peserta</td>
                        <td><input type="text" name="nama" class="form-control" placeholder="Nama Peserta"/></td>
                        </tr>
                        <tr>
                        <td>Kategori</td>
                        <td><input type="text" name="kategori" class="form-control" placeholder="Kategori"/></td>
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
      background: #f9fafc;
      overflow: hidden;

    }

    .home-particles .pg-canvas {
      position: absolute;
      top: 0;
      left: 0;
      height: 100% !important;
      width: 100% !important;
      opacity: .52;
    }

    .home-particles .shadow-overlay {
      background: #d2d6de;
      display: none;
    }
  </style>
<!-- <?php 
$this->load->view('_template/js');
?>
