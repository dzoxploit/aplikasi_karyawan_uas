<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah departmen Employee apps</title>
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
                        <a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
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
                      <h3 class="panel-title">Departemen</h3>
                  </div>
                  <div class="panel-body">
 
                  <div style="color: red;"><?php echo validation_errors(); ?></div>
                  <?php echo form_open("departemen/update/".$departemen->dept_id); ?>
 
                      <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
                          <fieldset>
                            <div class="form-group">
                                  <input class="form-control" placeholder="description" type="text" name="description" value="<?php echo set_value('description', $departemen->description); ?>">
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="headofdept" name="headofdept" type="text" value="<?php echo set_value('headofdept', $departemen->headofdept); ?>"autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="headofdept" name="ruangan" type="text" value="<?php echo set_value('ruangan', $departemen->ruangan); ?>"autofocus>
                              </div>
 
                              <input type="submit" name="submit" value="Simpan">
                              <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
                             <?php echo form_close(); ?>
 
                          </fieldset>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
 
</span>
</div>

  </body>
</html>