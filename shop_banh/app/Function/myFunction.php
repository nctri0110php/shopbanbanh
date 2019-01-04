<?php
function select_option($data,$selected=0)
{
	foreach ($data as $key => $value) {
		$id=$value["id"];
		$name=$value["name"];
		if($selected!=0 && $id==$selected){
			echo "<option value='".$id."' selected='selected'>".$name."</option>";
		}
		else{
			echo "<option value='".$id."'>".$name."</option>";
		}
		// $selected=$id;
	}
}
?>