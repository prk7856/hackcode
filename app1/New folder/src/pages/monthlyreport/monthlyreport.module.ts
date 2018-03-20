import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { MonthlyreportPage } from './monthlyreport';

@NgModule({
  declarations: [
    MonthlyreportPage,
  ],
  imports: [
    IonicPageModule.forChild(MonthlyreportPage),
  ],
})
export class MonthlyreportPageModule {}
