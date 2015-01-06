<?php namespace Shekhar\SoapEasy;

use Illuminate\Support\ServiceProvider;

class SoapEasy{
    
    /**
	 * Create random String
	 *
	 * @param  int  $length
	 * 
	 * @return string
	 */	 	 
	 public static function rand($length){
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			return substr(str_shuffle($chars),0,$length);
	   }
}
