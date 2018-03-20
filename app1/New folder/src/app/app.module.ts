import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';
import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';
import { EmployeePage} from '../pages/employee/employee';
import {ProductPage} from '../pages/product/product';
import { ProfilePage } from "../pages/profile/profile";
import { MonthlyreportPage } from "../pages/monthlyreport/monthlyreport";
import { DailyreportPage } from "../pages/dailyreport/dailyreport";
import { WeeklyreportPage } from "../pages/weeklyreport/weeklyreport";
import { PersonaldetailPage } from "../pages/personaldetail/personaldetail";
import { OrderplacePage } from "../pages/orderplace/orderplace";
import { TargetPage } from "../pages/target/target";
@NgModule({
  declarations: [
    MyApp,
    HomePage,
    EmployeePage,
    ProductPage,
    ProfilePage,
    DailyreportPage,
    WeeklyreportPage,
    MonthlyreportPage,
    PersonaldetailPage,
    OrderplacePage,
    TargetPage
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp)
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    EmployeePage,
    ProductPage,
    ProfilePage,
    DailyreportPage,
    WeeklyreportPage,
    MonthlyreportPage,
    PersonaldetailPage,
    OrderplacePage,
    TargetPage
 
  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}
