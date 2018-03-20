<!--body style="padding:0px; margin:0px; background-color:#fff;font-family:'Open Sans',sans-serif,arial,helvetica,verdana"-->
<script src="<?=base_url(); ?>assets/js/jssor.slider-22.2.16.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jssor_1_slider_init = function() {

		var jssor_1_options = {
			$AutoPlay : true,
			$ArrowNavigatorOptions : {
				$Class : $JssorArrowNavigator$
			},
			$ThumbnailNavigatorOptions : {
				$Class : $JssorThumbnailNavigator$,
				$Cols : 9,
				$SpacingX : 3,
				$SpacingY : 3,
				$Align : 260
			}
		};

		var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

		/*responsive code begin*/
		/*remove responsive code if you don't want the slider scales while window resizing*/
		function ScaleSlider() {
			var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
			if (refSize) {
				refSize = Math.min(refSize, 600);
				jssor_1_slider.$ScaleWidth(refSize);
			} else {
				window.setTimeout(ScaleSlider, 30);
			}
		}

		ScaleSlider();
		$Jssor$.$AddEvent(window, "load", ScaleSlider);
		$Jssor$.$AddEvent(window, "resize", ScaleSlider);
		$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
		/*responsive code end*/
	};
</script>
<style>
	.jssora02l, .jssora02r {
		display: block;
		position: absolute;
		/* size of arrow element */
		width: 55px;
		height: 55px;
		cursor: pointer;
		background: url('img/a02.png') no-repeat;
		overflow: hidden;
	}
	.jssora02l {
		background-position: -3px -33px;
	}
	.jssora02r {
		background-position: -63px -33px;
	}
	.jssora02l:hover {
		background-position: -123px -33px;
	}
	.jssora02r:hover {
		background-position: -183px -33px;
	}
	.jssora02l.jssora02ldn {
		background-position: -3px -33px;
	}
	.jssora02r.jssora02rdn {
		background-position: -63px -33px;
	}
	.jssora02l.jssora02lds {
		background-position: -3px -33px;
		opacity: .3;
		pointer-events: none;
	}
	.jssora02r.jssora02rds {
		background-position: -63px -33px;
		opacity: .3;
		pointer-events: none;
	}
	/* jssor slider thumbnail navigator skin 03 css *//*.jssort03 .p            (normal).jssort03 .p:hover      (normal mouseover).jssort03 .pav          (active).jssort03 .pdn          (mousedown)*/
	.jssort03 .p {
		position: absolute;
		top: 0;
		left: 0;
		width: 62px;
		height: 32px;
	}
	.jssort03 .t {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		border: none;
	}
	.jssort03 .w, .jssort03 .pav:hover .w {
		position: absolute;
		width: 60px;
		height: 30px;
		border: white 1px dashed;
		box-sizing: content-box;
	}
	.jssort03 .pdn .w, .jssort03 .pav .w {
		border-style: solid;
	}
	.jssort03 .c {
		position: absolute;
		top: 0;
		left: 0;
		width: 62px;
		height: 32px;
		background-color: #000;
		filter: alpha(opacity=45);
		opacity: .45;
		transition: opacity .6s;
		-moz-transition: opacity .6s;
		-webkit-transition: opacity .6s;
		-o-transition: opacity .6s;
	}
	.jssort03 .p:hover .c, .jssort03 .pav .c {
		filter: alpha(opacity=0);
		opacity: 0;
	}
	.jssort03 .p:hover .c {
		transition: none;
		-moz-transition: none;
		-webkit-transition: none;
		-o-transition: none;
	}
	* html .jssort03 .w {
		width /**/: 62px;
		height /**/: 32px;
	}
