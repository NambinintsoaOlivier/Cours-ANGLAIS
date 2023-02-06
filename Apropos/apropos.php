<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>A propos</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    /*
 * Globals
 */


    /* Custom default button */
    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:focus {
        color: #333;
        text-shadow: none;
        /* Prevent inheritance from `body` */
    }


    /*
 * Base structure
 */

    body {
        text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
        box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    }

    .cover-container {
        max-width: 42em;
    }


    /*
 * Header
 */

    .nav-masthead .nav-link {
        padding: .25rem 0;
        font-weight: 700;
        color: rgba(255, 255, 255, .5);
        background-color: transparent;
        border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
        margin-left: 1rem;
    }

    .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <h2>English Club</h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse  navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                <li class="nav-item ">
                                    <a class="nav-link me-4" href=""></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="../Students/students.php">Etudiants</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="../Apropos/apropos.php">A propos</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <a class="btn btn-outline-danger" href="../securité/logout.php">DECONNECTION</a>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1>English course</h1>
            <p class="lead">Un mini application de gestion d'etudiant dans une formation sur la langue anglaise creer
                par VOLANA Nambinintsoa Olivier
            </p>
            <p class="lead">
                <a href="https://web.facebook.com/profile.php?id=100078940691093"
                    class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
            </p>
        </main>

        <footer class="mt-auto text-white-50">
            <p>Janvier 2023 , by <a href="mailto:nambinintsoaolivier25@gmail.com">@Olivier</a> </p>
        </footer>
    </div>



</body>

</html>