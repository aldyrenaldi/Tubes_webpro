<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kidscare</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
    <style>
        body{
            background-color : white;
        }
        thead{
            background-color:  #17A1EF;
            color: white;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
        <a class="navbar-brand" href="#"><img src="../assets/image/Logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('HomeAdminController')?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('DataPelangganController')?>" style="color: #17A1EF;">Data Pelanggan <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 8px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-radius: 8px;">Search</button>
            </form>
        </div>
        <div class="dropdown">
            <a class="dropdown-toggle my-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="../assets/image/account.svg" alt="icon" height="50px" width="50px" >
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Profil</a>
                <a class="dropdown-item" href="<?= site_url('homeController/logout')?>">Logout</a>
            </div>
        </div>
    </nav>
    <table class="table">
    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php foreach($data_user as $du) : ?>
                            <th scope="row"><?= $du['id_user']?></th>
                            <th scope="row"><?= $du['nama_user']?></th>
                            <td><?= $du['email']?></td>
                            <td><?= $du['alamat']?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tr>
                    </tbody>
    </table>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js">
    </script>
</body>

</html>
