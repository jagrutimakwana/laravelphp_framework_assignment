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
    <title>FREE RESPONSIVE HORIZONTAL ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{url('photogallery/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="{{url('photogallery/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{url('photogallery/assets/css/style.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">

                    <h2><b> PHOTO GALLERY </b></h2>
                </a>

            </div>

            <div class="right-div">
                <a href="#" class="btn btn-danger pull-right">LOG ME OUT</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-left">
                            <li><a href="photogallery_index" class="menu-top-active">PHOTO GALLERY</a></li>
                           
                           
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END--><br>
	 
	         <div class="left-div">
                <a href="{{url('/viewgallery')}}" class="btn btn-primary pull-left">VIEW GALLERY</a>
            </div><br><br>
			
            <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
			
			<div class="form_container">
               <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
						
                            <form action="{{url('/photogallery_index')}}" method="post" enctype="multipart/form-data" role="form">
							@csrf
                                        <div class="form-group">
                                            <label>Enter Name</label>
                                            <input class="form-control" type="text" name="name" placeholder="Enter Name" />
                                            
                                        </div>
										@error('name')
                                        <div class="alert alert-danger">{{$meassage}}</div>
                                        @enderror
                                        <div class="form-group">
                                            <label>Enter Image</label>
                                            <input class="form-control" type="file" name="file" />
                                     
                                        </div>
                                            <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" type="text" name="description" placeholder="Enter Description"></textarea>
                                        </div>
                                  
                                        <div>
                                        <button type="submit" name="submit" class="btn btn-primary">Save </button>
                                         </div>
                                    </form>
                            </div>
                        </div>
						</div>
                            </div>
							</div>
      
  
</body>
</html>
