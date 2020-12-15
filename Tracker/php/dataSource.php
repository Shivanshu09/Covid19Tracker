<?php 

	$jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
	$data = json_decode($jsonData, true);

	foreach ($data as $key => $value) {
		$total_days = count($value) - 1;
		$days_prev = $total_days - 1;
	}

	$total_confirmed = 0;
	$total_recovered = 0;
	$total_deaths = 0;
	$total_confirmed_increase = 0;
	$total_recovered_increase = 0;
	$total_deaths_increase = 0;

	foreach ($data as $key => $value) {
		$total_confirmed = $total_confirmed + $value[$total_days]['confirmed'];
		$total_recovered = $total_recovered + $value[$total_days]['recovered'];
		$total_deaths = $total_deaths + $value[$total_days]['deaths'];
		$total_confirmed_increase = $total_confirmed_increase + $value[$days_prev]['confirmed'];
		$total_recovered_increase = $total_recovered_increase + $value[$days_prev]['recovered'];
		$total_deaths_increase = $total_deaths_increase + $value[$days_prev]['deaths']; 
	} 
?>