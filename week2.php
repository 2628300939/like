<?php 

$arr = ['1','2','3','4'];

	for($i=0;$i<100;$i++)
	{
		$str = shuffle($arr);
		$strs[$i]=$str;
	}
	$str = array_unique($strs);
	print_r($str);



	//第二题，，单例模式

	class Db
	{
		private static $_instance = null;
		public function constant()
		{

		}
		public function clone()
		{

		}
		private static function getInstance()
		{
			if(!(self::instance Instanceof PDO))
			{
				self::instance;
			}
			return self::instance;
		}
	}



//第三题，文件件路径

	$dir = 'F:\xuexi\WAMP\phpstudy\WWW\tp\week';
	my_dir($dir);

function my_dir($dir)
{
	for($i=0;$i<100;$++)
	{
		
	}
}



//第四题，，路径

	$aPath='/a/b/c/d/e/f/test.php';
	$bPath='/a/b/d/c/test.php';


	function finCommonPath($aPath,$bPath)
	{
		$result = [];
		$aPathArr=explode(delimiter,$aPath);
		$bPathArr=explode(delimiter,$bPath);
		$count = count($aPathArr)>count($bPathArr)?count($bPathArr):count($aPathArr);
		for($i=0;$i<$count;$i++)
		{
			if($aPathArr[$i]==$bPathArr[$i])
			{
				$result[] = $aPathArr[$i];
				$res=$result[$i];
			}else{
				break;
			}
		}
		$data = implode(glue,$res);
		return demo($data);

	}


	//第五题，倒计时

	include 'week2.html';
	$data = time();
	var_dump($data);die;




	
 ?>

