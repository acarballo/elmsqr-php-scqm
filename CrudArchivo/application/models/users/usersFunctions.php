<?php

function readPets($stringPets)
{
	if(!empty($usuario[8]))
		$pets=explode(',',$usuario[8]);
	else
		$pets=array();
	
	return $pets;
}


function readSports()
{
	if(!empty($usuario[9]))
		$sports=explode(',',$usuario[9]);
	else
		$sports=array();
}