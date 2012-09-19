<html>
<head>
<title>Twitter-Post Confirmation</title>
<link href="css/style-php.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
$twitter_api_url = "http://twitter.com/statuses/update.xml";
$twitter_data = "status=Brents SocialBiz Tutorial from SDK!";
$twitter_user = "brentp4d";
$twitter_password = "g00dnews";

    
$ch = curl_init($twitter_api_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $twitter_data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "{$twitter_user}:{$twitter_password}");
    
    $twitter_data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
        
    if ($httpcode != 200) {
        echo "<strong>Don't Panic!</strong> Something went wrong, and the tweet wasn't posted correctly. $httpcode";
    }
    
?>
<div id="history"><!--Start History-->
<a href="javascript:history.back()">Back to the previous page</a>
</div><!--End History-->
</body>
</html>
 