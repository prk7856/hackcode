import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
@IonicPage()
@Component({
  selector: 'page-customer-details',
  templateUrl: 'customer-details.html',
})
export class CustomerDetailsPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad CustomerDetailsPage');
  }
  onSeeMore(){
    console.log("clicked");
  }

}
