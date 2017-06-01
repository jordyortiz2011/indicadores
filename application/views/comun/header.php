<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
         <?php
            if( isset( $titulo_header ) )
             {
                echo "<title>$titulo_header</title>";
             }
            else 
             {
                echo "<title>Indicadores</title>";
             }
         ?>        

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?= base_url('public')?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url('public')?>/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="<?= base_url('public')?>/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?= base_url('public')?>/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?= base_url('public')?>/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="<?= base_url('public')?>/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?= base_url('public')?>/assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?= base_url('public')?>/assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->
        <!-- Add any javascripts -->
        <?php
            if( isset( $css ) )
            {
                foreach( $css as $hoja )
                {
                    echo '<link rel="stylesheet" href="' . base_url('public/') . $hoja . "\" /> \n " ;
                }
            }
         ?>
        

        <!-- ace settings handler -->
        <script src="<?= base_url('public')?>/assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
            <!--[if lte IE 8]>
            <script src="<?= base_url('public')?>/assets/js/html5shiv.min.js"></script>
            <script src="<?= base_url('public')?>/assets/js/respond.min.js"></script>
            <![endif]-->
    </head>