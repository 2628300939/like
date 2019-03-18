<?php 

//方法一
$sum = 0;
for($i=0;$i<=100;$i++)
{
	$sum +=$i;
}
	echo $sum;
	echo "<br>";

//方法二
	echo array_sum(range(1,100));
	echo "<br>";
//方法三
$n = 101;
echo ($n-1)*($n/2);
echo "<br>";
 ?>

<form action="?" method="post">
	<input type="text" name="text">
	<input type="submit" value="提交" name="">
</form>

 <?php 
 //方法一
$text = $_POST['text'];
if($text === "")
{
	echo "没有传值";exit();
}

function demo($text)
{
	if($text>1)
	{
		$jc = ($text-1)*$text;
	}else{
		$jc = $text;
	}
	return $text;
}
	echo $text."的阶乘是".demo($text);

	echo "<br><br>";
  ?>