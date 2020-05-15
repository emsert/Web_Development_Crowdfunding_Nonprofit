<?php

// Programmer: Enes Sert
  $cityState = array(
		"21401"=> "Annapolis, MD",
		"21402" => "Annapolis, MD",
		"21044" => "Columbia, MD",
		"21045" => "Columbia, MD",
		"21221" => "Baltimore, MD",
		"21222" => "Baltimore, MD",
    "21228" => "Catonsville, MD"
	);

  $zip = $_GET["zip"];

  if (array_key_exists($zip, $cityState))
    print $cityState[$zip];
  else
    print "no match, no match";
?>
