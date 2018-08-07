<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="bower_components/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                    page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-red"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class="pull-right">40%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Some task I need to do
                                                        <small class="pull-right">60%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Make beautiful transitions
                                                        <small class="pull-right">80%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <?php 
                    include 'menu.php';
                    ?>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>




                <!--
// ***************************************************************************************************************
//                            PARTIE A MODIFIER
// ***************************************************************************************************************
-->



                <!-- Main content -->
                <section class="content">

                    <?php
                    include 'connexion.php'; 
                    include 'pages/articles/article.php';
                    include 'pages/articles/article_manager.php'; 


                    if(isset ($_POST['valider']))
                    {
                        $id_article = trim(htmlspecialchars($_POST['id_article']));
                        $titre = trim(htmlspecialchars($_POST['titre']));
                        $contenu = trim(htmlspecialchars($_POST['contenu']));
                        $resume = trim(htmlspecialchars($_POST['resume']));
                        $tags = trim(htmlspecialchars($_POST['tags']));
                        $id_categorie = trim(htmlspecialchars($_POST['id_categorie']));
                        $id_utilisateur = trim(htmlspecialchars($_POST['id_utilisateur']));
                        $photo = trim($_POST['photo']); 
                        $date_article = date("Y-m-d H:i:s");
                        $publie = trim(htmlspecialchars($_POST['publie']));

                        if(!empty($_POST['type']))
                        {
                            if(empty($titre) || empty($contenu) || empty($resume) || empty($id_categorie) || empty($id_utilisateur) || empty($tags))
                            {
                                $champ = '';
                                if(empty($titre))
                                {
                                    $champ = $champ . 'titre <br />';
                                }
                                if(empty($contenu))
                                {
                                    $champ = $champ . 'contenu <br />';
                                }
                                if(empty($resume))
                                {
                                    $champ = $champ . 'resume <br />';
                                }
                                if(empty($id_categorie))
                                {
                                    $champ = $champ . 'categorie <br />';
                                }
                                if(empty($id_utilisateur))
                                {
                                    $champ = $champ . 'utilsateur <br />';
                                }
                                if(empty($tags))
                                {
                                    $champ = $champ . 'tags <br />';
                                }

                                $erreur = 'Il manque le(s) champ(s) : <br /> ' . $champ;
                    ?>

                    <SCRIPT LANGUAGE="JavaScript">
                        document.location.href="formulaire_article.php?erreur=<?php echo $erreur;?>&type=modifier&id_article=<?php echo $id_article;?>"
                    </SCRIPT>

                    <?php
                            }
                            else
                            {

                                $requete = $pdo->prepare('UPDATE article SET titre = :titre, contenu = :contenu, date_article = :date_article, publie = :publie, tags = :tags, resume = :resume, photo = :photo, id_utilisateur = :id_utilisateur, id_categorie = :id_categorie WHERE id_article = :id');

                                $requete -> bindValue(':titre', $titre);
                                $requete -> bindValue(':contenu', $contenu);
                                $requete -> bindValue(':date_article', $date_article);
                                $requete -> bindValue(':publie', $publie);
                                $requete -> bindValue(':tags', $tags);
                                $requete -> bindValue(':resume', $resume);
                                $requete -> bindValue(':photo', $photo);
                                $requete -> bindValue(':id_utilisateur', $id_utilisateur);
                                $requete -> bindValue(':id_categorie', $id_categorie);
                                $requete -> bindValue(':id', $id_article);

                                $requete -> execute();

                                $succes = 'Votre article a bien été modifié';
                    ?>

                    <SCRIPT LANGUAGE="JavaScript">
                        document.location.href=" articles.php?validation=<?php echo $succes;?>"
                    </SCRIPT>

                    <?php

                            }
                        }
                        else
                        {
                            if(empty($titre) || empty($contenu) || empty($resume) || empty($id_categorie) || empty($id_utilisateur) || empty($tags))
                            {
                                $champ = '';
                                if(empty($titre))
                                {
                                    $champ = $champ . 'titre <br />';
                                }
                                if(empty($contenu))
                                {
                                    $champ = $champ . 'contenu <br />';
                                }
                                if(empty($resume))
                                {
                                    $champ = $champ . 'resume <br />';
                                }
                                if(empty($id_categorie))
                                {
                                    $champ = $champ . 'categorie <br />';
                                }
                                if(empty($id_utilisateur))
                                {
                                    $champ = $champ . 'utilsateur <br />';
                                }
                                if(empty($tags))
                                {
                                    $champ = $champ . 'tags <br />';
                                }

                                $erreur = 'Il manque le(s) champ(s) : <br />' . $champ;
                    ?>

                    <SCRIPT LANGUAGE="JavaScript">
                        document.location.href="formulaire_article.php?erreur=<?php echo $erreur;?>"
                    </SCRIPT>

                    <?php
                            }
                            else
                            {

                                $requete = $pdo->prepare('INSERT INTO article(titre, contenu, date_article, publie, tags, resume, photo, id_utilisateur, id_categorie) VALUES(:titre, :contenu, :date_article, :publie, :tags, :resume, :photo, :id_utilisateur, :id_categorie)');

                                $requete -> bindValue(':titre', $titre);
                                $requete -> bindValue(':contenu', $contenu);
                                $requete -> bindValue(':date_article', $date_article);
                                $requete -> bindValue(':publie', $publie);
                                $requete -> bindValue(':tags', $tags);
                                $requete -> bindValue(':resume', $resume);
                                $requete -> bindValue(':photo', $photo);
                                $requete -> bindValue(':id_utilisateur', $id_utilisateur);
                                $requete -> bindValue(':id_categorie', $id_categorie);

                                $requete -> execute();


                                $succes = 'Votre article a bien été créé ! <br/>';
                    ?>

                    <SCRIPT LANGUAGE="JavaScript">
                        document.location.href=" articles.php?validation=<?php echo $succes;?>"
                    </SCRIPT>

                    <?php
                            }
                        }
                    }

                    else
                    {
                        if(isset($_GET['type']))
                        {
                            $id_article = strtoupper(trim(htmlspecialchars($_GET['id_article'])));
                            $type = strtoupper(trim(htmlspecialchars($_GET['type'])));
                            $article_manager = new ArticleManager($pdo);
                            $article = $article_manager -> get($id_article);
                            $titre = $article -> getTitre();
                            $contenu = $article -> getContenu();
                            $resume = $article -> getResume();
                            $tags = $article -> getTags();
                            $date_article = $article -> getDate_article();
                            $id_utilisateur = $article -> getId_utilisateur();
                            $id_categorie = $article -> getId_categorie();
                            $photo = $article -> getPhoto();
                            $publie = $article -> getPublie();
                        }
                    ?>

                    <form action="" method="post">
                        <div class="container mt-5 border border">

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <label for="titre"> Categorie : </label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <select name="id_categorie">

                                        <?php
                        $requete = $pdo -> prepare("SELECT * FROM categorie");
                        $requete -> execute();

                        while($donnees = $requete -> fetch())
                        {
                                        ?>

                                        <option value="<?php echo $donnees['id_categorie'];?>" <?php if(isset($type)and ($id_categorie==$donnees['id_categorie'])){echo 'selected';}?>><?php echo $donnees['nom'];?>
                                        </option>

                                        <?php
                        }
                                        ?>

                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <label for="titre"> Utilisateur : </label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <select name="id_utilisateur">

                                        <?php
                        $requete = $pdo -> prepare("SELECT * FROM utilisateur");
                        $requete -> execute();

                        while($donnees = $requete -> fetch())
                        {
                                        ?>

                                        <option value="<?php echo $donnees['id_utilisateur'];?>" <?php if(isset($type)and ($id_utilisateur==$donnees['id_utilisateur'])){echo 'selected';}?>><?php echo $donnees['nom'];?> <?php echo $donnees['prenom'];?>
                                        </option>

                                        <?php
                        }
                                        ?>

                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <label for="titre"> Publie : </label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <select name="publie">
                                        <option value="0" <?php if(isset($type)and ($publie==$donnees['publie'])){echo 'selected';}?>>Publie</option>
                                        <option value="1" <?php if(isset($type)and ($publie==$donnees['publie'])){echo 'selected';}?>>Brouillon</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <label for="titre"> Titre : </label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <input type="text" name="titre" id="titre" value="<?php if(isset($type)){echo $titre;}?>" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <label for="resume"> Resume : </label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <input type="text" name="resume" id="resume" value="<?php if(isset($type)){echo $resume;}?>" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <label for="photo"> Photo : </label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <input type="file" name="photo" id="photo"  />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <label for="tags"> Tags: </label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <input type="text" name="tags" id="tags" value="<?php if(isset($type)){echo $tags;}?>" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <label for="contenu"> Contenu: </label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <textarea rows="4" cols="50" name="contenu" id="contenu"><?php if(isset($type)){echo $contenu;}?></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-9">
                                    <input type="hidden" name="type" value="<?php if(isset($type)){echo $type;}?>" />
                                </div>
                                <div class="col-lg-8 col-md-9">
                                    <input type="hidden" name="id_article" value="<?php if(isset($type)){echo $id_article;}?>" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-9">
                                    <input type="submit" name="valider" value="valider" />
                                </div>
                            </div>

                        </div>

                    </form>

                    <?php 
                        if(isset($_GET['erreur']))
                        {
                    ?>

                    <div class="alert alert-danger">
                        <strong>Erreur</strong> <?php echo $_GET['erreur'];
                        ?>
                    </div>

                    <?php
                        }
                    }
                    ?>

                </section>



                <!--
// ***************************************************************************************************************
//                            FIN PARTIE A MODIFIER
// ***************************************************************************************************************
-->




                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Other sets of options are available
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right">
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="bower_components/raphael/raphael.min.js"></script>
        <script src="bower_components/morris.js/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="bower_components/moment/min/moment.min.js"></script>
        <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>