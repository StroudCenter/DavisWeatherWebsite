<?php
############################################################################
# A Project of TNET Services, Inc. and Saratoga-Weather.org (WD-USA template set)
############################################################################
#
#   Project:    Sample Included Website Design
#   Module:     sample.php
#   Purpose:    Sample Page
#   Authors:    Kevin W. Reed <kreed@tnet.com>
#               TNET Services, Inc.
#
# 	Copyright:	(c) 1992-2007 Copyright TNET Services, Inc.
############################################################################
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA
############################################################################
#	This document uses Tab 4 Settings
############################################################################
require_once("Settings.php");
require_once("common.php");
############################################################################
$TITLE= $SITE['organ'] . " - About Us";
$showGizmo = true;  // set to false to exclude the gizmo
include("top.php");
############################################################################
?>
</head>
<body>
<?php
############################################################################
include("header.php");
############################################################################
include("menubar.php");
############################################################################
?>

<div id="main-copy">
  
	<h3>About This Station</h3> 

	<p>The data comes from a Davis Instruments 6162 VantagePro2 Plus Wireless Weather Station equiped with a heated tipping bucket rain collector, temperature and humidity sensors, an anemometer, solar radiation sensor, UV sensor and solar panels.  Data is uploaded to this site every 10 seconds by a low-power <a href="http://www.meteobridge.com/wiki/index.php/Main_Page">Meteobridge</a> device.</p>
	
	<p>All data on this website can also be found at Weather Underground as station KPAAVOND5.</p>

	<h3>About The Stroud Water Research Center</h3> 

	<p>OUR MISSION: TO ADVANCE KNOWLEDGE AND STEWARDSHIP OF FRESH WATER SYSTEMS THROUGH GLOBAL RESEARCH, EDUCATION, AND RESTORATION</p>

	<p>Driven by the philosophy that understanding the science of fresh water is fundamental to our ability to protect the integrity of this finite and vital resource, the Center seeks to disseminate its research findings to its peers in the scientific and educational communities, as well as businesses, landowners, policy makers and individuals, to enable informed decision making that affects water quality and availability in our local communities and the world around us.</p>

	<p>We accomplish our goals through our pursuit of both basic and applied scientific research, as well as through educational programs, which serve audiences ranging in age from elementary school children to adults in continuing education programs.</p>

	<p>Stroud Water Research Center undertakes applied research projects for public agencies and private corporations in an effort to provide solutions to water resource problems throughout the world.</p>

	<h3>About This Website</h3> 

	<p>This site is a template design by <a href="http://www.carterlake.org">CarterLake.org</a> with PHP conversion by <a href="http://saratoga-weather.org/">Saratoga-Weather.org</a>.<br/>
	 Special thanks go to Kevin Reed at <a href="http://www.tnetweather.com">TNET Weather</a> for his work on the original Carterlake templates, and his design for the common website PHP management.<br/>
	 Special thanks to Mike Challis of <a href="http://www.642weather.com/weather/scripts.php">Long Beach WA</a> for his wind-rose generator, Theme Switcher and CSS styling help with these templates.<br/>
 Special thanks go to Ken True of <a href="http://saratoga-weather.org/">Saratoga-Weather.org</a> for the AJAX conditions display, dashboard and integration of the <a href="http://www.tnetweather.com/nb-0200/">TNET Weather common PHP site design</a> for this site. </p>

	<p>Template is originally based on <a href="http://capmex.biz/resources/designs-by-haran">Designs by Haran</a>.</p>

	<p>This template is XHTML 1.0 compliant. Validate the <a href="http://validator.w3.org/check/referer">XHTML</a> and <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> of this page.</p>

</div><!-- end main-copy -->

<?php
############################################################################
include("footer.php");
############################################################################
# End of Page
############################################################################
?>