</style>
<div class="row" style="margin: 40px 40px">
	<h5 style="margin-left: 30px;">Recipe Name</h5>
	<div class="col m6 s12">
		<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;float:left;margin-top:0px;">
			<!-- Loading Screen -->
			<div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
				<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				<div style="position:absolute;display:block;background:url('<?=base_url(); ?>assets/images/slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
			</div>
			<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden; align:left;">
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/andhrapradesh/boorelu.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/andhrapradesh/boorelu.jpg.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/andhrapradesh/gramdosa.jpg.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/andhrapradesh/gramdosa.jpg.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/andhrapradesh/jackfruit.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/andhrapradesh/jackfruit.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/andhrapradesh/muttonkabab.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/andhrapradesh/muttonkabab.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/andhrapradesh/veg-curry.jpg.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/andhrapradesh/veg-curry.jpg.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/slider/007.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/slider/thumb-007.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/008.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/img/008.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/009.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/009.jpg" />
				</div>
				<a data-u="any" href="http://www.jssor.com" style="display:none">Image Slider 2</a>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/010.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/010.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/011.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/thumb-011.jpg" />
				</div>
			</div>
			<!-- Thumbnail Navigator -->
			<div data-u="thumbnavigator" class="jssort03" style="position:absolute;left:0px;bottom:0px;width:600px;height:60px;" data-autocenter="1">
				<div style="position:absolute;top:0;left:0;width:100%;height:100%;background-color:#000;filter:alpha(opacity=30.0);opacity:0.3;"></div>
				<!-- Thumbnail Item Skin Begin -->
				<div data-u="slides" style="cursor: default;">
					<div data-u="prototype" class="p">
						<div class="w">
							<div data-u="thumbnailtemplate" class="t"></div>
						</div>
						<div class="c"></div>
					</div>
				</div>
				<!-- Thumbnail Item Skin End -->
			</div>
		</div>
	</div>
	<div class="col m6 s12" style="height:auto;">
		<div class="card-panel grey lighten-2 black-text text-darken-1">
			<center>
				<h6>MadeBy..</h6>
			</center>
			<div class="row">
				<div class="col s3">
					<label >Full Name</label>
				</div>
				<div class="col s9">
					<!--?=$userinfo -> fullName; ?-->
				</div>
			</div>
			<div class="row">
				<div class="col s3">
					<label >Username</label>
				</div>
				<div class="col s9">
					<!--?=$userinfo -> fullName; ?-->
				</div>
			</div>
			<div class="row">
				<div class="col s3">
					<label >MobileNo.</label>
				</div>
				<div class="col s9">
					<!--?=$userinfo -> fullName; ?-->
				</div>
			</div>
			<div class="row">
				<div class="col s3">
					<label >Email</label>
				</div>
				<div class="col s9">
					<!--?=$userinfo -> fullName; ?-->
				</div>
			</div>
			<div class="row">
				<div class="col s3">
					<label >Address</label>
				</div>
				<div class="col s9">
					<!--?=$userinfo -> fullName; ?-->
				</div>
			</div>

			<div class="row">
				<div class="col s3">
					<label >Price</label>
				</div>
				<div class="col s9">
					<!--?=$userinfo -> fullName; ?-->
				</div>
			</div>
			</span>
		</div>
	</div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<div class="row" style="margin:40px 40px">
	<form class="col s12">
		<div class="row">
			<div class="col s3">
				<label style="font-size: 16px; color: black;">Description</label>
			</div>
			<div class="input-field col s10">
				<textarea id="textarea1" class="materialize-textarea"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col s3">
				<label style="font-size: 16px; color: black;">Procedure</label>
			</div>
			<div class="input-field col s10">
				<textarea id="textarea1" class="materialize-textarea"></textarea>
			</div>
		</div>	
	</div>
		<div class="row" style="margin: 30px 30px;">
			<div class="col m6 s12">
			<div class="col s4">
				<label style="font-size: 16px; color: black;">Ingredients</label>
			</div>
			<div class="input-field col s12">
				<textarea id="textarea1" class="materialize-textarea"></textarea>
			</div>
			</div>
		<!--div class="row"-->
		<div class="col m6 s12">
			<div class="col s4">
				<label style="font-size: 16px; color: black;">Nutritional value.</label>
			</div>
			<div class="input-field col s12">
				<textarea id="textarea1" class="materialize-textarea"></textarea>
			</div>
		</div>
