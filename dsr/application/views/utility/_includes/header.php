<?php
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
    <title><?=$this->session->userdata('fullname'); ?></title>
    <script>
    window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Sales In Pharma Company"
	},
	axisY: {
		title: "Sales(Total Sale in Lakh)"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		/*legendMarkerColor: "grey",*/
		legendText: "Month",
		dataPoints: [      
			{ y: 300878, label: "january" },
			{ y: 266455,  label: "Febuaray" },
			{ y: 169709,  label: "March" },
			{ y: 158400,  label: "April" },
			{ y: 142503,  label: "May" },
		]
	}]
});
chart.render();
}
</script>
  </head>
  <body>
      <!-- HEADER START -->
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper teal">   
                     <ul class="right hide-on-med-and-down">
              <li><a class="dropdown-button" href="#!" data-activates="userloggedin"><?=$this->session->userdata('fullname'); ?><i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>	
				    <ul id="userloggedin" class="dropdown-content">
					    <li><a href="#"><i class="material-icons teal-text waves-effect waves-teal">person</i></a></li>
					    <li><a href="<?=base_url()."home/logout";?>"><i class="material-icons teal-text waves-effect waves-teal">power_settings_new</i></a></li>
            </ul>
          </div>
          </div>
        </nav>
      </div>
      <div class="fixed-action-btn">
    <a class="btn-floating btn-large pink lighten-1">
      <i class="material-icons white-text">menu</i>
    </a>
    <ul>
      <li><a href="#add_employee" class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Add Employee" ><i class="material-icons ">add_circle</i></a></li>
      <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Attendance" ><i class="material-icons">date_range</i></a></li>
      <li><a class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Download Report"><i class="material-icons">file_download</i></a></li>
      <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="50" data-tooltip="Product">
      <i class="material-icons">redeem</i></a></li>
    </ul>
  </div>
		<header>
    
	   <ul id="slide-out" class="side-nav fixed " style="background-color:#00aced;">
     <nav>
     <div class="nav-wrapper teal"> 
     <a href="<?=base_url()."home/home"?>" class="brand-logo" style="font-size:16px;font-family:algerian;padding-top:5px;color:white;">
     <i class="material-icons small white-text right">location_on</i>
     DSR With Tracking</a>
    </div>
      </nav>
        <li>
         <div class="userView z-depth-2" style="background-color:#0084b4;">
            <a href="#!user"><img class="circle" src="<?=base_url()."assets/images/person.png"?>"></a>
            <ul style="font-size: 14px !important;color:white; padding:0px;">
            <li><?=$this->session->userdata('fullname');?></li>
            <li><?=$user_data->emailId;?></li>
            <li style="font-size: 14px !important;color:white">Last login: <?=$this->cdate->mydatetime_short($user_data->updatedOn); ?></li>
            </ul>
        </div></li>
		 <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"  ><a class="collapsible-header  waves-effect waves-teal white-text"><i class="material-icons white-text left">description</i>Report<i class=" material-icons right white-text">expand_more</i></a>
              <div class="collapsible-body"  style="background-color:#00aced;">
                <ul>
                  <li ><a href="#"><i class="material-icons small white-text"><font color="white">event_note</i>Daily Report</font></a></li>
                  <li><a href="#"><i class="material-icons small white-text"><font color="white">assignment</i>Weekly Report</font></a></li>
                  <li><a href="#"><i class="material-icons small white-text"><font color="white">assessment</i>Monthly Report</font></a></li>
                  <li><a href="#"><i class="material-icons small white-text"><font color="white">description</i>Annual Report</font></a></li>
                </ul>
              </div>
			   <li class="bold"><a class="collapsible-header  waves-effect white-text waves-teal"><i class="material-icons white-text">group</i>Employee<i class=" material-icons right white-text">expand_more</i></a>
              <div class="collapsible-body white-text" style="background-color:#00aced;">
                <ul>
                  <li><a href="#add_employee"><i class="material-icons small white-text">add_circle</i><font color="white">Add Employee</font></a></li>
                  <li><a href="<?=base_url()."home/employee"?>"><i class="material-icons small white-text">person</i><font color="white">View Record</font></a></li>
                </ul>
              </div>
            </li>
			<li class="bold"><a class="collapsible-header  waves-effect  white-text waves-teal"><i class="material-icons small white-text">assignment</i>Target Achieved</a></li>
            </li>
       </ul> 
	   </header><br/>
<!--Popup for add employee-->
          <div id="add_employee" class="modal modal-fixed-footer">
            <form  autocomplete="off" action="<?=base_url()."home/addUser";?>" method="post">
              <div class="modal-content">
                <h4>Add New Member.....</h4>
                <div class="col s12">
                  <div class="input-field col s6">
                    <input id="Member_name" type="text" class="validate" name="fullname" required>
                    <label for="Member_name">Fullame</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="post" type="text" class="validate" name="post" required>
                    <label for="post">Post</label>
                  </div>
                </div>
                <i class="input field col s12">user type</i>
      		        <div class="input-field col m2">
                    <input class="with-gap" name="userType" type="radio" id="Admin"  value="Admin" required />
	                  <label for="Admin">Admin</label>
                  </div>
                  <div class="input-field col m2">
      		          <input class="with-gap" name="userType" type="radio" id="employee" value="employee" required />
			              <label for="employee">Employee</label>
                  </div>
                <div class="col s12">
                    <div class="input-field col s6">
                      <input id="mobileNumber" type="text" class="validate" name="mobileNumber" required>
                      <label for="mobileNumber">mobile Number</label>
                    </div>
                    <div class="input-field col s6">
                      <input id="email" type="text" name="emailId" class="validate"required>
                      <label for="email">email</label>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat ">SAVE & NEXT</button>
              </div>
            </form>
          </div>
          <!-- end of add employee --> 