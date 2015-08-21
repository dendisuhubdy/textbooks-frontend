<?php
	// mysql parms
	$dbhost = 'localhost';
	$db = 'bookwarrior';
	$dbtable = 'updated';
	$dbtable_edited = 'updated_edited';
        $descrtable = 'description';
        $descrtable_edited = 'description_edited';
        $topictable = 'topics';

	$dbuser = 'root';
	$dbpass = '!#@532*yat';

	$dbuser_get = 'root';
	$dbpass_get = '!#@532*yat';


	// problem resolution URL to mention in error messages
	$errurl = '';

	//$repository = 'repository';
	$maxlines = 25;

	//для RSS
	$maxnewslines = 30;
	$pagesperpage = 25;
	$servername = 'localhost';
    
        // separator symbol
        $filesep = '/';
	
        // distributed repository
 	 $repository = array(
		'0-390000'        => 'https://s3-us-west-1.amazonaws.com/bookrepo/',
		'391000-555000'   => 'https://s3-us-west-1.amazonaws.com/bookrepo/',
		'556000-698000'   => 'https://s3-us-west-1.amazonaws.com/bookrepo/',
		'699000-824000'   => 'https://s3-us-west-1.amazonaws.com/bookrepo/',
		'825000-921000'   => 'https://s3-us-west-1.amazonaws.com/bookrepo/',
		'922000-1134000'  => 'https://s3-us-west-1.amazonaws.com/bookrepo/',
		'1135000-1999000' => 'https://s3-us-west-1.amazonaws.com/bookrepo/');
	$covers_repository = 'https://s3-us-west-1.amazonaws.com/payruscovers/';
?>
