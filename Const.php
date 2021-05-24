<?php 
	
	define('NAMA', 'PATRIK WILLIAM');

	echo(NAMA);

	echo("<br>");

	class Test {
		const NAMA = "PATRIK WILLIAM";
	}

	$const = 'NAMA';
	echo(constant('Test::'.$const));	