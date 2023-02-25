<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Affichage des donnees  du formulaire you know</h1>

<ul>
    <li> <?php echo $_POST['name'];?></li>
    <li> <?php echo $_POST['email'];?></li>
    <li> <?php echo $_POST['password'];?></li>
    <li> <?php echo $_POST['cpassword'];?></li>
    <li> <?php echo $_POST['user_type'];?></li>
    <li> <?php echo $_POST['com'];?></li>
    <li> <?php echo $_POST['groupe'];?></li>
    <li> <?php echo $_POST['submit'];?></li>
</ul>
</body>
</html>