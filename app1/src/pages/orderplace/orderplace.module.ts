import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { OrderplacePage } from './orderplace';

@NgModule({
  declarations: [
    OrderplacePage,
  ],
  imports: [
    IonicPageModule.forChild(OrderplacePage),
  ],
})
export class OrderplacePageModule {}
