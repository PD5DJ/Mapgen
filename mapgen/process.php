<?php
$var_lat = $_GET["var_lat"];
$var_long = $_GET["var_long"];
$var_zoomlevel_1 = $_GET["var_zoomlevel_1"];
$var_zoomlevel_2 = $_GET["var_zoomlevel_2"];
$var_zoomlevel_3 = $_GET["var_zoomlevel_3"];
$var_zoomlevel_4 = $_GET["var_zoomlevel_4"];
$var_zoomlevel_5 = $_GET["var_zoomlevel_5"];
/*
$var_imgw = $_GET["var_imgw"];
$var_imgh = $_GET["var_imgh"];
*/
$var_imgw = 480;
$var_imgh = 272;
$var_club = $_GET["var_club"];
$NewLat = 0;
$NewLong = 0;
$NorthCoordinate_XSmall = 0;
$SouthCoordinate_XSmall = 0;
$EastCoordinate_XSmall = 0;
$WestCoordinate_XSmall = 0;
$NorthCoordinate_Small = 0;
$SouthCoordinate_Small = 0;
$EastCoordinate_Small = 0;
$WestCoordinate_Small = 0;
$NorthCoordinate_Medium = 0;
$SouthCoordinate_Medium = 0;
$EastCoordinate_Medium = 0;
$WestCoordinate_Medium = 0;
$NorthCoordinate_Large = 0;
$SouthCoordinate_Large = 0;
$EastCoordinate_Large = 0;
$WestCoordinate_Large = 0;
$NorthCoordinate_XLarge = 0;
$SouthCoordinate_XLarge = 0;
$EastCoordinate_XLarge = 0;
$WestCoordinate_XLarge = 0;
$WidthDistance = 0;
$HeightDistance = 0;


$api_key = "AIzaSyB7CEF_GrN1ltrpDYr_zdYqtWBkIDPuDFk";

if ($var_club > 0 ){
	if ($var_club == 1) {
		$var_lat = 52.732841;
		$var_long = 5.275353;
	} elseif ($var_club == 2) {
		$var_lat = 52.600984 ;
		$var_long = 4.775422;		
	} elseif ($var_club == 3) {
		$var_lat = 52.481096;
		$var_long = 5.038684;				
	} elseif ($var_club == 4) {
		$var_lat = 52.601311;
		$var_long = 4.775441;						
	}
}



