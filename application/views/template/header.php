<!DOCTYPE html>
<html>
<head>
     <title>se·rene</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.css">
     <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
     <link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">
     <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/images/logo.png" />
</head>

<body>
     <div class="page-wrapper">
          <!-- Preloader -->
          <!-- <div class="preloader"></div> -->

<!-- Main Header / Header Style Two-->
<header class="main-header header-style-two">
    	
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="outer-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo">
                              <a href="<?= base_url()?>" class="navbar-brand">se·rene</a>
                         </div>
                    </div>
                   	
					<div class="nav-outer clearfix">
                    
                         <!--Mobile Navigation Toggler For Mobile-->
                         <div class="mobile-nav-toggler"><span class="icon flaticon-menu-4"></span></div>

						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
						               <li class="current"><a href="<?= base_url()?>">Beranda</a></li>
                                             <li><a href="<?= base_url()?>news">Artikel</a></li>
                                             <li><a href="<?= base_url()?>meditasi">Meditasi</a></li>
                                             <li><a href="<?= base_url()?>about">Tentang Kami</a></li>
                                             <li class="appointment-btn"><a href="<?= base_url()?>appointment">Janjian Yuk!</a></li>
					               </ul>
							</div>
							
						</nav>
						<!-- Main Menu End-->
						
					</div>
					
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="images/logo-white.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
					<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
		
    <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
            	<div class="nav-logo"><a href="index.html"><img src="images/ex-new/logo-2.png" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->