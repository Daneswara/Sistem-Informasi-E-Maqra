<html>
<head>
    <title>Register</title>
</head>
<body>
<form action="<?php echo base_url(); ?>index.php/User/daftar" method="post" enctype="multipart/form-data">
    Nama
    <input type="text" name="nama" placeholder="Nama" required/><br>
    Daerah
    <input type="text" name="daerah" placeholder="Daerah" required/><br>
    Email
    <input type="text" name="email" placeholder="Email" required/><br>
    Password
    <input type="password" name="password" placeholder="Password" required/><br>
    No. HP
    <input type="text" name="nohp" placeholder="No. HP" required/><br>
    Surat Mandat Sebagai Admin Kafilah
    <input type="file" name="surat" required/><br>
    <button type="submit">Register</button>
</form>
</body>
</html>