</div>
		


<!--body style="padding:0px; margin:0px; background-color:#fff;font-family:'Open Sans',sans-serif,arial,helvetica,verdana"-->
<script src="<?=base_url(); ?>assets/js/jssor.slider-22.2.16.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jssor_1_slider_init = function() {

		var jssor_1_options = {
			$AutoPlay : true,
			$ArrowNavigatorOptions : {
				$Class : $JssorArrowNavigator$
			},
			$ThumbnailNavigatorOptions : {
				$Class : $JssorThumbnailNavigator$,
				$Cols : 9,
				$SpacingX : 3,
				$SpacingY : 3,
				$Align : 260
			}
		};

		var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

		/*responsive code begin*/
		/*remove responsive code if you don't want the slider scales while window resizing*/
		function ScaleSlider() {
			var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
			if (refSize) {
				refSize = Math.min(refSize, 600);
				jssor_1_slider.$ScaleWidth(refSize);
			} else {
				window.setTimeout(ScaleSlider, 30);
			}
		}

		ScaleSlider();
		$Jssor$.$AddEvent(window, "load", ScaleSlider);
		$Jssor$.$AddEvent(window, "resize", ScaleSlider);
		$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
		/*responsive code end*/
	}; 
</script>
<style>
	.jssora02l, .jssora02r {
		display: block;
		position: absolute;
		/* size of arrow element */
		width: 55px;
		height: 55px;
		cursor: pointer;
		background: url('img/a02.png') no-repeat;
		overflow: hidden;
	}
	.jssora02l {
		background-position: -3px -33px;
	}
	.jssora02r {
		background-position: -63px -33px;
	}
	.jssora02l:hover {
		background-position: -123px -33px;
	}
	.jssora02r:hover {
		background-position: -183px -33px;
	}
	.jssora02l.jssora02ldn {
		background-position: -3px -33px;
	}
	.jssora02r.jssora02rdn {
		background-position: -63px -33px;
	}
	.jssora02l.jssora02lds {
		background-position: -3px -33px;
		opacity: .3;
		pointer-events: none;
	}
	.jssora02r.jssora02rds {
		background-position: -63px -33px;
		opacity: .3;
		pointer-events: none;
	}
	/* jssor slider thumbnail navigator skin 03 css *//*.jssort03 .p            (normal).jssort03 .p:hover      (normal mouseover).jssort03 .pav          (active).jssort03 .pdn          (mousedown)*/
	.jssort03 .p {
		position: absolute;
		top: 0;
		left: 0;
		width: 62px;
		height: 32px;
	}
	.jssort03 .t {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		border: none;
	}
	.jssort03 .w, .jssort03 .pav:hover .w {
		position: absolute;
		width: 60px;
		height: 30px;
		border: white 1px dashed;
		box-sizing: content-box;
	}
	.jssort03 .pdn .w, .jssort03 .pav .w {
		border-style: solid;
	}
	.jssort03 .c {
		position: absolute;
		top: 0;
		left: 0;
		width: 62px;
		height: 32px;
		background-color: #000;
		filter: alpha(opacity=45);
		opacity: .45;
		transition: opacity .6s;
		-moz-transition: opacity .6s;
		-webkit-transition: opacity .6s;
		-o-transition: opacity .6s;
	}
	.jssort03 .p:hover .c, .jssort03 .pav .c {
		filter: alpha(opacity=0);
		opacity: 0;
	}
	.jssort03 .p:hover .c {
		transition: none;
		-moz-transition: none;
		-webkit-transition: none;
		-o-transition: none;
	}
	* html .jssort03 .w {
		width /**/: 62px;
		height /**/: 32px;
	}
