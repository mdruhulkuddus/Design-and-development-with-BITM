<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a href="action.php?page=home" class="navbar-brand">Logo</a>
                <ul class="navbar-nav">
                    <li><a href="action.php?page=home" class="nav-link">Home</a></li>
<!--                    <li><a href="action.php?page=about" class="nav-link">About</a></li>-->
                    <li class="dropdown"><a href="action.php?page=product" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Product</a>
                        <ul class="dropdown-menu">
                            <?php foreach ($categories as $category){ ?>
                            <li><a href="action.php?page=category&catId=<?php echo $category['id']?>" class="dropdown-item"><?php echo $category['name']?></a></li>
                            <?php }?>
                        </ul>
                    </li>
                    <li><a href="action.php?page=contact" class="nav-link">Contact</a></li>
                    <li><a href="action.php?page=calculator" class="nav-link">Calculator</a></li>
                </ul>
            </div>
        </nav>
        