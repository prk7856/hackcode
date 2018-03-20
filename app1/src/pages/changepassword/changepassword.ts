import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { PersonalDetailsPage } from '../personal-details/personal-details';
@IonicPage()
@Component({
  selector: 'page-changepassword',
  templateUrl: 'changepassword.html',
})
export class ChangepasswordPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }
  onSubmit()
  {
      this.navCtrl.popTo(PersonalDetailsPage);
  }
  onCancel()
  {
    console.log('cancelled');
  }


  ionViewDidLoad() {
    console.log('ionViewDidLoad ChangepasswordPage');
  }

}
