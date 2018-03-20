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
      <li><a href="<?=base_url()."home/employee"?>" class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="View Employee" ><i class="material-icons ">date_range</i></a></li>
      <li><a href="<?=base_url()."home/employee"?>" class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Add Employee" ><i class="material-icons">add_circle</i></a></li>
      <li><a href="<?=base_url()."home/employee"?>" class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Download Report"><i class="material-icons">file_download</i></a></li>
      <li><a href="<?=base_url()."home/employee"?>" class="btn-floating blue tooltipped" data-position="left" data-delay="50" data-tooltip="Product">
      <i class="material-icons">redeem</i></a></li>
    </ul>
  </div>
		<header>
    
	   <ul id="slide-out" class="side-nav fixed " style="background-color:#00aced;">
     <nav>
     <div class="nav-wrapper teal"> 
     <a href="#" class="brand-logo" style="font-size:16px;font-family:algerian;padding-top:5px;color:white;">
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
        	<li class="bold"><a href="<?=base_url()."home/"?>" class="collapsible-header  waves-effect  white-text waves-teal"><i class="material-icons small white-text">assignment</i>Daily Report</a></li>
            </li>
            <li class="bold"><a href=" <?=base_url()."home/addUserLocation/"?>" class="collapsible-header  waves-effect  white-text waves-teal"><i class="material-icons small white-text">location_on</i>Location Track</a></li>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect  white-text waves-teal"><i class="material-icons small white-text">drafts</i>Message</a></li>
            </li>
            <li class="bold"><a href="<?=base_url()."home/employee"?>" class="collapsible-header  waves-effect  white-text waves-teal"><i class="material-icons small white-text">local_library</i>Check Other Employee</a></li>
            </li>
       </ul> 
	   </header><br/>
