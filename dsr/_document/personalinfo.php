
<style>
	textarea.test {
		max-height: 30px;
	}
	textarea.test1 {
		max-height: 60px;
	}
</style>
<body background="" style="background-size:100% " >
	<div class="container">
		<form  method="post" autocomplete="off" class="col s8">
			<div class="row" style="margin-left: 200px;">
				<div class="card col m9 s10">
					<center >
						<H4>Personal Information</H4>
						<H5 style="margin-left:50px">Please fill the information correctly .It helps for customer interaction.</H5>
					</center>
					<div class="row" style="margin-left: 30px;">
						<i class="small material-icons"style="float: left">person_pin</i>
						<div class="input-field col s9">
							<textarea id="fullName" name="fullName" class="materialize-textarea test"  data-length="80" style="resize: none;"></textarea>
							<label for="fullName">Fullname</label>
						</div>
					</div><!--fullname-->

					<div class="row" style="margin-left: 30px;">
						<i class="small material-icons"style="float: left">store</i>
						<div class="input-field col s9">
							<textarea id="address" class="materialize-textarea test1" name="address" DATA-LENGTH="80"></textarea>
							<label for="address">address</label>
						</div>
					</div>
					
					<div class="row" style="margin-left: 30px;">
						<i class="small material-icons"style="float: left">location_on</i>
						<div class="input-field col s9">
   						 	<select name="state">
								<option value="state" >state</option>
								<?php
									foreach ($indstate as $key => $value) {
										echo "<option value=\"$value\">$value</option>";	
									}
								?>
							</select>
						</div>
					</div>
					
					<div class="row" style="margin-left: 30px;">
						<i class="small material-icons"style="float: left">work</i>
						<div class="input-field col s9">
							<textarea id="designation" name="designation" class="materialize-textarea test"  data-length="120"></textarea>
							<label for="designation">Designation</label>
						</div>
					</div>
					<div class="row" style="margin-left: 30px;">
						<i class="small material-icons"style="float: left">info</i>
						<div class="input-field col s9">
							<textarea id="moreinfo" name="moreinfo" class="materialize-textarea test1" DATA-LENGTH="120"></textarea>
							<label for="moreinfo">MoreInfo</label>
						</div>
					</div>
					<input type="submit" class="btn " style="margin-left: 250px;margin-bottom:20px;">
					</input>
				</div>
		</form>
	</div>
	</div><!--container divison-->
</body>
