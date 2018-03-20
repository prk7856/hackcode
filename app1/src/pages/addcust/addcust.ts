import { Component } from '@angular/core';
import { IonicPage, NavParams,MenuController, AlertController } from 'ionic-angular';
import { LoginProvider } from '../../providers/login/login';
import {Geolocation} from '@ionic-native/geolocation';
import { Injectable } from '@angular/core';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/toPromise';
import { Http, Headers } from '@angular/http';
import { NavController } from 'ionic-angular';
import { EmployeePage } from '../employee/employee';

@IonicPage()
@Component({
  selector: 'page-addcust',
  templateUrl: 'addcust.html',
})
export class AddcustPage {
  registerCredentials = { shopname: '', fullname: '', mobileNumber:'', address:''};

  constructor(public http:Http, public geolocation: Geolocation, public menuCtrl: MenuController, public navParams: NavParams,  public navCtrl: NavController) {
  }
  openMenu() {
    this.menuCtrl.open();
  }
  public register() {
      console.log("rcieved =" + JSON.stringify(this.registerCredentials));
        //location
            this.geolocation.getCurrentPosition()
            .then(
                (location) =>
                {
                  console.log("fetch location successfully")
                  let param = JSON.stringify({para:this.registerCredentials, currentLon: location.coords.latitude, currentLat: location.coords.longitude });
                  console.log(param)
                  this.http.post("http://localhost/dsr/app_api/addUser", param, "Content-Type:application/json")
                    .subscribe(data => {
                      console.log(data);
                      let data1 = JSON.stringify(data.json().status);
                      if (data1 == '1') {
                        console.log("inside if of register " + data1);
                        this.navCtrl.push(EmployeePage, { username:data1});
                      }
                      
                    });
                }
            )
            .catch(
              (error) => console.log("not get location")
            );
            //location
         
        }

}






