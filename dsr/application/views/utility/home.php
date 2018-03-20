 <!-- HEADER PART END -->
      <!-- NEVIGATION BAR -->
      
      <!--div class="row">
        <div class="col s12 m3">
          <div class="card-panel" style="height:cover; background-color:#00aced;">
            <span class="black-text">
            <a href="#"><img src=<?=base_url()."assets/images/person.png"?> class="a" style="height:100px;"></img>&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="#!"style="font-size:16px;font-family:Vardana;color:black"><?=$this->session->userdata('fullname'); ?></a><br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="#!"style="font-size:16px;font-family:vardana;color:black">XYZ@gmail.com</a><br/>
            <h6 style="font-size: 16px !important;">Last login: <?=$user_data->updatedOn;?></h6>
            <div class="divider"></div> 
            <ul class="collapsible collapsible-accordion">
              <li>
                  <div class="collapsible-header blue "><i class="material-icons brown-text">description</i>Report<i class=" material-icons right">expand_more</i></div>
                  <div class="collapsible-body">
                  <p><i class="material-icons small grey-text">event_note</i>&nbsp<a href="#!" style="font-size:16px;font-family:vardana;color:black;">Daily Sales Report</a></p>                  
                  <p><i class="material-icons small grey-text">assignment</i>&nbsp<a href="#!" style="font-size:16px;font-family:vardana;color:black">Weekly Report</a></p>
                  <p><i class="material-icons small grey-text">assessment</i>&nbsp<a href="#!" style="font-size:16px;font-family:vardana;color:black">Monthly Report</a></p>
                  </p><i class="material-icons small grey-text">description</i>&nbsp<a href="#!" style="font-size:16px;font-family:vardana;color:black">Annual Report</a></p></div>
              </li>
              <li>
                 <div class="collapsible-header blue darken-4 " style="background-color:"#00aced"><i class="material-icons brown-text">people</i>Employee<i class=" material-icons right">expand_more</i></div>
                 <div class="collapsible-body">
                 <p><i class="material-icons small grey-text">add_circle</i>&nbsp<a href="#add_employee" style="font-size:16px;font-family:vardana;color:black">Add Employee</a></p>
                 <p><i class="material-icons small grey-text">group</i>&nbsp<a href="<?= base_url()."home/employee"?>" style="font-size:16px;font-family:vardana;color:black;">View Employee Record</a></p>
              </li>
              <li>
                  <div class="collapsible-header blue "><i class="material-icons small brown-text">assignment</i><a href="#!" style="font-size:16px;font-family:vardana;color:black">Target Achieved</a></div>
              </li>
            </ul>
            </span>
          </div>
        </div><br/><br/>  
          <!-- End of navigation bar  -->     
          <!--Popup for add employee-->
          <!--div id="add_employee" class="modal modal-fixed-footer">
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