<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login-CI Login Registration</title>
    <style type="text/css">
      .navbar{
    background-color: #0a145e;
}
        .navbar{
            background-color: #0a145e;
        }
        .container-fluid .satu{
            background-color: #0a145e;
        }
        .navbar a{
            color: white;
        }
        .navbar .dtu{
            text-align: center;
        }
        .gambar1{
            width: 60px;
            height: 60px;
        }
        .carousel-inner{
            width: 100%;
        }
        .carousel-inner img{
            height: 300px;
        }
        #about{
            height: 800px;
        }
         h1 {
      margin: 0 0 35px;
      text-transform: uppercase;
      font-family: "MS Reference Sans Serif", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-weight: 700;
      letter-spacing: 1px;
    }
    .gokil .container-fluid{
      margin-top: 400px;
    }
    p {
      margin: 0 0 25px;
      font-size: 18px;
      line-height: 1.5;

    }
    #tulisan{
        margin-top: 100px;
        width: 70%;
    }
    .harus img{
        width: 100px;
        height: 100px;
    }
    .fitur{
        border-left: 3px solid #0e4e63;
    }
    @media (min-width: 768px){
        .produk .container-fluid{
            margin-bottom:600px;
        }
    }
    @media (min-width: 480px){
        .hasim .container-fluid{
            margin-top : 300px;
        }
        .produk .container-fluid{
            margin-top:800px;
        }
        
    }
    @media (min-width: 1024px){
        .hasim .container-fluid{
            margin-top: : 100px;
        }
        .produk .container-fluid{
            margin-top:600px;
        }
    }
    #content .title {
        font-size: 14px;
        font-weight: bold;
        border-bottom: 0px solid #000;
        margin-bottom: 0px;
    }
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>
 <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid satu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="col-md-20">
                <a class="navbar-brand">
                <span class="light">Applikasi karyawan ci</span>
                </a>
                </div>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url('user/login_view'); ?>">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <div class="gokil container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');
 
                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>
 
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Email" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
 
 
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
 
                        </fieldset>
                    </form>
                <center><b>Not registered ?</b> <br></b><a href="<?php echo base_url('user/register'); ?>">Register here</a></center><!--for centered text-->
 
                </div>
            </div>
        </div>
    </div>
</div>
 
 
  </body>
</html