<?php 
	header("Content-type:text/html;charset=utf-8");
	$startTime   = microtime(true);
	$startMemory = memory_get_usage();
	echo $startMemory.'<br>';
	$a = 1;
	for ($i = 1; $i <= 10000; $i++){
		$a++;
	}
	echo $a.'<br>';
	$endTime   = microtime(true);
	$endMemory = memory_get_usage();
	echo $endMemory.'<br>';
	$runtime   = ($endTime - $startTime)*1000;
	$useMemory = ($endMemory - $startMemory)/1024;
	echo "运行时间：{$runtime} 毫秒<br>";
	echo "耗费内存：{$useMemory}K <br>";
	unset($endMemory);
	echo memory_get_usage();
?>