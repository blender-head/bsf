<?php
	
	namespace App\Library\Helper;

	class Helper
	{
		/**
         *  Create an excerpt from a text
         *  @param string $str
         *  @param int $startPos
         *  @param int $maxLength
         *  @return string
         */
		public function getExcerpt(string $str, int $startPos = 0, int $maxLength = 100): string
		{
			$excerpt = $str;

		    if(strlen($str) > $maxLength) 
		    {
		        $excerpt   = substr($str, $startPos, $maxLength - 3);
		        $lastSpace = strrpos($excerpt, ' ');
		        $excerpt   = substr($excerpt, 0, $lastSpace);
		        $excerpt  .= '...';
		    }
		    
		    return $excerpt;
		}
	}