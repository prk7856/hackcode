<?php
    /*********************************************************
  * Author: shagufta siddiui
  * Date: 15 Oct 2017
  * Discription: profile page of each employee
  *********************************************************/
	$assetsbasepath = base_url()."assets/";
?>
<html lang="en">
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

        <!-- CSS  -->
        <link href="<?=$assetsbasepath; ?>fonts/icons/icons.css" rel="stylesheet">
        <link href="<?=$assetsbasepath; ?>css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?=$assetsbasepath; ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?=$assetsbasepath; ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link rel="shortcut icon" href="<?=$assetsbasepath; ?>images/logo.png" type="image/x-icon" />
  
        <title>DSR | Login</title>
    </head>
    <body>
        <script src=<?base_url()."assets/js/jquery-2.1.1.min.js"?>></script>
        <script src=<?base_url()."assets/js/materialize.min.js"?>></script>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper teal">&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href="<?= base_url()."home/home"?>"><img src=<?=base_url()."assets/images/logo.png"?> class="a" style="padding-bottom:10px;height:85px;"></img>
                    <ul class="right hide-on-med-and-down">
                        <li><a style="font-size:18px;font-family:arial;font-style:bold;"></a></li>
                        <li><a style="font-size:18px;font-family:arial;font-style:bold;"></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="col s12 m6" style="padding-top:10%">
                <div class="card horizontal z-depth-5">
                    <div class="card-image" >
                        <img src=<?=base_url()."assets/images/3.gif"?>>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <b><h4 style="color:green;text-align:center;font-family:Algerian">Login</h4><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <?php
				                $errormsg = $this->session->flashdata('error');
				                if($errormsg) {
					                echo "<h5 style=\"font-size: 16px; text-align:center;margin-bottom: 20px;\" class=\"red-text\">Invalid username/password</h5>";		 
		                    	}
			                ?>
                            <form class="col s12"  autocomplete="off" action="<?=base_url()."home/loginUser";?>" method="post">
                                <div class="row">
                                    <div class="input-field col s6"style="padding-left:10px;">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" class="validate" name="username" required>
                                        <label for="icon_prefix">Username</label>
                                    </div>
                                </div><!--ROW CLOSED-->
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">vpn_key</i>
                                        <input id="icon_telephone" type="password" class="validate"name=passwd required>
                                        <label for="icon_telephone">Password</label>
                                    </div>
                                </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <button type="submit" id="login" class="waves-effect waves-light btn">LOGIN</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <a href="#">Forget Password?</a>
                            </form>
                         </div><!--Content divison close-->
                        </div><!--Card stacked -->
                    </div>
                </div>  
            </div>
            <?php
	            $assetsbasepath = base_url()."assets/";
            ?>
            <script src="<?=$assetsbasepath; ?>js/required.js"></script>
            <script src="<?=$assetsbasepath; ?>js/ng-infinite-scroll.min.js"></script>
            <script src="<?=$assetsbasepath; ?>js/appAngular.js"></script>
            <script src="<?=$assetsbasepath; ?>js/materialize.min.js"></script>
            <script src="<?=$assetsbasepath; ?>js/init.js"></script>
            <script src="<?=$assetsbasepath; ?>plugins/snackbar/snackbar.js"></script>
            <script src="<?=$assetsbasepath; ?>js/index.js"></script>
            <!-- [END] PAGE CONTENT FROM HERE -->
            <footer class="page-footer  grey darken-4" style="opacity:0.2%">
              <div class="container">
                <div class="row">
                    <div class="col m4">
			            <p style="color:white;font-size:16px; font-family:verdana;"><i class="material-icons small grey-text">home</i>Home</p>
			        </div>
			        <div class="col m4">
			            <p style="color:white;font-size:16px; font-family:verdana;"><i class="material-icons small grey-text">people</i>Aboutus</p>
			        </div>
			        <div class="col m4">
			            <p style="color:white;font-size:16px; font-family:verdana;"><i class="material-icons small grey-text">phone</i>ContactUs</p>
			        </div>
                </div>
              </div>
	          <div class="footer-copyright <?=$this->session->userdata('theme');?> darken-1 white-text">
	            <div class="row" style="margin-bottom: 0px;">	
		            <span class="right footer-text-link col m12">
			            Developed By &nbsp;&copy; &nbsp;<a class="white-text" target="_blank">AARUNYA</a>
		            </span>
	            </div>
	          </div>
            </footer>
 	        <!--  Scripts-->
	        <script>$('.modal').modal({
                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                inDuration: 300, // Transition in duration
                outDuration: 200, // Transition out duration
                startingTop: '4%', // Starting top style attribute
                endingTop: '10%', // Ending top style attribute
                ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters availabl
                    console.log(modal, trigger);
                },
                });
  
                $("tr.clickable-row").click(function() {
		            window.location = $(this).data("href");
		        });
            </script>
    </body>
</html>    