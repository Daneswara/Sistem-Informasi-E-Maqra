<!DOCTYPE html>
<html>
<head>
    <title>SIEM | Kategori</title>
    <!-- Tell the browser to be responsive to screen width -->

    <?php $this->load->view('_template/header.php') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<form action="<?php echo base_url(); ?>index.php/Kategori/" method="post">
    <input type="text" name="kategori" placeholder="Nama Kategori"/><br>
    Pakai Maqra <br>
    Iya <input type="radio" name="maqra" value="1"/>
    Tidak <input type="radio" name="maqra" value="0"/><br>
    Pakai Tema? <br>
    Iya <input type="radio" name="tema" value="1"/>
    Tidak <input type="radio" name="tema" value="0"/><br>
    <button type="submit">Tambah</button>
</form>
<table border="1">
    <tr>
        <td>Nama Kategori</td>
        <td>Maqra</td>
        <td>Tema</td>
    </tr>
    <br>
    <?php
    foreach ($list_kategori as $kategori) {
        echo "<tr><td>$kategori->kategori</td><td>$kategori->pakai_maqra</td>
              <td>$kategori->pakai_tema</td>";
    }
    ?>
</table>
<!-- ./wrapper -->
<?php $this->load->view('_template/footer.php') ?>
</body>
</html>
