<?php
	class Mobilemessage 
	{		
		public $apikey 		= "7d1798c517XX";
		public $apiuser 	= "demo12";
		public $apiuserid 	= "ALERTT";
		public $smsfooter 	= "\n- ghiza.in | search.cook.eat";
		
		public function send_sms($content,$receiver)
		{
			$msg = $content.$this->smsfooter;
			
			$msg = urlencode($msg);
			$mobile = $receiver;
			
			$url = "http://trans1.sreyah.co.in/submitsms.jsp?user=$this->apiuser&key=$this->apikey&mobile=$mobile&message=$msg&senderid=$this->apiuserid&accusage=1";
			return $homepage = file_get_contents($url);
		}

		public function remsms()
		{
			$url = "http://trans1.sreyah.co.in/getbalance.jsp?user=$this->apiuser&key=$this->apikey&accusage=1";		
			$msgbal = file_get_contents($url);
			return $msgbal;
		}
		
		// TEXT NOTIFICATION SENT
		public function text_notification($message,$mobiles)
		{
			$msg = $message.$this->smsfooter;
			$msg = urlencode($msg);
			$mobile = implode(",",$mobiles);
			
			$url 	  = "http://trans1.sreyah.co.in/submitsms.jsp?user=$this->apiuser&key=$this->apikey&mobile=$mobile&message=$msg&senderid=$this->apiuserid&accusage=1";
			$homepage = file_get_contents($url);
			return true;
		}
		
		public function pass_sent($data) 
		{
		    $message = "Hello $data[fullname], \n\nLogin Details: \nusername: $data[username] \npassword: $data[password] \n";
			$msg 	 = $message.$this->smsfooter;
			
			$msg 	= urlencode($msg);
			$mobile = $data['mobile'];
			
			$url = "http://trans1.sreyah.co.in/submitsms.jsp?user=$this->apiuser&key=$this->apikey&mobile=$mobile&message=$msg&senderid=$this->apiuserid&accusage=1";
			return $homepage = file_get_contents($url);
		}
	}		