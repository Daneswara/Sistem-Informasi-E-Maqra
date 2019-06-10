<html>
<head>
    <title>Login</title>
</head>
<body>
<form action="<?php echo base_url(); ?>index.php/User/proses" method="post">
    <input type="text" name="email" placeholder="Email"/>
    <input type="password" name="password" placeholder="Password"/>
    <button type="submit">Login</button>
</form>
</body>
</html>
