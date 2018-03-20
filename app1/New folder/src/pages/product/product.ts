import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import {MenuController} from 'ionic-angular'

@IonicPage()
@Component({
  selector: 'page-product',
  templateUrl: 'product.html',
})
export class ProductPage {

  constructor(public navCtrl: NavController, public navParams: NavParams,private menucntrl:MenuController) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad ProductPage');
  }
  onclickload()
  {
    this.menucntrl.open();
  }

}
