<?php
class AudseeTime {

		public static function showDateTimePRC(){
				date_default_timezone_set('PRC');
				$mydt = new DateTime();
				echo $mydt->format('Y/m/d H:i:s');
		}
		public static function showUnixTimestamp(){
			
				$mydt = new DateTime();
				echo $mydt->format('U');
				//another method
				//echo '<br/>'. $mydt->getTimestamp();
		}
		
		public static function showMicroTimestamp(){
			
				$mydt = new DateTime();
				echo $mydt->format('u');
			
		}
		public static function showAudseeTimestamp(){
			
				$mydt = new DateTime();
			    $ats = (float)$mydt->format('U') + (float)($mydt->format('u')/1000000);
				//$ats = (double)$mydt->format('U') + (double)($mydt->format('u')/1000000);
				//echo $ats;
				printf("%.04f", $ats);
		}
		public static function showAudseeTimestamp2(){
			
				$mydt = new DateTime();
			    //$ats = (float)$mydt->format('U') + (float)($mydt->format('u')/1000000);
			    echo $mydt->format('U') .'.' .$mydt->format('u');
				
		}

	
};
