<?php
	
	namespace App\Library\Helper;

	class Helper
	{
		public function getExcerpt($str, $startPos=0, $maxLength=100) 
		{
		    if(strlen($str) > $maxLength) 
		    {
		        $excerpt   = substr($str, $startPos, $maxLength-3);
		        $lastSpace = strrpos($excerpt, ' ');
		        $excerpt   = substr($excerpt, 0, $lastSpace);
		        $excerpt  .= '...';
		    } 
		    else 
		    {
		        $excerpt = $str;
		    }
		    
		    return $excerpt;
		}
	}