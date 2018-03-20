import { Component,ViewChild } from '@angular/core';
import { Platform ,NavController} from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { EmployeePage } from '../pages/employee/employee';
import { HomePage } from '../pages/home/home';
import {MenuController} from 'ionic-angular';
import { ProfilePage } from "../pages/profile/profile";
import { DailyreportPage } from "../pages/dailyreport/dailyreport";
import { WeeklyreportPage } from "../pages/weeklyreport/weeklyreport";
import { MonthlyreportPage } from "../pages/monthlyreport/monthlyreport";

@Component({
  templateUrl: 'app.html'
})
export class MyApp {

  rootPage: any = HomePage;
@ViewChild('content')content:NavController;
  constructor(platform: Platform, statusBar: StatusBar, splashScreen: SplashScreen,private menucntrl:MenuController) {
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
}