?>
<html>
	<title>Map Generator for OpenTX GPS Map Widget</title>
	<link rel="stylesheet" type="text/css" href="/mapgen/styles.css">
	<body>
		<center>
		<a href="/"><img src="/mapgen/images/h4l_small.png"></a>
		<h1>Map Generator for OpenTX GPS Map Widget</h1>
		OpenTX Lua Widget project: <a href="https://github.com/Hobby4life/GPSMap" target="_blank">https://github.com/Hobby4life/GPSMap</a><br><br>
		<font size="2">Copyright Hobby4Life 2019</b></font><br><br>
		<table width="350">
			<tr>
				<td colspan="2"><b>Center Coordinates:</b></th>
			</tr>
			<tr>
				<td>Lattitude:<br><?php echo '<b>'.$var_lat.'</b>'; ?></td>
				<td>Longitude:<br><?php echo '<b>'.$var_long.'</b>'; ?></td>
			</tr>
			<tr>
				<td colspan=2">
					<hr>
				</td>
			</tr>
			<tr>
				<td colspan="2"><b>Zoomlevels used:</b></td>
			</tr>
			<tr>
				<td class="rightcol">Extra Small map:</td>
				<td class="leftcol"><?php echo '<b>'.$var_zoomlevel_1.'</b>';?> map*xsmall.png</td>
			</tr>
			<tr>
				<td class="rightcol">Small map:</td>
				<td class="leftcol"><?php echo '<b>'.$var_zoomlevel_2.'</b>';?> map*small.png</td>
			</tr>
			<tr>
				<td class="rightcol">Medium map:</td>
				<td class="leftcol"><?php echo '<b>'.$var_zoomlevel_3.'</b>';?> map*medium.png</td>
			</tr>
			<tr>
				<td class="rightcol">Large map:</td>
				<td class="leftcol"><?php echo '<b>'.$var_zoomlevel_4.'</b>';?> map*large.png</td>
			</tr>
			<tr>
				<td class="rightcol">Extra Large map:</td>
				<td class="leftcol"><?php echo '<b>'.$var_zoomlevel_5.'</b>';?> map*xlarge.png</td>
			</tr>
			<tr>
			<tr>
				<td colspan=2">
					<hr>
				</td>
			</tr>		  
				<td colspan="2"><b>Image Dimensions:</b></td>
			</tr>
			<tr>
				<td>Width: <?php echo '<b>'.$var_imgw;?>px</b></td>
				<td>Height: <?php echo '<b>'.$var_imgh;?>px</b></td>
			</tr>
			<tr>
				<td colspan=2">
					<br>
				</td>
			</tr>			
		</table>
		<br>
		<form action="/mapgen/index.html">
			<input type="submit" value="Go Back" />
		</form>
		<br>

		<?php
			$MapSize = "XSmall";
			$zoomlevel = $var_zoomlevel_1;
			$WidthDistance = getPixelsPerMeter($var_lat,$zoomlevel,$var_imgw);
			$HeightDistance = getPixelsPerMeter($var_lat,$zoomlevel,$var_imgh);
			$NorthCoordinate_XSmall = CalcNewCoordinate($var_lat,$var_long,360,$HeightDistance /2)[0];	
			$WestCoordinate_XSmall = CalcNewCoordinate($var_lat,$var_long,270,$WidthDistance /2)[1];
			$EastCoordinate_XSmall = CalcNewCoordinate($var_lat,$var_long,90,$WidthDistance /2)[1];
			$SouthCoordinate_XSmall = CalcNewCoordinate($var_lat,$var_long,180,$HeightDistance /2)[0];	
			$NorthCoordinate = $NorthCoordinate_XSmall;
			$SouthCoordinate = $SouthCoordinate_XSmall;
			$WestCoordinate = $WestCoordinate_XSmall;
			$EastCoordinate = $EastCoordinate_XSmall;	
		?>
		<table>
			<tr>
				<th colspan="3"><b>map*<?php echo strtolower($MapSize)?>.png</b></th>
			</tr>
				<td colspan="3">
					<i>Right click save image as "<b>map*<?php echo strtolower($MapSize)?>.png</b>" Where <b>*</b> is the map number</i>
				</td>
			<tr>
				<td colspan="3"><hr>
					Map width: <b><?php echo round($WidthDistance,1)?>m</b> / Height: <b><?php echo round($HeightDistance ,1)?>m</b><hr>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					North lattitude: <b><?php echo round($NorthCoordinate,6)?></b>
				</td>
			</tr>
			<tr>
				<td>
					West longitude<br><b><?php echo round($WestCoordinate,6)?></b>
				</td>
				<td class="mapimg">
					<img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $var_lat?>,<?php echo $var_long?>&zoom=<?php echo $zoomlevel?>&size=<?php echo $var_imgw?>x<?php echo $var_imgh?>&maptype=satellite&key=<?php echo $api_key?>">
				</td>
				<td>
					East longitude<br><b><?php echo round($EastCoordinate,6)?></b>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					South lattitude: <b><?php echo round($SouthCoordinate,6)?></b>
				</td>  
			</tr>
		</table>
		<br>


		<?php
			$MapSize = "Small";
			$zoomlevel = $var_zoomlevel_2;
			$WidthDistance = getPixelsPerMeter($var_lat,$zoomlevel,$var_imgw);
			$HeightDistance = getPixelsPerMeter($var_lat,$zoomlevel,$var_imgh);
			$NorthCoordinate_Small = CalcNewCoordinate($var_lat,$var_long,360,$HeightDistance /2)[0];	
			$WestCoordinate_Small = CalcNewCoordinate($var_lat,$var_long,270,$WidthDistance /2)[1];
			$EastCoordinate_Small = CalcNewCoordinate($var_lat,$var_long,90,$WidthDistance /2)[1];
			$SouthCoordinate_Small = CalcNewCoordinate($var_lat,$var_long,180,$HeightDistance /2)[0];	
			$NorthCoordinate = $NorthCoordinate_Small;
			$SouthCoordinate = $SouthCoordinate_Small;
			$WestCoordinate = $WestCoordinate_Small;
			$EastCoordinate = $EastCoordinate_Small;	
		?>
		<table>
			<tr>
				<th colspan="3"><b>map*<?php echo strtolower($MapSize)?>.png</b></th>
			</tr>
				<td colspan="3">
					<i>Right click save image as "<b>map*<?php echo strtolower($MapSize)?>.png</b>" Where <b>*</b> is the map number</i>
				</td>
			<tr>
				<td colspan="3"><hr>
					Map width: <b><?php echo round($WidthDistance,1)?>m</b> / Height: <b><?php echo round($HeightDistance ,1)?>m</b><hr>
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="3">
					North lattitude: <b><?php echo round($NorthCoordinate,6)?></b>
				</td>
			</tr>
			<tr>
				<td>
					West longitude<br><b><?php echo round($WestCoordinate,6)?></b>
				</td>
				<td class="mapimg">
					<img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $var_lat?>,<?php echo $var_long?>&zoom=<?php echo $zoomlevel?>&size=<?php echo $var_imgw?>x<?php echo $var_imgh?>&maptype=satellite&key=<?php echo $api_key?>">
				</td>
				<td>
					East longitude<br><b><?php echo round($EastCoordinate,6)?></b>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					South lattitude: <b><?php echo round($SouthCoordinate,6)?></b>
				</td>  
			</tr>
		</table>
		<br>

		<?php
			$MapSize = "Medium";
			$zoomlevel = $var_zoomlevel_3;
			$WidthDistance = getPixelsPerMeter($var_lat,$zoomlevel,$var_imgw);
			$HeightDistance = getPixelsPerMeter($var_lat,$zoomlevel,$var_imgh);
			$NorthCoordinate_Medium = CalcNewCoordinate($var_lat,$var_long,360,$HeightDistance /2)[0];	
			$WestCoordinate_Medium = CalcNewCoordinate($var_lat,$var_long,270,$WidthDistance /2)[1];
			$EastCoordinate_Medium = CalcNewCoordinate($var_lat,$var_long,90,$WidthDistance /2)[1];
			$SouthCoordinate_Medium = CalcNewCoordinate($var_lat,$var_long,180,$HeightDistance /2)[0];	
			$NorthCoordinate = $NorthCoordinate_Medium;
			$SouthCoordinate = $SouthCoordinate_Medium;
			$WestCoordinate = $WestCoordinate_Medium;
			$EastCoordinate = $EastCoordinate_Medium;	
		?>
		<table>
			<tr>
				<th colspan="3"><b>map*<?php echo strtolower($MapSize)?>.png</b></th>
			</tr>
				<td colspan="3">
					<i>Right click save image as "<b>map*<?php echo strtolower($MapSize)?>.png</b>" Where <b>*</b> is the map number</i>
				</td>
			<tr>
				<td colspan="3"><hr>
					Map width: <b><?php echo round($WidthDistance,1)?>m</b> / Height: <b><?php echo round($HeightDistance ,1)?>m</b><hr>
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="3">
					North lattitude: <b><?php echo round($NorthCoordinate,6)?></b>
				</td>
			</tr>
			<tr>
				<td>
					West longitude<br><b><?php echo round($WestCoordinate,6)?></b>
				</td>
				<td class="mapimg">
					<img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $var_lat?>,<?php echo $var_long?>&zoom=<?php echo $zoomlevel?>&size=<?php echo $var_imgw?>x<?php echo $var_imgh?>&maptype=satellite&key=<?php echo $api_key?>">
				</td>
				<td>
					East longitude<br><b><?php echo round($EastCoordinate,6)?></b>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					South lattitude: <b><?php echo round($SouthCoordinate,6)?></b>
				</td>  
			</tr>
		</table>
		<br>


		<?php
			$MapSize = "Large";
			$zoomlevel = $var_zoomlevel_4;
			$WidthDistance = getPixelsPerMeter($var_lat,$zoomlevel,$var_imgw);
			$HeightDistance = getPixelsPerMeter($var_lat,$zoomlevel,$var_imgh);
			$NorthCoordinate_Large = CalcNewCoordinate($var_lat,$var_long,360,$HeightDistance /2)[0];	
			$WestCoordinate_Large = CalcNewCoordinate($var_lat,$var_long,270,$WidthDistance /2)[1];
			$EastCoordinate_Large = CalcNewCoordinate($var_lat,$var_long,90,$WidthDistance /2)[1];
			$SouthCoordinate_Large = CalcNewCoordinate($var_lat,$var_long,180,$HeightDistance /2)[0];	
			$NorthCoordinate = $NorthCoordinate_Large;
			$SouthCoordinate = $SouthCoordinate_Large;
			$WestCoordinate = $WestCoordinate_Large;
			$EastCoordinate = $EastCoordinate_Large;
		?>
		<table>
			<tr>
				<th colspan="3"><b>map*<?php echo strtolower($MapSize)?>.png</b></th>
			</tr>
				<td colspan="3">
					<i>Right click save image as "<b>map*<?php echo strtolower($MapSize)?>.png</b>" Where <b>*</b> is the map number</i>
				</td>
			<tr>
				<td colspan="3"><hr>
					Map width: <b><?php echo round($WidthDistance,1)?>m</b> / Height: <b><?php echo round($HeightDistance ,1)?>m</b><hr>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					North lattitude: <b><?php echo round($NorthCoordinate,6)?></b>
				</td>
			</tr>
			<tr>
				<td>
					West longitude<br><b><?php echo round($WestCoordinate,6)?></b>
				</td>
				<td class="mapimg">
					<img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $var_lat?>,<?php echo $var_long?>&zoom=<?php echo $zoomlevel?>&size=<?php echo $var_imgw?>x<?php echo $var_imgh?>&maptype=satellite&key=<?php echo $api_key?>">
				</td>
				<td>
					East longitude<br><b><?php echo round($EastCoordinate,6)?></b>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					South lattitude: <b><?php echo round($SouthCoordinate,6)?></b>
				</td>  
			</tr>
		</table>
		<br>



		<?php
			$MapSize = "XLarge";
			$zoomlevel = $var_zoomlevel_5;
			$WidthDistance = getPixelsPerMeter($var_lat,$zoomlevel,$var_imgw);
			$HeightDistance = getPixelsPerMeter($var_lat,$zoomlevel,$var_imgh);
			$NorthCoordinate_XLarge = CalcNewCoordinate($var_lat,$var_long,360,$HeightDistance /2)[0];	
			$WestCoordinate_XLarge = CalcNewCoordinate($var_lat,$var_long,270,$WidthDistance /2)[1];
			$EastCoordinate_XLarge = CalcNewCoordinate($var_lat,$var_long,90,$WidthDistance /2)[1];
			$SouthCoordinate_XLarge = CalcNewCoordinate($var_lat,$var_long,180,$HeightDistance /2)[0];	
			$NorthCoordinate = $NorthCoordinate_XLarge;
			$SouthCoordinate = $SouthCoordinate_XLarge;
			$WestCoordinate = $WestCoordinate_XLarge;
			$EastCoordinate = $EastCoordinate_XLarge;
		?>
		<table>
			<tr>
				<th colspan="3"><b>map*<?php echo strtolower($MapSize)?>.png</b></th>
			</tr>
				<td colspan="3">
					<i>Right click save image as "<b>map*<?php echo strtolower($MapSize)?>.png</b>" Where <b>*</b> is the map number</i>
				</td>
			<tr>
				<td colspan="3"><hr>
					Map width: <b><?php echo round($WidthDistance,1)?>m</b> / Height: <b><?php echo round($HeightDistance ,1)?>m</b><hr>
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="3">
					North lattitude: <b><?php echo round($NorthCoordinate,6)?></b>
				</td>
			</tr>
			<tr>
				<td>
					West longitude<br><b><?php echo round($WestCoordinate,6)?></b>
				</td>
				<td class="mapimg">
					<img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $var_lat?>,<?php echo $var_long?>&zoom=<?php echo $zoomlevel?>&size=<?php echo $var_imgw?>x<?php echo $var_imgh?>&maptype=satellite&key=<?php echo $api_key?>">
				</td>
				<td>
					East longitude<br><b><?php echo round($EastCoordinate,6)?></b>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					South lattitude: <b><?php echo round($SouthCoordinate,6)?></b>
				</td>  
			</tr>
		</table>
		
		
		<br><br>		
		<hr>
		Copy Code Below into Lua Script
		<br><br>
		
		<table class="luatable">
			<tr>
				<td class="luaoutput">
					-- coordinates for the extra small map.<br>
					map.North.xsmall = <?php echo round($NorthCoordinate_XSmall,6)?><br>
					map.South.xsmall = <?php echo round($SouthCoordinate_XSmall,6)?><br>
					map.West.xsmall  = <?php echo round($WestCoordinate_XSmall,6)?><br>
					map.East.xsmall  = <?php echo round($EastCoordinate_XSmall,6)?><br>
					-- No Fly Zone screen coordinates for extra small map--<br>
					map.poly.xsmall = {{0,0}, {0,0}, {0,0}, {0,0}, {0,0}}<br>
					<br><br>
					-- coordinates for the small map.<br>
					map.North.small = <?php echo round($NorthCoordinate_Small,6)?><br>
					map.South.small = <?php echo round($SouthCoordinate_Small,6)?><br>
					map.West.small  = <?php echo round($WestCoordinate_Small,6)?><br>
					map.East.small  = <?php echo round($EastCoordinate_Small,6)?><br>
					-- No Fly Zone screen coordinates for small map--<br>
					map.poly.small = {{0,0}, {0,0}, {0,0}, {0,0}, {0,0}}<br>
					<br><br>
					-- coordinates for the medium map.<br>
					map.North.medium = <?php echo round($NorthCoordinate_Medium,6)?><br>
					map.South.medium = <?php echo round($SouthCoordinate_Medium,6)?><br>
					map.West.medium  = <?php echo round($WestCoordinate_Medium,6)?><br>
					map.East.medium  = <?php echo round($EastCoordinate_Medium,6)?><br>
					-- No Fly Zone screen coordinates for medium map--<br>
					map.poly.medium = {{0,0}, {0,0}, {0,0}, {0,0}, {0,0}}<br>
					<br><br>
					-- coordinates for the large map.<br>
					map.North.large = <?php echo round($NorthCoordinate_Large,6)?><br>
					map.South.large = <?php echo round($SouthCoordinate_Large,6)?><br>
					map.West.large  = <?php echo round($WestCoordinate_Large,6)?><br>
					map.East.large  = <?php echo round($EastCoordinate_Large,6)?><br>
					-- No Fly Zone screen coordinates for large map--<br>
					map.poly.large = {{0,0}, {0,0}, {0,0}, {0,0}, {0,0}}<br>
					<br><br>
					-- coordinates for the extra large map.<br>
					map.North.xlarge = <?php echo round($NorthCoordinate_XLarge,6)?><br>
					map.South.xlarge = <?php echo round($SouthCoordinate_XLarge,6)?><br>
					map.West.xlarge  = <?php echo round($WestCoordinate_XLarge,6)?><br>
					map.East.xlarge  = <?php echo round($EastCoordinate_XLarge,6)?><br>
					-- No Fly Zone screen coordinates for extra large map--<br>
					map.poly.xlarge = {{0,0}, {0,0}, {0,0}, {0,0}, {0,0}}<br>					
				</td>
			</tr>
		</table>
		<br>
		<hr>
			<br>
			<b>Do you like this project and want to support?</b><br><br>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick" />
				<input type="hidden" name="hosted_button_id" value="MH77TSSQ92L5A" />
				<input type="image" src="https://www.paypalobjects.com/en_US/NL/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
				<img alt="" border="0" src="https://www.paypal.com/en_NL/i/scr/pixel.gif" width="1" height="1" />
			</form>



		<?php


		function getPixelsPerMeter($lat,$zoom,$imgsize) {
			$earthC = 6371000 * 2 * M_PI;
			$Factor = POW(2, 8+ $zoom);
			$MeterPerPixel = ((COS($lat * M_PI / 180) * $earthC / $Factor) );   // / 2);
			$MapWidthDistance = $imgsize * $MeterPerPixel;
		return $MapWidthDistance;	
		}

		function CalcNewCoordinate($lat,$long,$bearing,$distance) {
			$NewLat;
			$NewLong;
			$ERadius = 6371;
			$bearing = deg2rad($bearing);
			$lat = deg2rad($lat);
			$long = deg2rad($long);
			$distance = $distance / 1000;
			$distanceToRadius = $distance / $ERadius;

			$newLatR = ASin(Sin($lat) * Cos($distanceToRadius) + Cos($lat) * Sin($distanceToRadius) * Cos($bearing));
			$newLonR = $long + ATan2((Sin($bearing) * Sin($distanceToRadius) * Cos($lat)),(Cos($distanceToRadius) - Sin($lat) * Sin($newLatR)));

			$NewLat = Rad2Deg($newLatR);
			$NewLong = Rad2Deg($newLonR);	
			
			return array($NewLat,$NewLong);
		}
		?>
		</center>
	</body>
</html>



