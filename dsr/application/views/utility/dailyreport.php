<?php 
/*********************************************************
  * Author: Shagufta Siddiqui
  * Date: 28 Oct 2017
  * Discription: profile page of each employee
  *********************************************************/
?>
  <div class="col m9 " style="padding-left:23%; padding-right:1%">
  <div class="card">
  <div class="card-title-custom" style="padding:10px; font-size:18x;font-family:verdana;color:orange;"><i class="material-icons left black-text">assignment</i> Daily Report</div>
  <table class="responsive-table centered bordered striped">
        <thead style="font-family:times new roman;">
          <tr>
              <th>Employee Name</th>
              <th>status</th>
              <th>Productive call</th>
              <th>Target value</th>
              <th>Achieved value</th>
              <th>% Achieved</th>

          </tr>
        </thead>

        <tbody>
        <?php
				/*foreach ($employee_list as $key => $value) 
				{
			?>
        <tr class="clickable-row" data-href="<?=base_url()."home/profile/$value->id"?>">
            <td class="custom-table-border-body"><?=$value->fullname;?></td>
            <td class="custom-table-border-body"><?=$value->status;?></td>
            <td class="custom-table-border-body"><?=$value->id;?></td>
            <td class="custom-table-border-body">10000.00</td>
            <td class="custom-table-border-body">4000.00</td>
            <td class="custom-table-border-body"> 40%</td>
          </tr>
          <?php
          }
          */?>
        </tbody>
      </table>
      </div>
    </div>
    </div>
  <div class="row">
  </div>