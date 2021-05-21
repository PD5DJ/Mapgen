<?php
	$var_lat = $_GET["var_lat"];
	$var_long = $_GET["var_long"];
	$var_zoomlevel_1 = $_GET["var_zoomlevel_1"];
	$var_zoomlevel_2 = $_GET["var_zoomlevel_2"];
	$var_zoomlevel_3 = $_GET["var_zoomlevel_3"];
	$var_zoomlevel_4 = $_GET["var_zoomlevel_4"];
	$var_zoomlevel_5 = $_GET["var_zoomlevel_5"];
	$var_maptype = $_GET["var_maptype"];
	$var_mapnumber = $_GET["var_mapnumber"];
	$var_imgw = 480;
	$var_imgh = 272;
	$var_club = $_GET["var_club"];

	// Bing maps API key
	$api_key = "YOUR-API-KEY";

	if ($var_maptype == "1" ) {
		$var_map = "Aerial";
	} elseif ($var_maptype == "2" ) {
		$var_map = "Road";
	} elseif ($var_maptype == "3" ) {
		$var_map = "CanvasDark";
	} elseif ($var_maptype == "4" ) {
		$var_map = "CanvasLight";
	} elseif ($var_maptype == "5" ) {
		$var_map = "CanvasGray";	
	}



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
	$img = "https://dev.virtualearth.net/REST/V1/Imagery/Map/" . $var_map . "/". $var_lat . "%2C" . $var_long . "/" . $zoomlevel . "?mapSize=" . $var_imgw . "," . $var_imgh . "&format=png&key=" . $api_key;
	$map_name = 'map'. $var_mapnumber . strtolower($MapSize) . '.png';
	SaveMapImage($img,$MapSize,$var_mapnumber);

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
	$img = "https://dev.virtualearth.net/REST/V1/Imagery/Map/" . $var_map . "/". $var_lat . "%2C" . $var_long . "/" . $zoomlevel . "?mapSize=" . $var_imgw . "," . $var_imgh . "&format=png&key=" . $api_key;
	$map_name = 'map'. $var_mapnumber . strtolower($MapSize) . '.png';
	SaveMapImage($img,$MapSize,$var_mapnumber);

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
	$img = "https://dev.virtualearth.net/REST/V1/Imagery/Map/" . $var_map . "/". $var_lat . "%2C" . $var_long . "/" . $zoomlevel . "?mapSize=" . $var_imgw . "," . $var_imgh . "&format=png&key=" . $api_key;
	$map_name = 'map'. $var_mapnumber . strtolower($MapSize) . '.png';
	SaveMapImage($img,$MapSize,$var_mapnumber);

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
	$img = "https://dev.virtualearth.net/REST/V1/Imagery/Map/" . $var_map . "/". $var_lat . "%2C" . $var_long . "/" . $zoomlevel . "?mapSize=" . $var_imgw . "," . $var_imgh . "&format=png&key=" . $api_key;
	$map_name = 'map'. $var_mapnumber . strtolower($MapSize) . '.png';
	SaveMapImage($img,$MapSize,$var_mapnumber);

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
	$img = "https://dev.virtualearth.net/REST/V1/Imagery/Map/" . $var_map . "/". $var_lat . "%2C" . $var_long . "/" . $zoomlevel . "?mapSize=" . $var_imgw . "," . $var_imgh . "&format=png&key=" . $api_key;
	$map_name = 'map'. $var_mapnumber . strtolower($MapSize) . '.png';
	SaveMapImage($img,$MapSize,$var_mapnumber);


	// Creates file with all coordinates
	$myfile = fopen("processed/map_".$var_mapnumber."_coordinates.lua", "w") or die("Unable to open file!");
	fwrite($myfile,"-- coordinates for the extra small map, map".$var_mapnumber."xsmall.png --\n");
	fwrite($myfile,"map.North.xsmall = ". round($NorthCoordinate_XSmall,6)."\n");
	fwrite($myfile,"map.South.xsmall = ". round($SouthCoordinate_XSmall,6)."\n");
	fwrite($myfile,"map.West.xsmall  = ". round($WestCoordinate_XSmall,6)."\n");
	fwrite($myfile,"map.East.xsmall  = ". round($EastCoordinate_XSmall,6)."\n");
	fwrite($myfile,"-- No Fly Zone screen coordinates for extra small map --\n");
	fwrite($myfile,"map.poly.xsmall = {{0,0}, {0,0}, {0,0}, {0,0}, {0,0}}\n");
	fwrite($myfile,"\n");
	fwrite($myfile,"-- coordinates for the small map, map".$var_mapnumber."small.png --\n");
	fwrite($myfile,"map.North.small = ". round($NorthCoordinate_Small,6)."\n");
	fwrite($myfile,"map.South.small = ". round($SouthCoordinate_Small,6)."\n");
	fwrite($myfile,"map.West.small  = ". round($WestCoordinate_Small,6)."\n");
	fwrite($myfile,"map.East.small  = ". round($EastCoordinate_Small,6)."\n");
	fwrite($myfile,"-- No Fly Zone screen coordinates for small map --\n");
	fwrite($myfile,"map.poly.small = {{0,0}, {0,0}, {0,0}, {0,0}, {0,0}}\n");
	fwrite($myfile,"\n");
	fwrite($myfile,"-- coordinates for the medium map, map".$var_mapnumber."medium.png --\n");
	fwrite($myfile,"map.North.medium = ". round($NorthCoordinate_Medium,6)."\n");
	fwrite($myfile,"map.South.medium = ". round($SouthCoordinate_Medium,6)."\n");
	fwrite($myfile,"map.West.medium  = ". round($WestCoordinate_Medium,6)."\n");
	fwrite($myfile,"map.East.medium  = ". round($EastCoordinate_Medium,6)."\n");
	fwrite($myfile,"-- No Fly Zone screen coordinates for medium map --\n");
	fwrite($myfile,"map.poly.medium = {{0,0}, {0,0}, {0,0}, {0,0}, {0,0}}\n");
	fwrite($myfile,"\n");
	fwrite($myfile,"-- coordinates for the large map, map".$var_mapnumber."large.png --\n");
	fwrite($myfile,"map.North.large = ". round($NorthCoordinate_Large,6)."\n");
	fwrite($myfile,"map.South.large = ". round($SouthCoordinate_Large,6)."\n");
	fwrite($myfile,"map.West.large  = ". round($WestCoordinate_Large,6)."\n");
	fwrite($myfile,"map.East.large  = ". round($EastCoordinate_Large,6)."\n");
	fwrite($myfile,"-- No Fly Zone screen coordinates for large map --\n");
	fwrite($myfile,"map.poly.large = {{0,0}, {0,0}, {0,0}, {0,0}, {0,0}}\n");
	fwrite($myfile,"\n");
	fwrite($myfile,"-- coordinates for the extra large map, map".$var_mapnumber."xlarge.png --\n");
	fwrite($myfile,"map.North.xlarge = ". round($NorthCoordinate_XLarge,6)."\n");
	fwrite($myfile,"map.South.xlarge = ". round($SouthCoordinate_XLarge,6)."\n");
	fwrite($myfile,"map.West.xlarge  = ". round($WestCoordinate_XLarge,6)."\n");
	fwrite($myfile,"map.East.xlarge  = ". round($EastCoordinate_XLarge,6)."\n");
	fwrite($myfile,"-- No Fly Zone screen coordinates for extra large map --\n");
	fwrite($myfile,"map.poly.xlarge = {{0,0}, {0,0}, {0,0}, {0,0}, {0,0}}\n");
	fclose($myfile);

	//Creates Zip file and deletes contents when ready for new process
	
	// Get real path for our folder
	$rootPath = realpath('processed');

	// Initialize archive object
	$zip = new ZipArchive();
	$zip->open('download/maps.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

	// Initialize empty "delete list"
	$filesToDelete = array();

	// Create recursive directory iterator
	/** @var SplFileInfo[] $files */
	$files = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator($rootPath),
		RecursiveIteratorIterator::LEAVES_ONLY
	);

	foreach ($files as $name => $file)
	{
		// Skip directories (they would be added automatically)
		if (!$file->isDir())
		{
			// Get real and relative path for current file
			$filePath = $file->getRealPath();
			$relativePath = substr($filePath, strlen($rootPath) + 1);

			// Add current file to archive
			$zip->addFile($filePath, $relativePath);

			// Add current file to "delete list"
			// delete it later cause ZipArchive create archive only after calling close function and ZipArchive lock files until archive created)
			if ($file->getFilename() != 'important.txt')
			{
				$filesToDelete[] = $filePath;
			}
		}
	}

	// Zip archive will be created only after closing object
	$zip->close();

	// Delete all files from "delete list"
	foreach ($filesToDelete as $file)
	{
		unlink($file);
	}


	function SaveMapImage($url,$MapSize,$var_mapnumber) {
		
		$file = 'processed/map'. $var_mapnumber . strtolower($MapSize). '.png'; 
		// Function to write image into file
		file_put_contents($file, file_get_contents($url));
	}


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
	
	

	
	
	// Auto downloads maps.zip to client, and then exits process.php
	$filepath = "download/";
	$file = "maps.zip";
	header('Content-type: octet/stream');
	header('Content-disposition: attachment; filename='.$file.';');
	header('Content-Length: '.filesize($filepath.$file));
	readfile($filepath.$file);
		
	exit;			
	
?>



