<!DOCTYPE html>
<html>
<head>
    <title>SIEM | Identitas</title>
    <!-- Tell the browser to be responsive to screen width -->

    <?php $this->load->view('_template/header.php') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<form action="<?php echo base_url(); ?>index.php/User/simpan_identitas" method="post">
    Daerah:
    <input type="text" name="daerah" placeholder="Nama Daerah" value="<?php echo $hasil->daerah;?>"/><br>
    Email:
    <input type="text" name="email" placeholder="Email" value="<?php echo $hasil->email;?>"/><br>
    <button type="submit">Edit</button>
</form>
<!-- ./wrapper -->
<?php $this->load->view('_template/footer.php') ?>
</body>
</html>
