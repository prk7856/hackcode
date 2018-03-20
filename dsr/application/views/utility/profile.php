<?php
  /*********************************************************
  * Author: Akshata Shah
  * Date: 20 Oct 2017
  * Discription: profile page of each employee
  *********************************************************/
?>
    <div class="row">
    <div class="col s12 m9 offset-m3">
        <div class="col s12 m6">
                <!--Team Assignment-->
            <div class="row">
                <div class="card " style="height:190px">
                    <div class="card-action teal white-text" style="padding:5px; Font-size:20px; font-family:calibri">
                            <i class="material-icons small black-text left">supervisor_account</i>Team Assignment
                            <a class="waves-effect waves-light modal-trigger right" href="#team_assignment"><i class="material-icons small black-text right">edit</i></a>
                    </div>
                    <table class="striped">
                            <tr><td>1</td><td>abc abc</td><td>team leader</td></tr>
                            <tr><td>1</td><td>abc abc</td><td>team leader</td></tr>
                            <tr><td>1</td><td>abc abc</td><td>team leader</td></tr>
                    </table>
                </div>
            </div>

                <!--Popup for team Assignment-->
            <div id="team_assignment" class="modal modal-fixed-footer">
                <form>
                    <div class="modal-content">
                        <h4>Team Assignment</h4>
                        <div class="col s12">
                            <div class="input-field col s6">
                                <input id="Member_name" type="text" class="validate" name="fullname">
                                <label for="Member_name">Member Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="post" type="text" class="validate">
                                <label for="post">Post</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                             <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Update</a>
                             <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
                    </div>
                </form>
            </div>

                <!--Basic Information-->
            <div class="row">
                <div class="card" style="height:280px;">
                    <div class="card-action teal white-text" style="padding:5px; Font-size:20px; font-family:calibri">Basic Information
                            <a class="waves-effect waves-light modal-trigger right " href="#basic_info"><i class="material-icons small black-text right">edit</i></a>
                    </div>
                    <table class="striped">
                        <tr><td>Name</td><td><?=$empdata->fullname;?></td></tr>
                        <tr><td>Address</td><td><?=$empdata->address;?></td></tr>
                        <tr><td>Mobile No.</td><td><?=$empdata->mobileNumber;?></td></tr>
                        <tr><td>Post</td><td><?=$empdata->post;?></td></tr>
                        <tr><td>Status</td><td><?=$empdata->status;?></td></tr>
                    </table>
                </div>
            </div>

                <!--Popup for Basic Information-->
            <div id="basic_info" class="modal modal-fixed-footer">
                <form autocomplete="off" action="<?=base_url()."home/basicInformation";?>" method="post">
                    <div class="modal-content">
                        <h4>Basic Information</h4>
                        <div class="col s12">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="first_name" type="text" class="validate" name=fullname>
                                <label for="first_name">Fullame</label>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix"></i>
                            <input id="address" type="text" class="validate"name="address">
                            <label for="address">Address</label>
                        </div>            
                        <div class="col s12">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input id="mobile_no" type="tel" class="validate" name="mobileNumber">
                                <label for="mobile_no">Mobile number</label>
                            </div>
                            <div class="input-field inline col s6">
                                <input id="email" type="email" class="validate" name="emailId">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>    
                        </div>
                        <div class="col s12">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="post" type="text" class="validate" name="post">
                                <label for="post">Post</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="status" type="text" class="validate" name="status">
                                <label for="Status">Status</label>
                            </div>
                        </div>         
                    </div>
                    <div class="modal-footer">
                             <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Modify</a>
                             <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
                    </div>
                    </form> 
                </div>
                <!--End of Pop-up-->
            </div>
            <div class="col s12 m6">
                <form>
                    <div class="card">
                        <div class="row teal white-text" style="padding:5px;margin:0;font-size:20px;font-family:calibri">Activity Log </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input id="search" type="text" class="validate">
                                <label for="search">Search</label>

                                 <label class="bold"><a href=" <?=base_url()."home/location"?>" class="collapsible-header  waves-effect  white-text waves-teal"><i class="material-icons small white-text">location_on</i>Location Track</a></li>
            </label>
           

                            </div><br><br><br>
                            <div class="card">
                                <div class="card-content black-text">
                                    <span class="card-title">Status Date:...</span>
                                    <table class="striped">
                                            <tr><td><?=$this->cdate->mydate_time($user_data->updatedOn); ?> </td><td>login</td></tr>
                                            <tr><td>11:00 AM</td><td>Add new Customer</td></tr>
                                            <tr><td>11:30 AM</td><td>Log out</td></tr>
                                    </table>
                                </div>
                            </div>    
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!--end of right column-->