<?php

namespace Limakpol\Fajno;

class Greetings
{

	/**
	 * @param $yourName
	 * @return string
	 */
	public function hello($yourName = 'Bruno'){
   	        $hello = "Cześć " . $yourName . "!";
   	        echo $hello;
			return $hello;
   }
}