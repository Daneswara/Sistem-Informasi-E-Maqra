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
            <h3 class="box-title">Kategori</h3>
            <div class="box-tools pull-right">
                <button id="myBtn" type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    Tambah Kategori
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>Nama Kategori</td>
                        <td>Ada Maqra</td>
                        <td>Ada Tema</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    <br>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_kategori as $kategori) {
                        echo "<tr><td>$kategori->kategori</td><td>";
                        if ($kategori->pakai_maqra == 1) {
                            echo "Iya";
                        } else {
                            echo "Tidak";
                        }
                        echo "</td><td>";
                        if ($kategori->pakai_tema == 1) {
                            echo "Iya";
                        } else {
                            echo "Tidak";
                        }
                        echo "</td>
                        <td><a href='#edit' type='button' class='btn btn-warning'>Edit</button></td>
                        <td><a href='#delete' type='button' class='btn btn-danger'>Delete</button></td>";
                    }
                    ?>
                </tbody>
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