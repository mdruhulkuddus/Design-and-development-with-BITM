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
                    <li><a href="action.php?page=about" class="nav-link">About</a></li>
                    <li><a href="action.php?page=product" class="nav-link">Product</a></li>
                    <li><a href="action.php?page=gallery" class="nav-link">Gallery</a></li>
                </ul>
            </div>
        </nav>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="text-center">All Student Info</h1>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered  table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                    use App\classes\Student;
                                    foreach( $students as $student) {?>
                                        <tr>
                                            <td><?php echo $student['name'] ?></td>
                                            <td><?php echo $student['id'] ?></td>
                                            <td><?php echo $student['email'] ?></td>
                                            <td><?php echo $student['phone'] ?></td>
                
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>