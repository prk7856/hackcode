import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { DailyreportPage } from './dailyreport';

@NgModule({
  declarations: [
    DailyreportPage,
  ],
  imports: [
    IonicPageModule.forChild(DailyreportPage),
  ],
})
export class DailyreportPageModule {}
