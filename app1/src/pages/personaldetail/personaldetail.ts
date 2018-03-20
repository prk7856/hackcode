import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

import { PopoverController } from 'ionic-angular';
import { ChangepasswordPage } from '../changepassword/changepassword';

@IonicPage()
@Component({
  selector: 'page-personaldetail',
  templateUrl: 'personaldetail.html',
})
export class PersonaldetailPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad PersonaldetailPage');
  }
  onclickload(){
    this.navCtrl.push(ChangepasswordPage);
  }
}
