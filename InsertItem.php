<?php
	require_once 'SQLTool.php';
	header("Content-type: text/html; charset=utf-8");
	$bill_item = isset($_POST['bill_item']) ? $_POST['bill_item'] : -1;
	$bill_time = isset($_POST['bill_time']) ? $_POST['bill_time'] : -1;
	$bill_money = isset($_POST['bill_money']) ? $_POST['bill_money'] : -1;
	$bill_other = isset($_POST['bill_other']) ? $_POST['bill_other'] : -1;
	$bill_place = isset($_POST['bill_place']) ? $_POST['bill_place'] : -1;

	if($bill_item != -1){
		include_once 'header.html';

		$sql = "INSERT INTO bill_records (bill_time, bill_money, bill_item, bill_place, bill_other) values('$bill_time', '$bill_money', '$bill_item', '$bill_place', '$bill_other')";
		$sqlTool = new SQLTool();
		$res = $sqlTool->execute_dql($sql);
		
		if($res == 1){
			echo '<div class="container">插入成功<br><a href="index.html">返回上一页</a></div>';
		}
	}else{
		echo "输入为空";
		echo "<a href='index.html'>返回</a>";
	}
	// $sql = "select cnword from words where enword='".$en_word."' limit 0,1";

	// if($row=mysql_fetch_row($res)){
	// 	echo $en_word." : ".$row[0];
	// }else{
	// 	echo "没有这个词条";
	// 	echo "<a href='WordView.php'>返回</a>";
	// }
	
	// mysql_free_result($res);
?>