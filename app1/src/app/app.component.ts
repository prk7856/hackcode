import { Component,ViewChild } from '@angular/core';
import { Platform ,NavController, NavParams} from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { EmployeePage } from '../pages/employee/employee';
import { HomePage } from '../pages/home/home';
import {MenuController, App} from 'ionic-angular';
import { ProfilePage } from "../pages/profile/profile";
import { DailyreportPage } from "../pages/dailyreport/dailyreport";
import { WeeklyreportPage } from "../pages/weeklyreport/weeklyreport";
import { MonthlyreportPage } from "../pages/monthlyreport/monthlyreport";
import { OnInit } from '@angular/core/src/metadata/lifecycle_hooks';
import { AddcustPage } from '../pages/addcust/addcust';
import { LocationTracker } from '../providers/location-tracker/location-tracker';


@Component({
  templateUrl: 'app.html'
})
export class MyApp {
  
  
  rootPage: any = HomePage;
@ViewChild('content')content:NavController;
  constructor(platform: Platform, public app: App, public locationtracker:LocationTracker, public statusBar: StatusBar, private logoutCntrl: MenuController, splashScreen: SplashScreen, private menucntrl:MenuController) {
    platform.ready().then(() => {
      statusBar.styleDefault();
      splashScreen.hide();
    });
  }
  onload(page:any)
  {
      this.content.setRoot(page);
      this.menucntrl.close();
  }
  onload_profile()
  {
    this.content.push(ProfilePage);
    this.menucntrl.close();
  }
  onload_dailyR()
  {
    this.content.push(DailyreportPage);
    this.menucntrl.close(); 
  }
  onload_addcust()
  {
    this.content.push(AddcustPage);
    this.menucntrl.close(); 
  }
  onload_weeklyR()
  {
    this.content.push(WeeklyreportPage);
    this.menucntrl.close();  
  }
  onload_monthlyR()
  {
    this.content.push(MonthlyreportPage);
    this.menucntrl.close(); 
  }
  callLogout()
  {
    this.locationtracker.stopTracking();
    this.logoutCntrl.close();
    var nav = this.app.getRootNav();
    nav.setRoot(HomePage);
  }
}

