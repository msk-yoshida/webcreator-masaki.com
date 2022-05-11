<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>

    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <meta name="keywords" content="">

    <!-- META -->
    <?php if (is_attachment()): ?>
        <meta name="robots" content="noindex">
    <?php endif; ?>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/custom.css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">


    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

<!-- NAV -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">MySite</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo bloginfo('url'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">about</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        service
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">HP制作</a></li>
                        <li><a class="dropdown-item" href="#">WEBシステム制作</a></li>
<!--                        <li><hr class="dropdown-divider"></li>-->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-disabled="true">profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-disabled="true">portfolio</a>
                </li>
            </ul>
        </div>
    </div>
</nav>