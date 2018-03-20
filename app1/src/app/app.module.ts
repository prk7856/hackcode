import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';
import { MyApp } from './app.component';
import { LoginProvider } from '../providers/login/login';
//import { IonicStorageModule } from '@ionic/storage';

import { HomePage } from '../pages/home/home';
import { EmployeePage} from '../pages/employee/employee';
import {ProductPage} from '../pages/product/product';
import { BackgroundGeolocation } from '@ionic-native/background-geolocation';

import { Geolocation } from '@ionic-native/geolocation';
import { ProfilePage } from "../pages/profile/profile";
import { MonthlyreportPage } from "../pages/monthlyreport/monthlyreport";
import { DailyreportPage } from "../pages/dailyreport/dailyreport";
import { WeeklyreportPage } from "../pages/weeklyreport/weeklyreport";
import { PersonaldetailPage } from "../pages/personaldetail/personaldetail";
import { OrderplacePage } from "../pages/orderplace/orderplace";
import { TargetPage } from "../pages/target/target";
import { HttpModule } from '@angular/http';
import { AddcustPage } from '../pages/addcust/addcust';
import { ChangepasswordPage } from '../pages/changepassword/changepassword';
import { CustomerDetailsPage } from '../pages/customer-details/customer-details';
import { LocationTracker } from '../providers/location-tracker/location-tracker';
import { GoogleMapsProvider } from '../providers/google-maps/google-maps';
import { ConnectivityProvider } from '../providers/connectivity/connectivity';
import { GoogleMapsClusterProvider } from '../providers/google-maps-cluster/google-maps-cluster';
@NgModule({
  declarations: [
    MyApp,
    HomePage,
    EmployeePage,
    
    ProductPage,
    ProfilePage,
    AddcustPage,
    DailyreportPage,
    WeeklyreportPage,
    MonthlyreportPage,
    PersonaldetailPage,
    OrderplacePage,
    TargetPage,
    ChangepasswordPage,
    CustomerDetailsPage
  ],
  imports: [
    BrowserModule,
    HttpModule,
    //IonicStorageModule.forRoot(),
      IonicModule.forRoot(MyApp)
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    EmployeePage,
    ProductPage,
    ProfilePage,
    AddcustPage,
    DailyreportPage,
    WeeklyreportPage,
    MonthlyreportPage,
    PersonaldetailPage,
    OrderplacePage,
    TargetPage,
    ChangepasswordPage,
    CustomerDetailsPage
  ],
  providers: [
    StatusBar,
    Geolocation,
    BackgroundGeolocation,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler},
    LoginProvider,
    LocationTracker,
    GoogleMapsProvider,
    ConnectivityProvider,
    GoogleMapsClusterProvider
  ]
})
export class AppModule {}
