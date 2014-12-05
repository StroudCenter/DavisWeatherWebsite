<?php
/*
 File: MBtags.php

 Purpose: load Meteobridge variables into a $WX[] array for use with the Canada/World/USA template sets
 NOTE: this file must be processed by Meteobridge as a template file and uploaded to the website
   as MBtags.php using the Meteobridge extended Push Services configuration.

 Author: Ken True - webmaster@saratoga-weather.org

 (created by gen-MBtags.php - V1.03 - 18-Aug-2013)

 These tags generated on 2014-11-04 21:11:48 GMT
   From MBtags-template.txt updated 2014-06-05 22:06:44 GMT

*/
// --------------------------------------------------------------------------

// allow viewing of generated source

if (isset($_REQUEST["sce"]) and strtolower($_REQUEST["sce"]) == "view" ) {
//--self downloader --
   $filenameReal = __FILE__;
   $download_size = filesize($filenameReal);
   header("Pragma: public");
   header("Cache-Control: private");
   header("Cache-Control: no-cache, must-revalidate");
   header("Content-type: text/plain");
   header("Accept-Ranges: bytes");
   header("Content-Length: $download_size");
   header("Connection: close");
   
   readfile($filenameReal);
   exit;
}
$WXsoftware = 'MB';  
$defsFile = 'MB-defs.php';  // filename with $varnames = $WX['MB-varnames']; equivalents
 
