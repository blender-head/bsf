<?php
	
	if (! function_exists('upload')) 
    {
        function upload($image, $path)
        {
            Upload::upload($image, $path);
            return Upload::getFilename();
        }
    }

    if (! function_exists('create_excerpt')) 
    {
        function create_excerpt(string $str, int $startPos = 0, int $maxLength = 100): string
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