
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>vendors/datatables/DataTables-1.10.9/css/dataTables.bootstrap.css">
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>vendors/datatables/DataTables-1.10.9/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>vendors/datatables/DataTables-1.10.9/js/dataTables.bootstrap.js"></script>  

    <style>
      body{
        padding-top: 70px;
      }
    </style>
    <script>
      $(function(){
        $('.navbar li').click(function(e) {
            $('.navbar li.active').removeClass('active');
            var $this = $(this);
            if (!$this.hasClass('active')) {
                $this.addClass('active');
            }
            e.preventDefault();
        });
      })
    </script>

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
