<?php
	$assetsbasepath = base_url()."assets/";
?>
<script src="<?=$assetsbasepath; ?>js/required.js"></script>
<script src="<?=$assetsbasepath; ?>js/materialize.min.js"></script>
<script src="<?=$assetsbasepath; ?>js/init.js"></script>
<script src="<?=$assetsbasepath; ?>js/index.js"></script>
<!-- [END] PAGE CONTENT FROM HERE --><br/><br/><br/><br/>
<footer class="page-footer " style="background-color:#0084b4;">

<div class="row">
              <div class="col m3 offset-m3">
			  <p style="color:white;font-size:14px; font-family:verdana;"><i class="material-icons small white-text">home</i>Home</p>
			  </div>
			  <div class="col m3">
			  <p style="color:white;font-size:14px; font-family:verdana;"><i class="material-icons small white-text">people</i>Aboutus</p>
			  </div>
			  <div class="col m3">
			  <p style="color:white;font-size:14px; font-family:verdana;"><i class="material-icons small white-text">phone</i>ContactUs</p>
			  </div>
</div>
	<div class="footer-copyright white-text">
	<div class="row" style="margin-bottom: 0px;">	
		<span class="right footer-text-link col m12">
			Developed By &nbsp;&copy; &nbsp;<a class="white-text" target="_blank">AARUNYA</a>
		</span>
	</div>
	</div>
</footer>
 	<!--  Scripts--><script src="<?=$assetsbasepath; ?>js/canvasjs.min.js"></script>

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
     //complete: function() { alert('submitted'); } // Callback for Modal close
    }
  );
  
  $("tr.clickable-row").click(function() {
		       window.location = $(this).data("href");
		    });
			
  </script>
  </body>
</html>