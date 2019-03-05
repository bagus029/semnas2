<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
        <title>Pendaftaran Kolokium SCA</title>
        <!-- BOOTSTRAP CORE STYLE  -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/bootstrap-wysiwyg-master/external/google-code-prettify/prettify.css" rel="stylesheet">
            <!-- FONT AWESOME ICONS  -->
            <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/font-awesome.css" rel="stylesheet" />
            <!-- CUSTOM STYLE  -->
            <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/style.css" rel="stylesheet" />
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/datepicker/css/bootstrap-datepicker.css">
                <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
                </head>
                <body>
                    <!--<header>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Email: </strong>info@yourdomain.com
                                    &nbsp;&nbsp;
                                    <strong>Support: </strong>+90-897-678-44
                                </div>

                            </div>
                        </div>
                    </header>
                    HEADER END-->
                    <div class="navbar navbar-inverse set-radius-zero">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.html">

                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo.png" />
                                </a>

                            </div>

                            <div class="left-div">
                                <div class="user-settings-wrapper">
                                    <ul class="nav">

                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- LOGO HEADER END-->
                      <section class="menu-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="navbar-collapse collapse ">
                                        <ul class="nav navbar-nav navbar-right">
                                            <?php
                                                $id = Yii::app()->user->id;
                                                $dat = Pendaftaran::model()->findAllByAttributes(array('idpengguna'=>$id));
                                                $count=count($dat);
                                            ?>
                                            <li class="menu-top"><a class="menu-top-active" href="index.php">Home</a></li>

                                            <?php if (!Yii::app()->user->isGuest && Yii::app()->user->level == 1) : ?>
                                                <li class="menu-top"><a href="<?php echo Yii::app()->createUrl('pendaftaran/admin&id=1'); ?>">Pendaftar Seminar</a></li>
                                                <li class="menu-top"><a href="<?php echo Yii::app()->createUrl('pendaftaran/admin&id=2'); ?>">Pendaftar Call For Papers</a></li>
                                            <?php endif; ?>

                                            <?php if (!Yii::app()->user->isGuest && Yii::app()->user->level == 3 && $count==0) : ?>
                                                <li class="menu-top"><a href="<?php echo Yii::app()->createUrl('pendaftaran/create&id=1'); ?>">Daftar Seminar</a></li>
                                                <li class="menu-top"><a href="<?php echo Yii::app()->createUrl('pendaftaran/create&id=2'); ?>">Daftar Call For Papers</a></li>
                                            <?php endif; ?>

                                             <?php if (!Yii::app()->user->isGuest && Yii::app()->user->level == 3 && $count!=0) : ?>
                                                <li class="menu-top"><a href="<?php echo Yii::app()->createUrl('pendaftaran/viewDaftar'); ?>">Lihat Daftar</a></li>
                                            <?php endif; ?>

                                            <?php if (!Yii::app()->user->isGuest): ?>
                                                <li class="menu-top"><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>">(LOGOUT)</a></li>
                                            <?php endif; ?>

                                            <?php if (Yii::app()->user->isGuest): ?>
                                                <li class="menu-top"><a href="<?php echo Yii::app()->createUrl('site/login'); ?>">DAFTAR / LOGIN</a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- MENU SECTION END-->

                    <div class="content-wrapper">
                        <div class="container">

                            <div class="row">
                                <?php echo $content; ?>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT-WRAPPER SECTION END-->
                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    &copy; 2019 FEB UNSOED | By : <a href="http://feb.unsoed.ac.id/" target="_blank">PSI FEB UNSOED</a>
                                </div>

                            </div>
                        </div>
                    </footer>
                    <?php
                    $cs = Yii::app()->clientScript;
                    $cs->registerCoreScript('jquery');
                    ?>
                    <script src="<?php //echo Yii::app()->theme->baseUrl;                                      ?>/assets/js/jquery-1.11.1.js"></script>
                    <!-- BOOTSTRAP SCRIPTS  -->
                    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap.js"></script>
                    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/datepicker/js/bootstrap-datepicker.js"></script>
                    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/bootstrap-wysiwyg-master/bootstrap-wysiwyg.js"></script>
                    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/bootstrap-wysiwyg-master/external/google-code-prettify/prettify.js"></script>
                </body>
                </html>
