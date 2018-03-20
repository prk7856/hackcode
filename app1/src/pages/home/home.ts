import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { EmployeePage} from '../employee/employee'
import { LoginProvider } from '../../providers/login/login';
import {Geolocation} from '@ionic-native/geolocation';
//import { Storage } from '@ionic/storage';
import { LocationTracker } from '../../providers/location-tracker/location-tracker';

import { Injectable } from '@angular/core';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/toPromise';

import {Http, Headers } from '@angular/http';
import { MyApp } from '../../app/app.component';
import { isString } from 'ionic-angular/util/util';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
  constructor(public http:Http, public navCtrl: NavController, public locationtracking:LocationTracker, public logindata: LoginProvider, private geolocation: Geolocation) {
  
  }
  callPostService(username, passwd)
  {
    
    console.log(" username = " + username + " password = " + passwd);
    let param = JSON.stringify({ username: username, passwd: passwd });
    this.http.post("http://localhost/dsr/app_api/loginUser", param, "Content-Type:application/json")
    .subscribe(data => {
      let data1 = JSON.stringify(data.json().status);
           if(data1 =='1'){
            this.locationtracking.startTracking();
            let data2 = {id:data.json().profile.id, emailId:data.json().profile.emailId, mobileNumber:data.json().profile.mobileNumber}
        
            console.log("data2  ",data2.id);
            
            this.navCtrl.push(EmployeePage);
           }
           else{
            console.log("inside else " + data1);

     this.navCtrl.push(HomePage);
   }
   })    
  }       
}
