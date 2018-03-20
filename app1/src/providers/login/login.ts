import { Http } from '@angular/http';
import { Injectable } from '@angular/core';
import { Headers } from '@angular/http';

import 'rxjs/add/operator/map';
import 'rxjs/add/operator/toPromise';

@Injectable()
export class LoginProvider {

  constructor(public http: Http) {
    console.log('Hello LoginProvider Provider');
  }

  callput(username, passwd):void
  {
    console.log(" username = " + username + " password = " + passwd);
    let headers = new Headers();
    headers.append('Content-type','application/json');
    let param = JSON.stringify({ username: username, passwd: passwd });
    let url = "http://localhost/dsr/home/addUser";  
    this.http.post(url, param, {headers:headers});
    console.log(headers);
  }
}


/*
import { Http} from '@angular/http';
import { Injectable } from '@angular/core';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/toPromise';
import { Headers } from '@angular/http';
//import { NavController } from 'ionic-angular';

@Injectable()
export class LoginProvider {

  constructor(public http: Http ) {
    console.log('Hello LoginProvider Provider');
  }
  callput(username, passwd):void
  {
    console.log(" username = " + username + " password = " + passwd);
    let headers = new Headers();
    headers.append('Content-type','application/json');
    let param = JSON.stringify({ username: username, passwd: passwd });
    let url = "http://localhost/dsr/home/addUser";  
    this.http.post(url, param, {headers:headers});
    console.log(headers);
  }
  /*callput(username, passwd): Promise<any> {

    console.log(" username = " + username + " password = " + passwd);
    let param = {username:username, passwd:passwd};
    let url = "http://localhost:8100";
    let request = this.http.put(url,param);
    return request.toPromise();
  
  this.http.get('http://ionic.io', {}, {})
  .then(data => {

    console.log(data.status);
    console.log(data.data); // data received by server
    console.log(data.headers);

  })
  .catch(error => {

    console.log(error.status);
    console.log(error.error); // error message as string
    console.log(error.headers);

  });
  
  
  }*/
//}