<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DumbWaysDotId | Soal No 7</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">No. 7</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=kategori">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=buku">Buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-2">
    <?php
    
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    
    switch ($page) {
        case 'home':
            require 'pages/' . $page . '.php';
            break;
        
        case 'kategori':
            require 'pages/' . $page . '.php';
            break;

        case 'kategori_add':
            require 'pages/' . $page . '.php';
            break;

        case 'kategori_edit':
            require 'pages/' . $page . '.php';
            break;

        case 'buku':
            require 'pages/' . $page . '.php';
            break;

        case 'buku_add':
            require 'pages/' . $page . '.php';
            break;

        default:
            require 'pages/404.php';
            break;
    }
    ?>
    </div>
</body>
</html>