</style>
<div class="row" style="margin: 60px 40px">
	<h5 style="margin-left: 30px;">Recipe Name</h5>
	<div class="col m6 s12">
		<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;float:left;margin-top:0px;">
			<!-- Loading Screen -->
			<div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
				<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				<div style="position:absolute;display:block;background:url('<?=base_url(); ?>assets/images/slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
			</div>
			<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden; align:left;">
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/andhrapradesh/boorelu.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/andhrapradesh/boorelu.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/andhrapradesh/gramdosa.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/andhrapradesh/gramdosa.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/andhrapradesh/jackfruit.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/andhrapradesh/jackfruit.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/andhrapradesh/muttonkabab.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/andhrapradesh/muttonkabab.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/andhrapradesh/veg-curry.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/andhrapradesh/veg-curry.jpg" />
				</div>
				<!--div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/slider/007.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/slider/thumb-007.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/008.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/img/008.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/009.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/009.jpg" />
				</div>
				<a data-u="any" href="http://www.jssor.com" style="display:none">Image Slider 2</a>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/010.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/010.jpg" />
				</div>
				<div>
					<img data-u="image" src="<?=base_url(); ?>assets/images/011.jpg" />
					<img data-u="thumb" src="<?=base_url(); ?>assets/images/thumb-011.jpg" />
				</div-->
			</div>
			<!-- Thumbnail Navigator -->
			<div data-u="thumbnavigator" class="jssort03" style="position:absolute;left:0px;bottom:0px;width:600px;height:60px;" data-autocenter="1">
				<div style="position:absolute;top:0;left:0;width:100%;height:100%;background-color:#000;filter:alpha(opacity=30.0);opacity:0.3;"></div>
				<!-- Thumbnail Item Skin Begin -->
				<div data-u="slides" style="cursor: default;">
					<div data-u="prototype" class="p">
						<div class="w">
							<div data-u="thumbnailtemplate" class="t"></div>
						</div>
						<div class="c"></div>
					</div>
				</div>
				<!-- Thumbnail Item Skin End -->
			</div>
		</div>
	</div>
	<div class="col m3 s12" style="height:150px;">
		<div class="card-panel grey lighten-2 black-text text-darken-1">
				<h6 style="font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;">MadeBy:somebody else</h6>
				<div class="row">
					<table>
					<tr>
						<td><h6 align="right"><i class="material-icons right">visibility</i>100</h6></td></tr>
					<!--h6 align="right"><i class="material-icons right">query_builder</i>1day ago</h6-->
					<tr>
						<td><h6 align="right"><i class="material-icons right">query_builder</i>2 days ago</h6></td></tr>
					</table>
				</div>
						</span>
		</div>
	</div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<div class="row" style="margin:40px 40px">
<div class="col m10 s12">
	<form>
		<div class="row">
			<div class="col s3">
				<label style="font-size: 16px; color: black;">Description</label>
			</div>
			<div class="input-field col s10">
				<textarea id="textarea1" class="materialize-textarea"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col s3">
				<label style="font-size: 16px; color: black;">Procedure</label>
			</div>
			<div class="input-field col s10">
				<textarea id="textarea1" class="materialize-textarea"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col s3">
				<label style="font-size: 16px; color: black;">Ingredients</label>
			</div>
			<div class="input-field col s10">
				<textarea id="textarea1" class="materialize-textarea"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col s3">
				<label style="font-size: 16px; color: black;">Nutritionalvalue</label>
			</div>
			<div class="input-field col s10">
				<textarea id="textarea1" class="materialize-textarea"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col s3">
				<label style="font-size: 16px; color: black;">AdditionalRequirements</label>
			</div>
			<div class="input-field col s10">
				<textarea id="textarea1" class="materialize-textarea"></textarea>
			</div>
		</div>
	</form>
	</div>
</div>
 <div class="row">
      <div class="col s12 m5">
        <div class="card-panel teal">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>
</div>	
		