<?php
session_start();

require 'twitter-oauth/vendor/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

if( isset( $_GET['username'] ) AND $_GET['username'] != '' ):

	$username = $_GET['username'];
	$limit = ( isset( $_GET['count'] ) AND $_GET['count'] != '' ) ? $_GET['count'] : 2;
	$apikey = "";
	$apisecret = "";
	$accesstoken = "";
	$accesstokensecret = "";

	function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
		$connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
		$connection->setApiVersion('1.1');
		return $connection;
	}

	$interval = 600;

	$cache_file = dirname(__FILE__) . '/cache/' . $username . '_' . $limit;

	if (file_exists($cache_file)) {
		$last = filemtime($cache_file);
	} else {
		$last = false;
	}

	$now = time();

	if ( !$last || (( $now - $last ) > $interval) ) {
		$context = stream_context_create(array(
			'http' => array(
				'timeout' => 3
			)
		));

		$connection = getConnectionWithAccessToken($apikey, $apisecret, $accesstoken, $accesstokensecret);
		$twitter_feed = $connection->get("statuses/user_timeline", ['screen_name' => $username, 'count' => $count, 'exclude_replies' => 'true'] );

		var_dump($connection);

		$cache_rss = serialize($twitter_feed);

		if (!empty($cache_rss)) {
			$cache_static = fopen($cache_file, 'wb');
			fwrite($cache_static, $cache_rss);
			fclose($cache_static);
		}

		$rss = @unserialize(file_get_contents($cache_file));
	} else {
		$rss = @unserialize(file_get_contents($cache_file));
	}

	echo json_encode($rss);

endif;
