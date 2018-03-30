<?php
	
	return [
		'blog_native' => public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'blog',
		'blog_cloudinary' => ['folder' => 'blogs'],

		'news_native' => public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'news',
		'news_cloudinary' => ['folder' => 'news'],

		'reviews_native' => public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'reviews',
		'reviews_cloudinary' => ['folder' => 'reviews'],
	];
