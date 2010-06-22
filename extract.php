<?php 


// Include config and icontact class
require_once( 'config.inc' );


// Grab the data from Disqus

$request_url = "http://disqus.com/api/get_forum_posts/?user_api_key=".$disqus_apikey."&forum_id=".$disqus_forumid."&api_version=1.1&limit=10000";

$json = file_get_contents($request_url, true); //getting the file content

$decode = json_decode($json, true);  // create JSON in array





	foreach($decode['message'] as $disqus_comment)
	{

		if ($disqus_comment["anonymous_author"]["email"] != "") {
			echo $disqus_comment["anonymous_author"]["email"]."<br>";
		}
	}
	




?>


