<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration account login Employee apps</title>
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
  <div class="gokil container-fluid" style="margin-top: 100px;"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Registration</h3>
                  </div>
                  <div class="panel-body">
 
                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>
 
                      <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
                          <fieldset>
                            <div class="form-group">
                                  <input class="form-control" placeholder="Name" name="name" type="text" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Email" name="email" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="password" type="password" value="">
                              </div>
 
                              <div class="form-group">
                                  <input class="form-control" placeholder="phone" name="phone" type="text" value="">
                              </div>
 
                              <div class="form-group">
                                  <select class="form-control" name="status">
                                    <option value="admin">Admin</option>
                                    <option value="superadmin">Superadmin</option>
                                  </select>
                              </div>

                              <div class="form-group">
                                  <select class="form-control" name="status">
                                    <option value="admin">Admin</option>
                                    <option value="superadmin">Superadmin</option>
                                  </select>
                              </div>
 
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >
 
                          </fieldset>
                      </form>
                      <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">Login here</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>
 
</span>
</div>

  </body>
</html>