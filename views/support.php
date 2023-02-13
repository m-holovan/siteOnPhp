<?php
	$P_TITLE = "HelpPage";

	echo '<table>';
	echo '<tr><td class="l">Index</td><td class="r">Value</td>';
	foreach ($_SERVER as $param => $value) {
		if (isset($_SERVER[$param])) 
		{
			echo '<tr><td class="l">'.$param.'</td><td class="r">'.$value.'</td></>';
		}
	}
	echo '</table>';