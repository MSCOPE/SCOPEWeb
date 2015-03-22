<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SCOPE Admin</title>
        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo css_url('bootstrap.min'); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo css_url('sb-admin'); ?>" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo css_url('plugins/morris'); ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo font_url('/css/font-awesome.min'); ?>" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body onload="InitialiserCarte();">
        <!--<body> -->

        <div id="wrapper">

            <!-- Navigation -->
            <?php
            $this->load->view('templates/admin/navbar_view');
            ?>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                SCOPEWebboard
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-dashboard"></i> SCOPEWebboard <?php echo "$bodymessage"; ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- /.row -->

                    <div class="row">

                        <!-- /.row -->

                        <?php $this->load->view('templates/admin/' . $subview); ?>

                        <!-- /.row -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

        <script src="<?php echo js_url('leaf'); ?>"></script>
        <script src="<?php echo js_url('jquery'); ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo js_url('bootstrap.min.'); ?>"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?php echo js_url('plugins/morris/raphael.min'); ?>"></script>
        <script src="<?php echo js_url('plugins/morris/morris.min'); ?>"></script>
        <script src="<?php echo js_url('plugins/morris/morris-data'); ?>"></script>

    </body>

</html>
