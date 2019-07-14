<!DOCTYPE html>
<html>
<?php 
$this->load->view('_template/header');
?>
<?php
$this->load->view('_template/head_admin');
$this->load->view('_template/side_admin');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        User
        <!-- <small>it all starts here</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
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
              <h3 class="box-title">Daftar Kafilah</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Urut</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                </tr>
                </thead>
                <tbody>
   
                <tr>
                  <td> Nomor</td>
                  <td> Peserta ke </td>
                  <td>Kategori ke</td>
                </tr>
       
                </tbody>
                <tfoot>
                <tr>
                  <th>No Urut</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

    <!-- </div> -->
    <!-- /.box -->

</section><!-- /.content -->

<?php 
$this->load->view('_template/js');
?>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</html>