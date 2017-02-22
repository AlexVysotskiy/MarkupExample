<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>TheQA - Российская компания по тестированию ПО</title>
        <!--<meta name="viewport" content="width=device-width, minimum-scale=1.0">-->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="stylesheet" href="css/bootstrap.min.css?v=1"  />
        <link rel="stylesheet" href="css/swiper.min.css?v=1"  />
        <link rel="stylesheet" href="css/style.css?v=10.7"  />
    </head>

    <body>



        <div class="wrapper">

            <div class="header <?php echo $template == 'main' ? '' : 'black'; ?> ">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-2">
                            <?php if ($template == 'main'): ?>
                                <div class="navbar-brand">
                                </div>
                            <?php else: ?>
                                <a class="navbar-brand" href="<?php echo $baseLink; ?>/">
                                </a>
                            <?php endif; ?>

                        </div>
                        <div class="col-md-10">
                            <ul class="nav nav-pills nav-justified font-medium">
                                <li role="presentation" class="<?php echo $uri == '/company' ? 'active' : ''; ?>">
                                    <a href="<?php echo $baseLink; ?>/company">Компания</a>
                                </li>
                                <li role="presentation" class="<?php echo $uri == '/services' ? 'active' : ''; ?>">
                                    <a href="<?php echo $baseLink; ?>/services">Услуги</a>
                                </li>
                                <li role="presentation" class="<?php echo $uri == '/qa' ? 'active' : ''; ?>">
                                    <a href="<?php echo $baseLink; ?>/qa">Тестирование</a>
                                </li>
                                <li role="presentation" class="<?php echo $uri == '/competence' ? 'active' : ''; ?>">
                                    <a href="<?php echo $baseLink; ?>/competence">Компетенции</a>
                                </li>
                                <li role="presentation" class="<?php echo $uri == '/projects' ? 'active' : ''; ?>">
                                    <a href="<?php echo $baseLink; ?>/projects">Проекты</a>
                                </li>
                                <li role="presentation" class="no-border">
                                    <a id="send-request-link" href="#" class="btn btn-success styled">Оставить заявку</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div><!-- .header-->

            <div class="main-content">