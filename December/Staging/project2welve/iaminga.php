<?php
date_default_timezone_set('Asia/Calcutta');

require './gapi-1.3/gapi.class.php';

// Report all errors except E_NOTICE
// This is the default value set in php.ini
// Report simple running errors
//error_reporting(E_ERROR | E_PARSE);
$ga = new gapi('ec.iamin@gmail.com','Iamin@1234');

//$CAMPAIGN_PROFILE_ID = 76942743;// VOLUNTEER SITE
$PORTAL_PROFILE_ID = 77207205; // IAMIN

//$ga->requestReportData($CAMPAIGN_PROFILE_ID,array('visitorType'),array('pageviews','visits'),null,null,"2013-09-25");
//echo 'WEB - <p>Total pageviews: ' . $ga->getPageviews() . ' total visits: ' . $ga->getVisits() . '</p>';
//$webVisits = $ga->getVisits();
//echo '<p>Web visits: ' . $webVisits . '</p>';

$webVisits=0;

$ga->requestReportData($PORTAL_PROFILE_ID,array('visitorType'),array('pageviews','visits'),null,null,"2013-09-29");
$mobileVisits = $ga->getVisits();
//echo '<p>Mobile visits: ' . $mobileVisits . '</p>';
$totalVisits = $webVisits+$mobileVisits;
//$webPercentage = ceil(($webVisits/$totalVisits)*100);
//$mobilePercentage = 100 - $webPercentage;

echo $totalVisits;

//echo '<p>Total visits : '.($totalVisits).'<br/>';
//echo 'Web - '.$webPercentage.'%, Mobile - '.$mobilePercentage.'%</p>';
?>