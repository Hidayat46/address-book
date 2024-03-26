<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link {
            color: #333 !important; /* Darken text color */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
    
                <form class="form-inline my-2 my-lg-0" style="margin-left: 200px;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Filter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Import</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Export</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clean</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enrich</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Extract</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Edit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
