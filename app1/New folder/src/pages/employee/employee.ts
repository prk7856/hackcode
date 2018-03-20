import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import {MenuController} from 'ionic-angular';
import {ProductPage} from '../product/product';
@IonicPage()
@Component({
  selector: 'page-employee',
  templateUrl: 'employee.html',
})
export class EmployeePage {
  productpage=ProductPage;
  constructor(public navCtrl: NavController, public navParams: NavParams,private menucntrl:MenuController) {

  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad EmployeePage');
  }
  onclickload()
  {
    this.menucntrl.open();
  }
  GoToProduct()
  {
    this.navCtrl.push(ProductPage);
  }
}