$rawdatalines = '
date|2014-12-05|// local date:|:
time|15:33:45|// local time:|:
dateUTC|2014-12-05|// UTC date:|:
timeUTC|20:33:45|// UTCtime:|:
uomTemp|&deg;F|// UOM temperature:|:
uomWind| mph|// UOM wind:|:
uomBaro| inHg|// UOM barometer:|:
uomRain| in|// UOM rain:|:
mbsystem-swversion|2.4|// Meteobridge version string (example: "1.1"):|:
mbsystem-buildnum|5300|// build number as integer (example: 1673):|:
mbsystem-platform|TL-MR3020|// string that specifies hw platform (example: "TL-MR3020"):|:
mbsystem-language|English|// language used on Meteobridge web interface (example: "English"):|:
mbsystem-timezone|America/New York|// defined timezone (example: "Europe/Berlin"):|:
mbsystem-latitude|39.860348|// latitude as float (example: 53.875120):|:
mbsystem-longitude|-75.781222|// longitude as float (example: 9.885357):|:
mbsystem-lunarage|14|// days passes since new moon as integer (example: 28):|:
mbsystem-lunarpercent|99.5|// lunarphase given as percentage from 0% (new moon) to 100% (full moon):|:
mbsystem-lunarsegment|4|// lunarphase segment as integer (0 = new moon, 1-3 = growing moon: quarter, half, three quarters, 4 = full moon, 5-7 = shrinking moon: three quarter, half, quarter):|:
mbsystem-daylength|09:29|// length of day (example: "11:28"):|:
mbsystem-civildaylength|10:29|// alternative method for daylength computation (example: "12:38"):|:
mbsystem-nauticaldaylength|11:36|// alternative method for daylength computation (example: "14:00"):|:
mbsystem-sunrise|07:09|// time of sunrise in local time. Can be converted to UTC by applying "=utc" to the variable (example: "06:47", resp. "05:47"):|:
mbsystem-sunset|16:38|// time of sunset in local time. Can be converted to UTC by applying "=utc" to the variable (example: "18:15", resp. "17:15"):|:
mbsystem-civilsunrise|06:39|// alternative computation for sunrise.:|:
mbsystem-civilsunset|17:08|// alternative computation for sunset.:|:
mbsystem-nauticalsunrise|06:06|// alternative computation for sunrise.:|:
mbsystem-nauticalsunset|17:42|// alternative alternative computation for sunset..:|:
mbsystem-daynightflag|D|// returns "D" when there is daylight, otherwise "N".:|:
mbsystem-moonrise|16:23|// time of moonrise in local time. Please notice that not every day has a moonrise time, therefore, variable can be non-existent on certain days (example: "05:46", resp. "04:46"):|:
mbsystem-moonset|05:59|// time of moonset in local time. Please notice that not every day has a moonset time, therefore, variable can be non-existent on certain days.:|:
forecast-rule|12|// Davis forecast rule number:|:
forecast-text|Increasing clouds and warmer. Precipitation possible within 24 to 48 hours.|// Davis forecast reports in English:|:
th0temp-act|41.2|// outdoor temperature most recent:|:
th0temp-val5|41.4|// outdoor temperature value 5 minutes ago:|:
th0temp-val10|41.4|// outdoor temperature value 10 minutes ago:|:
th0temp-val15|41.4|// outdoor temperature value 15 minutes ago:|:
th0temp-val30|41.4|// outdoor temperature value 30 minutes ago:|:
th0temp-val60|41.4|// outdoor temperature value 60 minutes ago:|:
th0temp-hmin|41.2|// outdoor temperature min of this hour:|:
th0temp-hmintime|20141205153144|// outdoor temperature timestamp min of this hour:|:
th0temp-hmax|41.4|// outdoor temperature max of this hour:|:
th0temp-hmaxtime|20141205150100|// outdoor temperature timestamp max of this hour:|:
th0temp-dmin|32.7|// outdoor temperature min of today:|:
th0temp-dmintime|20141205034035|// outdoor temperature timestamp min of today:|:
th0temp-dmax|41.4|// outdoor temperature max of today:|:
th0temp-dmaxtime|20141205142010|// outdoor temperature timestamp max of today:|:
th0temp-ydmin|27.0|// outdoor temperature min of yesterday:|:
th0temp-ydmintime|20141204072544|// outdoor temperature timestamp min of yesterday:|:
th0temp-ydmax|41.5|// outdoor temperature max of yesterday:|:
th0temp-ydmaxtime|20141204123356|// outdoor temperature timestamp max of yesterday:|:
th0temp-mmin|27.0|// outdoor temperature min of this month:|:
th0temp-mmintime|20141204072544|// outdoor temperature timestamp min of this month:|:
th0temp-mmax|65.8|// outdoor temperature max of this month:|:
th0temp-mmaxtime|20141201124357|// outdoor temperature timestamp max of this month:|:
th0temp-ymin|-4.2|// outdoor temperature min of this year:|:
th0temp-ymintime|20140104044457|// outdoor temperature timestamp min of this year:|:
th0temp-ymax|92.8|// outdoor temperature max of this year:|:
th0temp-ymaxtime|20140702161447|// outdoor temperature timestamp max of this year:|:
th0temp-amin|-4.2|// outdoor temperature min of all time:|:
th0temp-amintime|20140104044457|// outdoor temperature timestamp min of all time:|:
th0temp-amax|92.8|// outdoor temperature max of all time:|:
th0temp-amaxtime|20140702161447|// outdoor temperature timestamp max of all time:|:
th0temp-starttime|20140104044457|// outdoor temperature timestamp of first recorded data:|:
th0hum-act|88|// outdoor humidity most recent:|:
th0hum-val5|88|// outdoor humidity value 5 minutes ago:|:
th0hum-val10|87|// outdoor humidity value 10 minutes ago:|:
th0hum-val15|86|// outdoor humidity value 15 minutes ago:|:
th0hum-val30|85|// outdoor humidity value 30 minutes ago:|:
th0hum-val60|83|// outdoor humidity value 60 minutes ago:|:
th0hum-hmin|85|// outdoor humidity min of this hour:|:
th0hum-hmintime|20141205150100|// outdoor humidity timestamp min of this hour:|:
th0hum-hmax|88|// outdoor humidity max of this hour:|:
th0hum-hmaxtime|20141205152716|// outdoor humidity timestamp max of this hour:|:
th0hum-dmin|71|// outdoor humidity min of today:|:
th0hum-dmintime|20141205045929|// outdoor humidity timestamp min of today:|:
th0hum-dmax|89|// outdoor humidity max of today:|:
th0hum-dmaxtime|20141205000955|// outdoor humidity timestamp max of today:|:
th0hum-ydmin|52|// outdoor humidity min of yesterday:|:
th0hum-ydmintime|20141204131808|// outdoor humidity timestamp min of yesterday:|:
th0hum-ydmax|94|// outdoor humidity max of yesterday:|:
th0hum-ydmaxtime|20141204080714|// outdoor humidity timestamp max of yesterday:|:
th0hum-mmin|52|// outdoor humidity min of this month:|:
th0hum-mmintime|20141204131808|// outdoor humidity timestamp min of this month:|:
th0hum-mmax|97|// outdoor humidity max of this month:|:
th0hum-mmaxtime|20141203013410|// outdoor humidity timestamp max of this month:|:
th0hum-ymin|17|// outdoor humidity min of this year:|:
th0hum-ymintime|20141104124949|// outdoor humidity timestamp min of this year:|:
th0hum-ymax|99|// outdoor humidity max of this year:|:
th0hum-ymaxtime|20140105204827|// outdoor humidity timestamp max of this year:|:
th0hum-amin|17|// outdoor humidity min of all time:|:
th0hum-amintime|20131114145606|// outdoor humidity timestamp min of all time:|:
th0hum-amax|100|// outdoor humidity max of all time:|:
th0hum-amaxtime|20131031112646|// outdoor humidity timestamp max of all time:|:
th0hum-starttime|20131031112646|// outdoor humidity timestamp of first recorded data:|:
th0dew-act|37.9|// outdoor dewpoint most recent:|:
th0dew-val5|38.1|// outdoor dewpoint value 5 minutes ago:|:
th0dew-val10|37.8|// outdoor dewpoint value 10 minutes ago:|:
th0dew-val15|37.6|// outdoor dewpoint value 15 minutes ago:|:
th0dew-val30|37.2|// outdoor dewpoint value 30 minutes ago:|:
th0dew-val60|36.5|// outdoor dewpoint value 60 minutes ago:|:
th0dew-hmin|37.2|// outdoor dewpoint min of this hour:|:
th0dew-hmintime|20141205150100|// outdoor dewpoint timestamp min of this hour:|:
th0dew-hmax|38.1|// outdoor dewpoint max of this hour:|:
th0dew-hmaxtime|20141205152716|// outdoor dewpoint timestamp max of this hour:|:
th0dew-dmin|25.9|// outdoor dewpoint min of today:|:
th0dew-dmintime|20141205045929|// outdoor dewpoint timestamp min of today:|:
th0dew-dmax|38.1|// outdoor dewpoint max of today:|:
th0dew-dmaxtime|20141205152716|// outdoor dewpoint timestamp max of today:|:
th0dew-ydmin|24.8|// outdoor dewpoint min of yesterday:|:
th0dew-ydmintime|20141204133512|// outdoor dewpoint timestamp min of yesterday:|:
th0dew-ydmax|32.0|// outdoor dewpoint max of yesterday:|:
th0dew-ydmaxtime|20141204232256|// outdoor dewpoint timestamp max of yesterday:|:
th0dew-mmin|24.8|// outdoor dewpoint min of this month:|:
th0dew-mmintime|20141204133512|// outdoor dewpoint timestamp min of this month:|:
th0dew-mmax|54.7|// outdoor dewpoint max of this month:|:
th0dew-mmaxtime|20141201131835|// outdoor dewpoint timestamp max of this month:|:
th0dew-ymin|-12.5|// outdoor dewpoint min of this year:|:
th0dew-ymintime|20140228173805|// outdoor dewpoint timestamp min of this year:|:
th0dew-ymax|81.5|// outdoor dewpoint max of this year:|:
th0dew-ymaxtime|20140702132619|// outdoor dewpoint timestamp max of this year:|:
th0dew-amin|-12.5|// outdoor dewpoint min of all time:|:
th0dew-amintime|20140228173805|// outdoor dewpoint timestamp min of all time:|:
th0dew-amax|81.5|// outdoor dewpoint max of all time:|:
th0dew-amaxtime|20140702132619|// outdoor dewpoint timestamp max of all time:|:
th0dew-starttime|20140228173805|// outdoor dewpoint timestamp of first recorded data:|:
thb0temp-act|67.5|// indoor temperature most recent:|:
thb0temp-val5|67.6|// indoor temperature value 5 minutes ago:|:
thb0temp-val10|67.6|// indoor temperature value 10 minutes ago:|:
thb0temp-val15|67.6|// indoor temperature value 15 minutes ago:|:
thb0temp-val30|67.8|// indoor temperature value 30 minutes ago:|:
thb0temp-val60|67.6|// indoor temperature value 60 minutes ago:|:
thb0temp-hmin|67.5|// indoor temperature min of this hour:|:
thb0temp-hmintime|20141205153004|// indoor temperature timestamp min of this hour:|:
thb0temp-hmax|67.8|// indoor temperature max of this hour:|:
thb0temp-hmaxtime|20141205150304|// indoor temperature timestamp max of this hour:|:
thb0temp-dmin|63.3|// indoor temperature min of today:|:
thb0temp-dmintime|20141205033703|// indoor temperature timestamp min of today:|:
thb0temp-dmax|68.5|// indoor temperature max of today:|:
thb0temp-dmaxtime|20141205130206|// indoor temperature timestamp max of today:|:
thb0temp-ydmin|62.4|// indoor temperature min of yesterday:|:
thb0temp-ydmintime|20141204025703|// indoor temperature timestamp min of yesterday:|:
thb0temp-ydmax|69.3|// indoor temperature max of yesterday:|:
thb0temp-ydmaxtime|20141204141407|// indoor temperature timestamp max of yesterday:|:
thb0temp-mmin|62.4|// indoor temperature min of this month:|:
thb0temp-mmintime|20141204025703|// indoor temperature timestamp min of this month:|:
thb0temp-mmax|75.4|// indoor temperature max of this month:|:
thb0temp-mmaxtime|20141201140407|// indoor temperature timestamp max of this month:|:
thb0temp-ymin|42.1|// indoor temperature min of this year:|:
thb0temp-ymintime|20140206201649|// indoor temperature timestamp min of this year:|:
thb0temp-ymax|97.9|// indoor temperature max of this year:|:
thb0temp-ymaxtime|20140602185404|// indoor temperature timestamp max of this year:|:
thb0temp-amin|42.1|// indoor temperature min of all time:|:
thb0temp-amintime|20140206201649|// indoor temperature timestamp min of all time:|:
thb0temp-amax|97.9|// indoor temperature max of all time:|:
thb0temp-amaxtime|20140602185404|// indoor temperature timestamp max of all time:|:
thb0temp-starttime|20140206201649|// indoor temperature timestamp of first recorded data:|:
thb0hum-act|32|// indoor humidity most recent:|:
thb0hum-val5|32|// indoor humidity value 5 minutes ago:|:
thb0hum-val10|32|// indoor humidity value 10 minutes ago:|:
thb0hum-val15|32|// indoor humidity value 15 minutes ago:|:
thb0hum-val30|32|// indoor humidity value 30 minutes ago:|:
thb0hum-val60|32|// indoor humidity value 60 minutes ago:|:
thb0hum-hmin|32|// indoor humidity min of this hour:|:
thb0hum-hmintime|20141205150008|// indoor humidity timestamp min of this hour:|:
thb0hum-hmax|32|// indoor humidity max of this hour:|:
thb0hum-hmaxtime|20141205150008|// indoor humidity timestamp max of this hour:|:
thb0hum-dmin|27|// indoor humidity min of today:|:
thb0hum-dmintime|20141205095406|// indoor humidity timestamp min of today:|:
thb0hum-dmax|32|// indoor humidity max of today:|:
thb0hum-dmaxtime|20141205000008|// indoor humidity timestamp max of today:|:
thb0hum-ydmin|28|// indoor humidity min of yesterday:|:
thb0hum-ydmintime|20141204110908|// indoor humidity timestamp min of yesterday:|:
thb0hum-ydmax|35|// indoor humidity max of yesterday:|:
thb0hum-ydmaxtime|20141204000803|// indoor humidity timestamp max of yesterday:|:
thb0hum-mmin|27|// indoor humidity min of this month:|:
thb0hum-mmintime|20141205095406|// indoor humidity timestamp min of this month:|:
thb0hum-mmax|42|// indoor humidity max of this month:|:
thb0hum-mmaxtime|20141201182508|// indoor humidity timestamp max of this month:|:
thb0hum-ymin|9|// indoor humidity min of this year:|:
thb0hum-ymintime|20140130030715|// indoor humidity timestamp min of this year:|:
thb0hum-ymax|66|// indoor humidity max of this year:|:
thb0hum-ymaxtime|20140907064231|// indoor humidity timestamp max of this year:|:
thb0hum-amin|9|// indoor humidity min of all time:|:
thb0hum-amintime|20140130030715|// indoor humidity timestamp min of all time:|:
thb0hum-amax|67|// indoor humidity max of all time:|:
thb0hum-amaxtime|20131008074526|// indoor humidity timestamp max of all time:|:
thb0hum-starttime|20131008074526|// indoor humidity timestamp of first recorded data:|:
thb0dew-act|36.5|// indoor dewpoint most recent:|:
thb0dew-val5|36.7|// indoor dewpoint value 5 minutes ago:|:
thb0dew-val10|36.7|// indoor dewpoint value 10 minutes ago:|:
thb0dew-val15|36.7|// indoor dewpoint value 15 minutes ago:|:
thb0dew-val30|36.9|// indoor dewpoint value 30 minutes ago:|:
thb0dew-val60|36.7|// indoor dewpoint value 60 minutes ago:|:
thb0dew-hmin|36.5|// indoor dewpoint min of this hour:|:
thb0dew-hmintime|20141205153004|// indoor dewpoint timestamp min of this hour:|:
thb0dew-hmax|36.9|// indoor dewpoint max of this hour:|:
thb0dew-hmaxtime|20141205150304|// indoor dewpoint timestamp max of this hour:|:
thb0dew-dmin|30.7|// indoor dewpoint min of today:|:
thb0dew-dmintime|20141205051803|// indoor dewpoint timestamp min of today:|:
thb0dew-dmax|36.9|// indoor dewpoint max of today:|:
thb0dew-dmaxtime|20141205150304|// indoor dewpoint timestamp max of today:|:
thb0dew-ydmin|31.8|// indoor dewpoint min of yesterday:|:
thb0dew-ydmintime|20141204075604|// indoor dewpoint timestamp min of yesterday:|:
thb0dew-ydmax|35.6|// indoor dewpoint max of yesterday:|:
thb0dew-ydmaxtime|20141204000803|// indoor dewpoint timestamp max of yesterday:|:
thb0dew-mmin|30.7|// indoor dewpoint min of this month:|:
thb0dew-mmintime|20141205051803|// indoor dewpoint timestamp min of this month:|:
thb0dew-mmax|48.2|// indoor dewpoint max of this month:|:
thb0dew-mmaxtime|20141201143007|// indoor dewpoint timestamp max of this month:|:
thb0dew-ymin|0.7|// indoor dewpoint min of this year:|:
thb0dew-ymintime|20140130064816|// indoor dewpoint timestamp min of this year:|:
thb0dew-ymax|65.3|// indoor dewpoint max of this year:|:
thb0dew-ymaxtime|20140603135003|// indoor dewpoint timestamp max of this year:|:
thb0dew-amin|0.7|// indoor dewpoint min of all time:|:
thb0dew-amintime|20140130064816|// indoor dewpoint timestamp min of all time:|:
thb0dew-amax|65.3|// indoor dewpoint max of all time:|:
thb0dew-amaxtime|20140603135003|// indoor dewpoint timestamp max of all time:|:
thb0dew-starttime|20140130064816|// indoor dewpoint timestamp of first recorded data:|:
thb0press-act|30.05|// station pressure most recent:|:
thb0press-val5|30.05|// station pressure value 5 minutes ago:|:
thb0press-val10|30.06|// station pressure value 10 minutes ago:|:
thb0press-val15|30.05|// station pressure value 15 minutes ago:|:
thb0press-val30|30.06|// station pressure value 30 minutes ago:|:
thb0press-val60|30.05|// station pressure value 60 minutes ago:|:
thb0press-hmin|30.05|// station pressure min of this hour:|:
thb0press-hmintime|20141205151508|// station pressure timestamp min of this hour:|:
thb0press-hmax|30.06|// station pressure max of this hour:|:
thb0press-hmaxtime|20141205150308|// station pressure timestamp max of this hour:|:
thb0press-dmin|30.05|// station pressure min of today:|:
thb0press-dmintime|20141205151508|// station pressure timestamp min of today:|:
thb0press-dmax|30.14|// station pressure max of today:|:
thb0press-dmaxtime|20141205075810|// station pressure timestamp max of today:|:
thb0press-ydmin|29.87|// station pressure min of yesterday:|:
thb0press-ydmintime|20141204000000|// station pressure timestamp min of yesterday:|:
thb0press-ydmax|30.10|// station pressure max of yesterday:|:
thb0press-ydmaxtime|20141204232712|// station pressure timestamp max of yesterday:|:
thb0press-mmin|29.61|// station pressure min of this month:|:
thb0press-mmintime|20141203132711|// station pressure timestamp min of this month:|:
thb0press-mmax|30.18|// station pressure max of this month:|:
thb0press-mmaxtime|20141202100111|// station pressure timestamp max of this month:|:
thb0press-ymin|28.64|// station pressure min of this year:|:
thb0press-ymintime|20140312175934|// station pressure timestamp min of this year:|:
thb0press-ymax|30.28|// station pressure max of this year:|:
thb0press-ymaxtime|20140417105325|// station pressure timestamp max of this year:|:
thb0press-amin|28.64|// station pressure min of all time:|:
thb0press-amintime|20140312175934|// station pressure timestamp min of all time:|:
thb0press-amax|30.34|// station pressure max of all time:|:
thb0press-amaxtime|20131129232127|// station pressure timestamp max of all time:|:
thb0press-starttime|20131129232127|// station pressure timestamp of first recorded data:|:
thb0seapress-act|30.47|// sealevel pressure most recent:|:
thb0seapress-val5|30.48|// sealevel pressure value 5 minutes ago:|:
thb0seapress-val10|30.48|// sealevel pressure value 10 minutes ago:|:
thb0seapress-val15|30.48|// sealevel pressure value 15 minutes ago:|:
thb0seapress-val30|30.48|// sealevel pressure value 30 minutes ago:|:
thb0seapress-val60|30.48|// sealevel pressure value 60 minutes ago:|:
thb0seapress-hmin|30.47|// sealevel pressure min of this hour:|:
thb0seapress-hmintime|20141205153208|// sealevel pressure timestamp min of this hour:|:
thb0seapress-hmax|30.48|// sealevel pressure max of this hour:|:
thb0seapress-hmaxtime|20141205150508|// sealevel pressure timestamp max of this hour:|:
thb0seapress-dmin|30.47|// sealevel pressure min of today:|:
thb0seapress-dmintime|20141205153208|// sealevel pressure timestamp min of today:|:
thb0seapress-dmax|30.56|// sealevel pressure max of today:|:
thb0seapress-dmaxtime|20141205080006|// sealevel pressure timestamp max of today:|:
thb0seapress-ydmin|30.29|// sealevel pressure min of yesterday:|:
thb0seapress-ydmintime|20141204000008|// sealevel pressure timestamp min of yesterday:|:
thb0seapress-ydmax|30.53|// sealevel pressure max of yesterday:|:
thb0seapress-ydmaxtime|20141204232708|// sealevel pressure timestamp max of yesterday:|:
thb0seapress-mmin|30.02|// sealevel pressure min of this month:|:
thb0seapress-mmintime|20141203132707|// sealevel pressure timestamp min of this month:|:
thb0seapress-mmax|30.60|// sealevel pressure max of this month:|:
thb0seapress-mmaxtime|20141202100107|// sealevel pressure timestamp max of this month:|:
thb0seapress-ymin|29.03|// sealevel pressure min of this year:|:
thb0seapress-ymintime|20140312175934|// sealevel pressure timestamp min of this year:|:
thb0seapress-ymax|30.71|// sealevel pressure max of this year:|:
thb0seapress-ymaxtime|20140417105325|// sealevel pressure timestamp max of this year:|:
thb0seapress-amin|29.03|// sealevel pressure min of all time:|:
thb0seapress-amintime|20140312175934|// sealevel pressure timestamp min of all time:|:
thb0seapress-amax|30.77|// sealevel pressure max of all time:|:
thb0seapress-amaxtime|20131129232123|// sealevel pressure timestamp max of all time:|:
thb0seapress-starttime|20131129232123|// sealevel pressure timestamp of first recorded data:|:
wind0wind-act|0.0|// windspeed most recent:|:
wind0wind-val5|0.0|// windspeed value 5 minutes ago:|:
wind0wind-val10|0.0|// windspeed value 10 minutes ago:|:
wind0wind-val15|0.0|// windspeed value 15 minutes ago:|:
wind0wind-val30|0.0|// windspeed value 30 minutes ago:|:
wind0wind-val60|0.0|// windspeed value 60 minutes ago:|:
wind0wind-hmin|0.0|// windspeed min of this hour:|:
wind0wind-hmintime|20141205150002|// windspeed timestamp min of this hour:|:
wind0wind-hmax|1.0|// windspeed max of this hour:|:
wind0wind-hmaxtime|20141205151654|// windspeed timestamp max of this hour:|:
wind0wind-dmin|0.0|// windspeed min of today:|:
wind0wind-dmintime|20141205000001|// windspeed timestamp min of today:|:
wind0wind-dmax|8.9|// windspeed max of today:|:
wind0wind-dmaxtime|20141205073642|// windspeed timestamp max of today:|:
wind0wind-ydmin|0.0|// windspeed min of yesterday:|:
wind0wind-ydmintime|20141204000037|// windspeed timestamp min of yesterday:|:
wind0wind-ydmax|17.9|// windspeed max of yesterday:|:
wind0wind-ydmaxtime|20141204112418|// windspeed timestamp max of yesterday:|:
wind0wind-mmin|0.0|// windspeed min of this month:|:
wind0wind-mmintime|20141201000000|// windspeed timestamp min of this month:|:
wind0wind-mmax|19.0|// windspeed max of this month:|:
wind0wind-mmaxtime|20141201162734|// windspeed timestamp max of this month:|:
wind0wind-ymin|0.0|// windspeed min of this year:|:
wind0wind-ymintime|20140101000001|// windspeed timestamp min of this year:|:
wind0wind-ymax|255.0|// windspeed max of this year:|:
wind0wind-ymaxtime|20140425153526|// windspeed timestamp max of this year:|:
wind0wind-amin|0.0|// windspeed min of all time:|:
wind0wind-amintime|20130830144525|// windspeed timestamp min of all time:|:
wind0wind-amax|255.0|// windspeed max of all time:|:
wind0wind-amaxtime|20140425153526|// windspeed timestamp max of all time:|:
wind0wind-starttime|20130830144525|// windspeed timestamp of first recorded data:|:
wind0avgwind-act|0.0|// average windspeed most recent:|:
wind0avgwind-val5|0.0|// average windspeed value 5 minutes ago:|:
wind0avgwind-val10|0.0|// average windspeed value 10 minutes ago:|:
wind0avgwind-val15|0.0|// average windspeed value 15 minutes ago:|:
wind0avgwind-val30|0.0|// average windspeed value 30 minutes ago:|:
wind0avgwind-val60|0.9|// average windspeed value 60 minutes ago:|:
wind0avgwind-hmin|0.0|// average windspeed min of this hour:|:
wind0avgwind-hmintime|20141205150002|// average windspeed timestamp min of this hour:|:
wind0avgwind-hmax|0.0|// average windspeed max of this hour:|:
wind0avgwind-hmaxtime|20141205150002|// average windspeed timestamp max of this hour:|:
wind0avgwind-dmin|0.0|// average windspeed min of today:|:
wind0avgwind-dmintime|20141205000002|// average windspeed timestamp min of today:|:
wind0avgwind-dmax|4.0|// average windspeed max of today:|:
wind0avgwind-dmaxtime|20141205090006|// average windspeed timestamp max of today:|:
wind0avgwind-ydmin|0.0|// average windspeed min of yesterday:|:
wind0avgwind-ydmintime|20141204004403|// average windspeed timestamp min of yesterday:|:
wind0avgwind-ydmax|6.9|// average windspeed max of yesterday:|:
wind0avgwind-ydmaxtime|20141204113308|// average windspeed timestamp max of yesterday:|:
wind0avgwind-mmin|0.0|// average windspeed min of this month:|:
wind0avgwind-mmintime|20141201001106|// average windspeed timestamp min of this month:|:
wind0avgwind-mmax|6.9|// average windspeed max of this month:|:
wind0avgwind-mmaxtime|20141201163107|// average windspeed timestamp max of this month:|:
wind0avgwind-ymin|0.0|// average windspeed min of this year:|:
wind0avgwind-ymintime|20140101031217|// average windspeed timestamp min of this year:|:
wind0avgwind-ymax|14.1|// average windspeed max of this year:|:
wind0avgwind-ymaxtime|20140312235330|// average windspeed timestamp max of this year:|:
wind0avgwind-amin|0.0|// average windspeed min of all time:|:
wind0avgwind-amintime|20130831184957|// average windspeed timestamp min of all time:|:
wind0avgwind-amax|14.1|// average windspeed max of all time:|:
wind0avgwind-amaxtime|20131124093122|// average windspeed timestamp max of all time:|:
wind0avgwind-starttime|20130831184957|// average windspeed timestamp of first recorded data:|:
wind0dir-act|54|// wind direction most recent:|:
wind0dir-val5|54|// wind direction value 5 minutes ago:|:
wind0dir-val10|54|// wind direction value 10 minutes ago:|:
wind0dir-val15|54|// wind direction value 15 minutes ago:|:
wind0dir-val30|54|// wind direction value 30 minutes ago:|:
wind0dir-val60|54|// wind direction value 60 minutes ago:|:
wind0dir-hmin|54|// wind direction min of this hour:|:
wind0dir-hmintime|20141205150002|// wind direction timestamp min of this hour:|:
wind0dir-hmax|54|// wind direction max of this hour:|:
wind0dir-hmaxtime|20141205150002|// wind direction timestamp max of this hour:|:
wind0dir-dmin|0|// wind direction min of today:|:
wind0dir-dmintime|20141205012943|// wind direction timestamp min of today:|:
wind0dir-dmax|355|// wind direction max of today:|:
wind0dir-dmaxtime|20141205015913|// wind direction timestamp max of today:|:
wind0dir-ydmin|0|// wind direction min of yesterday:|:
wind0dir-ydmintime|20141204000000|// wind direction timestamp min of yesterday:|:
wind0dir-ydmax|355|// wind direction max of yesterday:|:
wind0dir-ydmaxtime|20141204000127|// wind direction timestamp max of yesterday:|:
wind0dir-mmin|0|// wind direction min of this month:|:
wind0dir-mmintime|20141201105425|// wind direction timestamp min of this month:|:
wind0dir-mmax|355|// wind direction max of this month:|:
wind0dir-mmaxtime|20141201162303|// wind direction timestamp max of this month:|:
wind0dir-ymin|0|// wind direction min of this year:|:
wind0dir-ymintime|20140101121014|// wind direction timestamp min of this year:|:
wind0dir-ymax|355|// wind direction max of this year:|:
wind0dir-ymaxtime|20140101113728|// wind direction timestamp max of this year:|:
wind0dir-amin|0|// wind direction min of all time:|:
wind0dir-amintime|20130830160307|// wind direction timestamp min of all time:|:
wind0dir-amax|355|// wind direction max of all time:|:
wind0dir-amaxtime|20130830160311|// wind direction timestamp max of all time:|:
wind0dir-starttime|20130830160307|// wind direction timestamp of first recorded data:|:
wind0chill-act|41.2|// outdoor wind chill temperature most recent:|:
wind0chill-val5|41.4|// outdoor wind chill temperature value 5 minutes ago:|:
wind0chill-val10|41.4|// outdoor wind chill temperature value 10 minutes ago:|:
wind0chill-val15|41.4|// outdoor wind chill temperature value 15 minutes ago:|:
wind0chill-val30|41.4|// outdoor wind chill temperature value 30 minutes ago:|:
wind0chill-val60|41.4|// outdoor wind chill temperature value 60 minutes ago:|:
wind0chill-hmin|41.2|// outdoor wind chill temperature min of this hour:|:
wind0chill-hmintime|20141205153144|// outdoor wind chill temperature timestamp min of this hour:|:
wind0chill-hmax|41.4|// outdoor wind chill temperature max of this hour:|:
wind0chill-hmaxtime|20141205150002|// outdoor wind chill temperature timestamp max of this hour:|:
wind0chill-dmin|27.5|// outdoor wind chill temperature min of today:|:
wind0chill-dmintime|20141205073642|// outdoor wind chill temperature timestamp min of today:|:
wind0chill-dmax|41.4|// outdoor wind chill temperature max of today:|:
wind0chill-dmaxtime|20141205142010|// outdoor wind chill temperature timestamp max of today:|:
wind0chill-ydmin|25.3|// outdoor wind chill temperature min of yesterday:|:
wind0chill-ydmintime|20141204073220|// outdoor wind chill temperature timestamp min of yesterday:|:
wind0chill-ydmax|41.5|// outdoor wind chill temperature max of yesterday:|:
wind0chill-ydmaxtime|20141204123429|// outdoor wind chill temperature timestamp max of yesterday:|:
wind0chill-mmin|23.9|// outdoor wind chill temperature min of this month:|:
wind0chill-mmintime|20141202144805|// outdoor wind chill temperature timestamp min of this month:|:
wind0chill-mmax|65.8|// outdoor wind chill temperature max of this month:|:
wind0chill-mmaxtime|20141201124357|// outdoor wind chill temperature timestamp max of this month:|:
wind0chill-ymin|-18.2|// outdoor wind chill temperature min of this year:|:
wind0chill-ymintime|20140107091501|// outdoor wind chill temperature timestamp min of this year:|:
wind0chill-ymax|92.8|// outdoor wind chill temperature max of this year:|:
wind0chill-ymaxtime|20140702161447|// outdoor wind chill temperature timestamp max of this year:|:
wind0chill-amin|-18.2|// outdoor wind chill temperature min of all time:|:
wind0chill-amintime|20140107091501|// outdoor wind chill temperature timestamp min of all time:|:
wind0chill-amax|92.8|// outdoor wind chill temperature max of all time:|:
wind0chill-amaxtime|20140702161447|// outdoor wind chill temperature timestamp max of all time:|:
wind0chill-starttime|20140107091501|// outdoor wind chill temperature timestamp of first recorded data:|:
rain0rate-act|0.00|// rain rate most recent:|:
rain0rate-val5|0.00|// rain rate value 5 minutes ago:|:
rain0rate-val10|0.00|// rain rate value 10 minutes ago:|:
rain0rate-val15|0.00|// rain rate value 15 minutes ago:|:
rain0rate-val30|0.00|// rain rate value 30 minutes ago:|:
rain0rate-val60|0.00|// rain rate value 60 minutes ago:|:
rain0rate-hmin|0.00|// rain rate min of this hour:|:
rain0rate-hmintime|20141205150034|// rain rate timestamp min of this hour:|:
rain0rate-hmax|0.00|// rain rate max of this hour:|:
rain0rate-hmaxtime|20141205150034|// rain rate timestamp max of this hour:|:
rain0rate-dmin|0.00|// rain rate min of today:|:
rain0rate-dmintime|20141205000001|// rain rate timestamp min of today:|:
rain0rate-dmax|0.00|// rain rate max of today:|:
rain0rate-dmaxtime|20141205000001|// rain rate timestamp max of today:|:
rain0rate-ydmin|0.00|// rain rate min of yesterday:|:
rain0rate-ydmintime|20141204000000|// rain rate timestamp min of yesterday:|:
rain0rate-ydmax|0.00|// rain rate max of yesterday:|:
rain0rate-ydmaxtime|20141204000000|// rain rate timestamp max of yesterday:|:
rain0rate-mmin|0.00|// rain rate min of this month:|:
rain0rate-mmintime|20141201000000|// rain rate timestamp min of this month:|:
rain0rate-mmax|0.47|// rain rate max of this month:|:
rain0rate-mmaxtime|20141203132021|// rain rate timestamp max of this month:|:
rain0rate-ymin|0.00|// rain rate min of this year:|:
rain0rate-ymintime|20140101000001|// rain rate timestamp min of this year:|:
rain0rate-ymax|20.57|// rain rate max of this year:|:
rain0rate-ymaxtime|20140425122913|// rain rate timestamp max of this year:|:
rain0rate-amin|0.00|// rain rate min of all time:|:
rain0rate-amintime|20130830144255|// rain rate timestamp min of all time:|:
rain0rate-amax|20.57|// rain rate max of all time:|:
rain0rate-amaxtime|20140425122913|// rain rate timestamp max of all time:|:
rain0rate-starttime|20130830144255|// rain rate timestamp of first recorded data:|:
rain0total-act|30.64|// rain most recent:|:
rain0total-val5|30.64|// rain value 5 minutes ago:|:
rain0total-val10|30.64|// rain value 10 minutes ago:|:
rain0total-val15|30.64|// rain value 15 minutes ago:|:
rain0total-val30|30.64|// rain value 30 minutes ago:|:
rain0total-val60|30.64|// rain value 60 minutes ago:|:
rain0total-hmin|30.64|// rain min of this hour:|:
rain0total-hmintime|20130830144255|// rain timestamp min of this hour:|:
rain0total-hmax|0.00|// rain max of this hour:|:
rain0total-hmaxtime|20130830144255|// rain timestamp max of this hour:|:
rain0total-dmin|30.64|// rain min of today:|:
rain0total-dmintime|20130830144255|// rain timestamp min of today:|:
rain0total-dmax|0.00|// rain max of today:|:
rain0total-dmaxtime|20130830144255|// rain timestamp max of today:|:
rain0total-ydmin|30.64|// rain min of yesterday:|:
rain0total-ydmintime|--|// rain timestamp min of yesterday:|:
rain0total-ydmax|0.00|// rain max of yesterday:|:
rain0total-ydmaxtime|--|// rain timestamp max of yesterday:|:
rain0total-mmin|30.64|// rain min of this month:|:
rain0total-mmintime|20130830144255|// rain timestamp min of this month:|:
rain0total-mmax|0.38|// rain max of this month:|:
rain0total-mmaxtime|20130830144255|// rain timestamp max of this month:|:
rain0total-ymin|30.64|// rain min of this year:|:
rain0total-ymintime|20130830144255|// rain timestamp min of this year:|:
rain0total-ymax|30.63|// rain max of this year:|:
rain0total-ymaxtime|20130830144255|// rain timestamp max of this year:|:
rain0total-amin|30.64|// rain min of all time:|:
rain0total-amintime|20130830144255|// rain timestamp min of all time:|:
rain0total-amax|39.42|// rain max of all time:|:
rain0total-amaxtime|20130830144255|// rain timestamp max of all time:|:
rain0total-starttime|20130830144255|// rain timestamp of first recorded data:|:
uv0index-act|0.0|// uv index most recent:|:
uv0index-val5|0.0|// uv index value 5 minutes ago:|:
uv0index-val10|0.0|// uv index value 10 minutes ago:|:
uv0index-val15|0.0|// uv index value 15 minutes ago:|:
uv0index-val30|0.0|// uv index value 30 minutes ago:|:
uv0index-val60|0.0|// uv index value 60 minutes ago:|:
uv0index-hmin|0.0|// uv index min of this hour:|:
uv0index-hmintime|20141205150024|// uv index timestamp min of this hour:|:
uv0index-hmax|0.0|// uv index max of this hour:|:
uv0index-hmaxtime|20141205150024|// uv index timestamp max of this hour:|:
uv0index-dmin|0.0|// uv index min of today:|:
uv0index-dmintime|20141205000001|// uv index timestamp min of today:|:
uv0index-dmax|0.7|// uv index max of today:|:
uv0index-dmaxtime|20141205122410|// uv index timestamp max of today:|:
uv0index-ydmin|0.0|// uv index min of yesterday:|:
uv0index-ydmintime|20141204000000|// uv index timestamp min of yesterday:|:
uv0index-ydmax|1.8|// uv index max of yesterday:|:
uv0index-ydmaxtime|20141204120602|// uv index timestamp max of yesterday:|:
uv0index-mmin|0.0|// uv index min of this month:|:
uv0index-mmintime|20141201000000|// uv index timestamp min of this month:|:
uv0index-mmax|2.2|// uv index max of this month:|:
uv0index-mmaxtime|20141201110457|// uv index timestamp max of this month:|:
uv0index-ymin|0.0|// uv index min of this year:|:
uv0index-ymintime|20140101000057|// uv index timestamp min of this year:|:
uv0index-ymax|10.9|// uv index max of this year:|:
uv0index-ymaxtime|20140704131730|// uv index timestamp max of this year:|:
uv0index-amin|0.0|// uv index min of all time:|:
uv0index-amintime|20130831180915|// uv index timestamp min of all time:|:
uv0index-amax|10.9|// uv index max of all time:|:
uv0index-amaxtime|20140704131730|// uv index timestamp max of all time:|:
uv0index-starttime|20130831180915|// uv index timestamp of first recorded data:|:
sol0rad-act|12|// solar rad most recent:|:
sol0rad-val5|16|// solar rad value 5 minutes ago:|:
sol0rad-val10|23|// solar rad value 10 minutes ago:|:
sol0rad-val15|32|// solar rad value 15 minutes ago:|:
sol0rad-val30|26|// solar rad value 30 minutes ago:|:
sol0rad-val60|37|// solar rad value 60 minutes ago:|:
sol0rad-hmin|12|// solar rad min of this hour:|:
sol0rad-hmintime|20141205153104|// solar rad timestamp min of this hour:|:
sol0rad-hmax|39|// solar rad max of this hour:|:
sol0rad-hmaxtime|20141205151356|// solar rad timestamp max of this hour:|:
sol0rad-dmin|0|// solar rad min of today:|:
sol0rad-dmintime|20141205000001|// solar rad timestamp min of today:|:
sol0rad-dmax|146|// solar rad max of today:|:
sol0rad-dmaxtime|20141205094322|// solar rad timestamp max of today:|:
sol0rad-ydmin|0|// solar rad min of yesterday:|:
sol0rad-ydmintime|20141204000000|// solar rad timestamp min of yesterday:|:
sol0rad-ydmax|548|// solar rad max of yesterday:|:
sol0rad-ydmaxtime|20141204120554|// solar rad timestamp max of yesterday:|:
sol0rad-mmin|0|// solar rad min of this month:|:
sol0rad-mmintime|20141201000000|// solar rad timestamp min of this month:|:
sol0rad-mmax|575|// solar rad max of this month:|:
sol0rad-mmaxtime|20141201110541|// solar rad timestamp max of this month:|:
sol0rad-ymin|0|// solar rad min of this year:|:
sol0rad-ymintime|20140101000041|// solar rad timestamp min of this year:|:
sol0rad-ymax|1318|// solar rad max of this year:|:
sol0rad-ymaxtime|20140605130235|// solar rad timestamp max of this year:|:
sol0rad-amin|0|// solar rad min of all time:|:
sol0rad-amintime|20130831193013|// solar rad timestamp min of all time:|:
sol0rad-amax|1318|// solar rad max of all time:|:
sol0rad-amaxtime|20140605130235|// solar rad timestamp max of all time:|:
sol0rad-starttime|20130831193013|// solar rad timestamp of first recorded data:|:
rain0total-daysum|0.00|// rain total today:|:
rain0total-monthsum|0.38|// rain total this month:|:
rain0total-yearsum|30.63|// rain total this year:|:
rain0total-ydaysum|0.00|// rain total yesterday:|:
rain0total-sum60|0.00|// rain total last 60 minutes:|:
'; // END_OF_RAW_DATA_LINES;

// end of generation script

// put data in  array
//
$WX = array();
global $WX;
$WXComment = array();
$data = explode(":|:",$rawdatalines);
$nscanned = 0;
foreach ($data as $v => $line) {
  list($vname,$vval,$vcomment) = explode("|",trim($line).'|||');
  if ($vname <> "" and strpos($vval,'$') === false) {
    $WX[$vname] = trim($vval);
    if($vcomment <> "") { $WXComment[$vname] = trim($vcomment); }
  }
  $nscanned++;
}
if(isset($_REQUEST['debug'])) {
  print "<!-- loaded $nscanned $WXsoftware \$WX[] entries -->\n";
}

if (isset($_REQUEST["sce"]) and strtolower($_REQUEST["sce"]) == "dump" ) {

  print "<pre>\n";
  print "// \$WX[] array size = $nscanned entries.\n";
  foreach ($WX as $key => $val) {
	  $t =  "\$WX['$key'] = '$val';";
	  if(isset($WXComment[$key])) {$t .=  " $WXComment[$key]"; }
	  print "$t\n";
  }
  print "</pre>\n";

}
if(file_exists("MB-defs.php")) { include_once("MB-defs.php"); }
?>