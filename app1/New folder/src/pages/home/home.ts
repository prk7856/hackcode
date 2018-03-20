import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { EmployeePage} from '../employee/employee'
@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  constructor(public navCtrl: NavController) {

  }
  login()
  {
    this.navCtrl.push(EmployeePage);
  }

}
