import { Component, OnInit } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import {MenuController} from 'ionic-angular';
//import { Storage } from '@ionic/storage';

import {ProductPage} from '../product/product';
import { CustomerDetailsPage } from '../customer-details/customer-details';
@IonicPage()
@Component({
  selector: 'page-employee',
  templateUrl: 'employee.html',
})
export class EmployeePage {
  name: any;
  productpage=ProductPage;
  constructor(public navCtrl: NavController,  public navParams: NavParams,private menucntrl:MenuController) {

  }
  
  ionViewDidLoad() {
    console.log('ionViewDidLoad EmployeePage');
  }
  onclickload()
  {
 //   let eid= this.storage.get('id');
     this.menucntrl.open();
  }
  GoToProduct()
  {
    this.navCtrl.push(ProductPage);
  }
  gotodetail_page(){
    this.navCtrl.push(CustomerDetailsPage);
  }
}
