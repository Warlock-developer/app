
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Practicas</title>
    <link href="<?php echo base_url(); ?>vendors/bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">



    <script src="<?php echo base_url(); ?>vendors/jquery/jquery-1.12.1.min.js"></script> 
    <script src="<?php echo base_url(); ?>vendors/bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>

    <!-- Datatables core JavaScript
    ================================================== -->
    <link rel="stylesheet" type="text/css" 
            href="<?php echo base_url()?>vendors/datatables/DataTables-1.10.9/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" 
            href="<?php echo base_url()?>vendors/datatables/ColReorder-1.2.0/css/colReorder.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" 
            href="<?php echo base_url()?>vendors/datatables/Buttons-1.0.3/css/buttons.bootstrap.css">
    <script type="text/javascript" language="javascript" 
            src="<?php echo base_url()?>vendors/datatables/DataTables-1.10.9/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" 
            src="<?php echo base_url()?>vendors/datatables/DataTables-1.10.9/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" 
            src="<?php echo base_url()?>vendors/datatables/ColReorder-1.2.0/js/dataTables.colReorder.js"></script>  
    <script type="text/javascript" language="javascript" 
            src="<?php echo base_url()?>vendors/datatables/Buttons-1.0.3/js/dataTables.buttons.min.js"></script>  
    <script type="text/javascript" language="javascript" 
            src="<?php echo base_url()?>vendors/datatables/Buttons-1.0.3/js/buttons.bootstrap.min.js"></script>  
    <script type="text/javascript" language="javascript" 
            src="<?php echo base_url()?>vendors/datatables/JSZip-2.5.0/jszip.min.js"></script>  
    <script type="text/javascript" language="javascript" 
            src="<?php echo base_url()?>vendors/datatables/pdfmake-0.1.18/build/pdfmake.min.js"></script>  
    <script type="text/javascript" language="javascript" 
            src="<?php echo base_url()?>vendors/datatables/pdfmake-0.1.18/build/vfs_fonts.js"></script>  
    <script type="text/javascript" language="javascript" 
            src="<?php echo base_url()?>vendors/datatables/Buttons-1.0.3/js/buttons.html5.min.js"></script>  
    <script type="text/javascript" language="javascript" 
            src="<?php echo base_url()?>vendors/datatables/Buttons-1.0.3/js/buttons.print.min.js"></script>  
    <script type="text/javascript" language="javascript" 
            src="<?php echo base_url()?>vendors/datatables/Buttons-1.0.3/js/buttons.colVis.min.js"></script>  

    <style>
      body{
        padding-top: 70px;
      }
    </style>

  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="home">Home</a></li>
            <li><a href="users">Users</a></li>
            <li><a href="patterns">Patterns</a></li>
            <li><a href="extjs">Semcha</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

     <?php
          $this->load->view($module.'/'.$view_file);
     ?>
     <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
      
    </div><!--/.container-->
  </body>
</html>
