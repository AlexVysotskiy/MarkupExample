<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>TheQA - Российская компания по тестированию ПО</title>
        <!--<meta name="viewport" content="width=device-width, minimum-scale=1.0">-->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="stylesheet" href="css/bootstrap.min.css"  />
        <link rel="stylesheet" href="css/swiper.min.css"  />
        <link rel="stylesheet" href="css/style.css"  />
    </head>

    <body>



        <div class="wrapper">

            <div class="header <?php echo $template == 'main' ? '' : 'black'; ?> ">

                <div class="container-fluid">

                    <div class="col-md-2">
                        <a class="navbar-brand" href="<?php echo $baseLink; ?>/">
                            <!--<img alt="Brand" src="img/logo.png" />-->
                        </a>
                    </div>
                    <div class="col-md-10">
                        <ul class="nav nav-pills nav-justified font-medium">
                            <li role="presentation" class="<?php echo $template == 'company' ? 'active' : ''; ?>">
                                <a href="<?php echo $baseLink; ?>/company.php">Компания</a>
                            </li>
                            <li role="presentation" class="<?php echo $template == 'services' ? 'active' : ''; ?>">
                                <a href="<?php echo $baseLink; ?>/services.php">Услуги</a>
                            </li>
                            <li role="presentation" class="<?php echo $template == 'qa' ? 'active' : ''; ?>">
                                <a href="<?php echo $baseLink; ?>/qa.php">Тестирование</a>
                            </li>
                            <li role="presentation" class="<?php echo $template == 'competence' ? 'active' : ''; ?>">
                                <a href="<?php echo $baseLink; ?>/competence.php">Компетенции</a>
                            </li>
                            <li role="presentation" class="<?php echo $template == 'projects' ? 'active' : ''; ?>">
                                <a href="<?php echo $baseLink; ?>/projects.php">Проекты</a>
                            </li>
                            <li role="presentation" class="no-border">
                                <a id="send-request-link" href="#" class="btn btn-success styled">Оставить заявку</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div><!-- .header-->

            <div class="main-content">