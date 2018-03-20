import { Injectable, NgZone } from '@angular/core';
import { BackgroundGeolocation } from '@ionic-native/background-geolocation';
import { Geolocation, Geoposition } from '@ionic-native/geolocation';
import 'rxjs/add/operator/filter';
import { Http } from '@angular/http';
 
@Injectable()
export class LocationTracker {
 
 // backgroundGeolocation: any;
  public watch: any;   
  public lat: number = 0;
  public lng: number = 0;
 
  constructor(public zone: NgZone, public http:Http, public backgroundGeolocation:BackgroundGeolocation, public geolocation:Geolocation) {
 
    }
 
    startTracking() {
 
      let config = {
        desiredAccuracy: 0,
        stationaryRadius: 20,
        distanceFilter: 10,
        debug: true,
        interval: 100
      };  
      this.backgroundGeolocation.configure(config).subscribe((location) => {
      console.log('BackgroundGeolocation:  ' + location.latitude + ',' + location.longitude);
        this.zone.run(() => {
          this.lat = location.latitude;
          this.lng = location.longitude;
        });
   
      }, (err) => {
        console.log(err);
      });
      this.backgroundGeolocation.start();
      let options = {
        frequency: 3000,
        enableHighAccuracy: true
      };
      this.watch = this.geolocation.watchPosition(options).filter((p: any) => p.code === undefined).subscribe((position: Geoposition) => {
        console.log(position);
   
    // Run update inside of Angular's zone
        this.zone.run(() => {
          this.lat = position.coords.latitude;
          this.lng = position.coords.longitude;
        
      
        let param = JSON.stringify({ latitude:this.lat, longitude:this.lng});
        console.log(param);
        this.http.post("http://localhost/dsr/app_api/loginLocation", param, "Content-Type:application/json")
          .subscribe(data => {
            let data1 = JSON.stringify(data.json().status);
            let data3 = JSON.stringify(data.json().data);
               if(data1 =='1'){
                console.log("data1  ",data3);
                }
                else{
                console.log("inside else " + data3);
                }
        });
      });
      });
    }
  stopTracking(){
 
    console.log('stopTracking');
 
    this.backgroundGeolocation.finish();
     this.watch.unsubscribe();
 
  }
}