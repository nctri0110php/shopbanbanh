<?php
	if(count($errors)>0)
	{
		echo '<div class="alert alert-danger" style="text-align:center"><ul>';
			foreach($errors->all() as $err)
			{
				echo "<li>$err</li>";
			}
		echo '</ul></div>';
	}
?>