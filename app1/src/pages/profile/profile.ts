import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { PersonaldetailPage } from "../personaldetail/personaldetail";
import { OrderplacePage } from "../orderplace/orderplace";
import { TargetPage } from "../target/target";


@IonicPage()
@Component({
  selector: 'page-profile',
  templateUrl: 'profile.html',
})
export class ProfilePage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad ProfilePage');
  }
  onPersonalDetails()
  {
    
      this.navCtrl.push(PersonaldetailPage);
  }
  onOrderPlaced()
  {
    this.navCtrl.push(OrderplacePage);
  }
  onTarget()
  {
    this.navCtrl.push(TargetPage);
  }
}
