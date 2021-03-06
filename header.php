<!-- ======================================================================= -->
<!-- HEADER START                                                            -->
<!-- ======================================================================= -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= bloginfo() ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>


        /*
         * Common Style
         */

        body {
            min-height:100vh;
            display:flex;
            flex-direction:column;
        }


        /*
         * Main Header
         */

        .main-header {
            background-color: rgb(179, 0, 0);
            padding: 1rem 0;
        }
        .main-header .navbar-brand {
            color: #FFF;
            text-transform: uppercase;
            font-weight: 600;
        }
        .main-header a.nav-link {
            color: rgba(255, 255, 255, .7);
            text-decoration: none;
            transition: color .3s;
        }

        .main-header a.nav-link:hover,
        .main-header a.nav-link.active {
            color: rgba(255, 255, 255, 1);
        }



        /*
         * Main Content
         */

        .main-content {
            flex-grow: 1;
        }


        /* Page Sidebar */

        .page-sidebar {
            background-color: red;
        }


        /* Page Content */

        .page-content {
            background-color: pink;
        }


        /*
         * Main Footer
         */

        .main-footer {
            background-color: rgb(9, 132, 0);
            padding: 2rem 0;
        }

        .main-footer h3 {
            color: #FFF;
        }

        .main-footer a {
            color: rgba(255, 255, 255, .7);
            text-decoration: none;
            transition: color .3s;
        }

        .main-footer a:hover {
            color: rgba(255, 255, 255, 1);
        }

        .main-footer .footer-copyright {
            color: rgba(255, 255, 255, .5);
            font-size: 80%;
            text-align: center;
            margin-top: 3rem;
        }
    </style>
</head>

<body>

    <!-- Main Header -->
    <header class="main-header">
        <div class="container">

            <nav class="navbar navbar-expand-lg">

                <!-- Logo / Main Heading -->
                <a class="navbar-brand" href="#"><?= bloginfo() ?></a>
                
                <!-- Burger Menu Btn -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigations space -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Main Nav -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Menu 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu 3</a>
                        </li>
                    </ul>

                    <!-- Second Nav -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Connexion</a>
                        </li>
                    </ul>
                    
                </div>
            </nav>
        </div>
    </header>


    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
<!-- ======================================================================= -->
<!-- HEADER END                                                              -->
<!-- ======================================================================= -->
