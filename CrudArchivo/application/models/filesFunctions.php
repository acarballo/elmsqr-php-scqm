<?php


/**
 * Read pipe separated file to array
 * @param string $filename
 * @return array $arrayLine
 */
function readDataFromFile($filename)
{
	$content=file_get_contents($filename);
	$arrayFile=explode("\r",$content);
	foreach($arrayFile as $key => $line)
		$arrayLine[] = explode('|', $line);	
	return $arrayLine;
}