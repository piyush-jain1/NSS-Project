<?php

	include 'conn.php';

	$coloumn = array("name","chuba","village","house","househead","sex","age","phone","add_village","add_co","add_chuba","add_po","add_dist","add_state","add_pin","pvillage","pco","pchuba","ppo","pdist","pstate","ppin","name1","age1","relation1","qual1","occ1","name2","age2","relation2","qual2","occ2","name3","age3","relation3","qual3","occ3","name4","age4","relation4","qual4","occ4","name5","age5","relation5","qual5","occ5","name6","age6","relation6","qual6","occ6","name7","age7","relation7","qual7","occ7","name8","age8","relation8","qual8","occ8","houstype","vehicle","vehicletype","occupation","handloom");

	echo "gbdbhdf";
	$data=array();

	foreach ($coloumn as $value) {
		array_push($data,$_POST[$value]);
	}

	for($i=0;$i<count(coloumn),$i++){
		$sql = "INSERT INTO data($coloumn[$i]) VALUES ('$data[$i]') "
	}


	include 'disconn.php';
?>