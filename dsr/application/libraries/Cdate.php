<?php 
	class Cdate
	{
		public function __construct()
		{
			$timezone = "Asia/Calcutta";
			date_default_timezone_set($timezone);
		}
		
		/*********** GMT Date Time **********/
		public function gmtdatetime()
		{
			$gmttime = date("H:i:s"); 					// Indian time
			return $gmtdatetime = date("Y-m-d H:i:s"); // Indian time zone date and time
		}
		
		/*********** GMT Date **********/
		public function gmtdate()
		{
			return $gmtdate = date("Y-m-d"); 			// Indian time zone date
		}
		
		/*********** GMT Date **********/
		public function gmtmothyear()
		{
			return $gmtdate = date("Y-m"); 			// Indian time zone date
		}
		
		/*********** GMT Time **********/
		public function gmttime()
		{
			return $gmttime = date("H:i:s"); // Indian time
		}
		
		/*********** 29 April 2013 **********/
		public function mydate($udate)  
		{
			$pdate = strtotime($udate);
			$today = date("d F Y ",$pdate);
			return $today;
		}
		
		/*************** Absolute Time *********************/
		public function abstime($udate) 
		{
			$gmtdatetime = date("Y-m-d H:i:s");
			$todaytime = strtotime($gmtdatetime);
			
			$pdate = strtotime($udate);
			$diff = $todaytime - $pdate;
			
			if ($diff < 60) 
			{
				return "$diff sec";
			} elseif($diff < 3600) {
				$diff = intval($diff/60);
				return "$diff min";
			} elseif ($diff < 86400) {
				$diff = intval($diff/3600);
				return "$diff hrs";
			} elseif($diff < 2592000) {
				$diff = intval($diff/86400);
				return "$diff days";
			} elseif ($diff < 31104000) {
				$diff = intval($diff/2592000);
				return "$diff months";
			} else {
				$today = date("d M Y , h:i a",$pdate);
				return $today;
			}
		}
		
		public function validateDate($date)
		{
		    $d = DateTime::createFromFormat('Y-m-d', $date);
		    return $d && $d->format('Y-m-d') === $date;
		}
		
 		/*************  29 Apr 2013  *******************/
		public function mydate2($udate)
		{
			$pdate = strtotime($udate);
			$today = date("d M Y ",$pdate);
			return $today;
		}
		
		/**************** 29 Apr 13 **********************/
		public function mydateYearShort($udate)
		{
			$pdate = strtotime($udate);
			$today = date("d M y ",$pdate);
			return $today;
		}
		
		/************* 29 April 2013 , 01:13 am  *****************/
		public function mydatetime($udate)
		{
			$pdate = strtotime($udate);
			$today = date("d F Y , h:i a",$pdate);
			return $today;
		}
		
		/***************** 29 Apr 2013 , 01:13 am  *****************/
		public function mydatetime_short($udate)
		{
			$pdate = strtotime($udate);
			$today = date("d M Y , h:i a",$pdate);
			return $today;
		}
		
		/*************** Apr 29 , 01:13 am  ******************/
		public function shortdatetime($udate) 
		{
			$pdate = strtotime($udate);
			$today = date("M d , h:i a",$pdate);
			return $today;
		}
		
		/************** 29 April 2013 , 13:13 ***********/
		public function mydatetime2($udate)
		{
			$pdate = strtotime($udate);
			$today = date("d F Y , G:i a",$pdate);
			return $today;
		}
		
		/************** Apr 29 ****************/
		public function mydate_md($udate)
		{
			$pdate = strtotime($udate);
			$today = date("M d ",$pdate);
			return $today;
		}
		
		/************ April 29 *****************/
		public function mydate_md2($udate)
		{
			$pdate = strtotime($udate);
			$today = date("F d ",$pdate);
			return $today;
		}
		
		/************* Apr **************/
		public function mydate_month($udate)
		{
			$pdate = strtotime($udate);
			$today = date("M",$pdate);
			return $today;
		}
		
		/*********** 4 (Month) ***************/
		public function mydate_month2($udate)
		{
			$pdate = strtotime($udate);
			$today = date("m",$pdate);
			return $today;
		}
		
		/********** April **************/
		public function mydate_monthf($udate)
		{
			$pdate = strtotime($udate);
			$today = date("F",$pdate);
			return $today;
		}
		
		/************** Apr 2013 ********************/
		public function yearmonth($udate)
		{
			$pdate = strtotime($udate);
			$today = date("M Y",$pdate);
			return $today;
		}
		
		/************** April 2013 ********************/
		public function yearmonthfull($udate)
		{
			$pdate = strtotime($udate);
			$today = date("F, Y",$pdate);
			return $today;
		}
		
		/************** 29 (day) ************/
		public function mydate_day($udate)
		{
			$pdate = strtotime($udate);
			$today = date("d",$pdate);
			return $today;
		}
		
		/********** 2013 (Year) ************/
		public function mydate_year($udate)
		{
			$pdate = strtotime($udate);
			$today = date("Y",$pdate);
			return $today;
		}
		
		/********** 13 (Year) ************/
		public function mydate_year2($udate)
		{
			$pdate = strtotime($udate);
			$today = date("y",$pdate);
			return $today;
		}
		
		/********** 01:23 am ************/
		public function mydate_time($udate) 
		{
			$pdate = strtotime($udate);
			$today = date("h:i a",$pdate);
			return $today;
		}
		
		/************** 13:23 *****************/
		public function mydate_time2($udate)
		{
			$pdate = strtotime($udate);
			$today = date("G:i",$pdate);
			return $today;
		}
		
		public function days_in_period($enddate,$startdate='')
		{
			if(empty($startdate)) {
				$startdate = $this->gmtdate();	
			}
			
			$starttime = strtotime($startdate);
			$endtime   = strtotime($enddate);
			
			return $days_between = ceil(abs($endtime - $starttime) / 86400);	
		}
		
		/************** Get motnth list text ***************/
		public function montharr()
		{
			return $montharr = array("Month","January","February","March","April","May","June","July","August","September","October","November","December");
		}
		
		// GET LST SIX MONTH 
		public function getlast_six_month()
		{
			$first  = strtotime('first day this month');
			$months = array();
			
			for ($i = 6; $i >= 1; $i--) {
			  array_push($months, date('Y-m', strtotime("-$i month", $first)));
			}
			
			return $months;
		}
		
		public function number_to_word($num)
		{
			$num	= (string) ((int)$num);
		
			if((int) ($num) && ctype_digit($num))
			{
				$words	= array( );
				$num = str_replace( array( ',' , ' ' ) , '' , trim( $num ) );
			
				$list1	= array('','one','two','three','four','five','six','seven',
								'eight','nine','ten','eleven','twelve','thirteen','fourteen',
								'fifteen','sixteen','seventeen','eighteen','nineteen');
			
				$list2	= array('','ten','twenty','thirty','forty','fifty','sixty','seventy','eighty','ninety','hundred');
			
				$list3	= array('','thousand','million','billion','trillion', 'quadrillion','quintillion','sextillion','septillion',
								'octillion','nonillion','decillion','undecillion','duodecillion','tredecillion','quattuordecillion',
								'quindecillion','sexdecillion','septendecillion','octodecillion','novemdecillion','vigintillion');
			
				$num_length	= strlen( $num );
				$levels	= ( int ) ( ( $num_length + 2 ) / 3 );
				$max_length	= $levels * 3;
				$num	= substr( '00'.$num , -$max_length );
				$num_levels	= str_split( $num , 3 );
			
				foreach( $num_levels as $num_part )
				{
					$levels--;
					$hundreds	= ( int ) ( $num_part / 100 );
					$hundreds	= ( $hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '' );
					$tens		= ( int ) ( $num_part % 100 );
					$singles	= '';
					
					if( $tens < 20 )
					{
						$tens	= ( $tens ? ' ' . $list1[$tens] . ' ' : '' );
					} else {
						
						$tens	= ( int ) ( $tens / 10 );
						$tens	= ' ' . $list2[$tens] . ' ';
						$singles	= ( int ) ( $num_part % 10 );
						$singles	= ' ' . $list1[$singles] . ' ';
					}
					
					$words[]	= $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_part ) ) ? ' ' . $list3[$levels] . ' ' : '' );
				}
			
				$commas	= count( $words );
			
				if($commas > 1)
				{
					$commas	= $commas - 1;
				}
			
				$words	= implode( ', ' , $words );
			
				$words	= trim(str_replace(',' ,',' ,trim(ucwords($words))) , ',');
				if($commas)
				{
					$words = str_replace(',', ' and' , $words);
				}
			
				return $words;
				
			} else if(!((int) $num)) {
				return 'Zero';
			}
				return '';
		}
		
		public function date_range($first, $last, $step = '+1 day', $output_format = 'Y-m-d') 
		{
		    $dates = array();
		    $current = strtotime($first);
		    $last = strtotime($last);
		
		    while($current <= $last) {
		
		        $dates[] = date($output_format, $current);
		        $current = strtotime($step, $current);
		    }
		    return $dates;
		}
		
		public function get_days_between($startfrom,$enddate)
		{
			$startfrom = new DateTime($startfrom);
			$enddate   = new DateTime($enddate);

			return $diff = $enddate->diff($startfrom)->format("%a");
		}
		
		// NAME VALIDATE
		public function valName($name) 
		{
			$name = preg_replace('/[\s]+/is', ' ', $name);
		    $name = trim($name);
		    return preg_match('/^[a-z\s]+$/i', $name);            
		}
		
		// MOBILE VALIDATE
		public function isMobile($mobile)
		{
		  	return preg_match('/^[9|8|7]\d{9}$/', $mobile) ? TRUE : FALSE;
		}
		
		// CHECK AND CREATE PATH FOLDER 
		public function mkpathdir($path)
		{
			$checkpath = explode("/", $path);
			$basepath = "./";
			foreach ($checkpath as $key => $value) 
			{
			    $basepath = $basepath.$value."/";
				if(!file_exists($basepath)) {
			 		mkdir($basepath,0777,true);		
				}
			}
		}
		
		// REMOVE DIRECTORY
		public function rrmdir($dir) 
		{ 
			if (is_dir($dir)) 
			{ 
		     	$objects = scandir($dir); 
		     	foreach ($objects as $object) 
		     	{ 
		       		if ($object != "." && $object != "..") 
		       		{ 
		         		if (filetype($dir."/".$object) == "dir") {
				 	 		rrmdir($dir."/".$object);
				 		} else {
				 	 		unlink($dir."/".$object);
				 		} 
		       		} 
		     	}
				 
		     	reset($objects); 
		     	rmdir($dir); 
		   	} 
		   	return 1;
		}
	}