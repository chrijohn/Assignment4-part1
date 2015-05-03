<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$counter=0;
	$comCount = 0;
	foreach($_POST as $key => $value)
	{

		$counter++;
	}	
	if ($counter>0)
	{	
		echo '{"Type":"POST","parameters":{';
		foreach($_POST as $key => $value)
		{
			if ($comCount > 0)
			{
				echo ',';
			}
			if ($value == "")
			{
				echo '"' . $key . '":"' . 'undefined' . '"';
			}
			else
			{
				echo '"' . $key . '":"' . $value . '"';
			}
			$comCount++;
		}
		echo '}}';
	}		
	if($counter == 0)
	{
		echo '{"Type":"POST", "parameters":null}';
	}
}



if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
	$counter=0;
	$comCount = 0;
	foreach($_GET as $key => $value)
	{

		$counter++;
	}	
	if ($counter>0)
	{	
		echo '{"Type":"GET","parameters":{';
		foreach($_GET as $key => $value)
		{
			if ($comCount > 0)
			{
				echo ',';
			}
			if ($value == "")
			{
				echo '"' . $key . '":"' . 'undefined' . '"';
			}
			else
			{
				echo '"' . $key . '":"' . $value . '"';
			}
			$comCount++;
		}
		echo '}}';
	}		
	if($counter == 0)
	{
		echo '{"Type":"GET", "parameters":null}';
	}
}

?>