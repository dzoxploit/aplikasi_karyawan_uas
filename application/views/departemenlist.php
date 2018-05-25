<?php
$id=$this->session->userdata('id');
 
if(!$id){
 
  redirect('user/login_view');
}
 
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>Selamat datang di applikasi karyawan PT codeigniter sejahtera</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css")?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/datatables.min.css")?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url("assets/template/back/bower_components/Ionicons/css/ionicons.min.css")?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("assets/template/back/dist/css/AdminLTE.min.css")?>">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href=<?php echo base_url("assets/template/back/dist/css/skins/skin-red.min.css")?>>
<link rel="stylesheet" href=""/>
<style type="text/css">
.navbar{
    background-color: #0a145e;
}
.table{
  margin-top: 100px;
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
    .data .container{
    	margin-top: 200px;
    }
    #content .title {
        font-size: 14px;
        font-weight: bold;
        border-bottom: 0px solid #000;
        margin-bottom: 0px;
    }
 
    #content .item {
        margin-bottom: 0px;
        padding-bottom: 0px;
    }
 
        #content .item p {
            margin: 3px 0px;
            padding: 3px 0px;
        }
        .container .footer .row .ya {
            background-color: white;
            font-style: arial;
        }
        .jaf{
            list-style-type:none;
        }
        .jaf li{
            float:left;
            text-decoration:none;
        }
    footer{
        background-color: #0a145e;
    }
</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid satu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="col-md-20">
                <a class="navbar-brand">
                <span class="light">Applikasi karyawan sederhana</span>
                </a>
                </div>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url('user'); ?>"> Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url('departemen'); ?>">departemen</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url('employee'); ?>">employee</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#produk">sallary</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
        <div class="container">
		<?php echo $table; ?>
	</div>
    <script type="text/javascript" src="/assets/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/assets/"></script>
<script type="text/javascript">
$(document).ready(function(){
   $('#example').DataTable();
});
</script>
</body>
</html>