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
                        <a class="navbar-brand" href="/">
                            <!--<img alt="Brand" src="img/logo.png" />-->
                        </a>
                    </div>
                    <div class="col-md-10">
                        <ul class="nav nav-pills nav-justified font-medium">
                            <li role="presentation" class="<?php echo $uri == '/company' ? 'active' : ''; ?>">
                                <a href="/company">Компания</a>
                            </li>
                            <li role="presentation" class="<?php echo $uri == '/services' ? 'active' : ''; ?>">
                                <a href="/services">Услуги</a>
                            </li>
                            <li role="presentation" class="<?php echo $uri == '/qa' ? 'active' : ''; ?>">
                                <a href="/qa">Тестирование</a>
                            </li>
                            <li role="presentation" class="<?php echo $uri == '/competence' ? 'active' : ''; ?>">
                                <a href="/competence">Компетенции</a>
                            </li>
                            <li role="presentation" class="<?php echo $uri == '/projects' ? 'active' : ''; ?>">
                                <a href="/projects">Проекты</a>
                            </li>
                            <li role="presentation" class="no-border">
                                <a id="send-request-link" href="#" class="btn btn-success styled">Оставить заявку</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div><!-- .header-->

            <div class="main-content">