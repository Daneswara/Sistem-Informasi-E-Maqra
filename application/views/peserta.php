<!DOCTYPE html>
<html>
<head>
    <title>SIEM | Peserta</title>
    <!-- Tell the browser to be responsive to screen width -->

    <?php $this->load->view('_template/header.php') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<form action="<?php echo base_url(); ?>index.php/Peserta/" method="post">
    <input type="text" name="nama" placeholder="Nama Peserta"/>
    <input type="text" name="kategori" placeholder="Kategori"/>
    <button type="submit">Tambah</button>
</form>
<table border="1">
    <tr>
        <td>Nama Peserta</td>
        <td>Kategori</td>
        <td>Urutan</td>
        <td>Maqra</td>
        <td>Tema</td>
    </tr>
    <br>
    <?php
    foreach ($list_peserta as $peserta) {
        echo "<tr><td>$peserta->nama</td><td>$peserta->kategori</td>
              <td>$peserta->urutan</td><td>$peserta->maqra</td>
              <td>$peserta->tema</td>";
    }
    ?>
</table>
<!-- ./wrapper -->
<?php $this->load->view('_template/footer.php') ?>
</body>
</html>
