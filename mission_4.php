<?php
//�ҏW�t�H�[��
$number2 = htmlspecialchars($_POST["number2"]);
$password3 = htmlspecialchars($_POST["password3"]);
$get_name = "name";
$get_comment = "comment";
$get_password = "password";

$dsn = "�f�[�^�x�[�X��";
$user = "���[�U��";
$password = "�p�X���[�h";
$pdo = new PDO($dsn,$user,$password);


$sql = "SELECT * FROM test2";
$results = $pdo -> query($sql);

if ($number2 != NULL){
	foreach ($results as $row){
		if (($row["id"] == $number2) && ($row["password"] == $password3)){
			//�ҏW���镔���̒l���擾
			$get_name = $row["name"];
			$get_comment = $row["comment"];
			$get_password = $row["password"];
		}
	}
}
?>


<html>
<form method="post" action="mission_4.php">

<input type="text" name="name" value="<?php echo mb_convert_encoding(htmlspecialchars($get_name, ENT_QUOTES),'sjis','utf-8');?>">
<input type="text" name="comment" value="<?php echo mb_convert_encoding(htmlspecialchars($get_comment, ENT_QUOTES),'sjis','utf-8');?>">
<input type="hidden" name="number3" value="<?php echo htmlspecialchars($number2, ENT_QUOTES);?>">
<input type="text" name="password1" value="<?php echo htmlspecialchars($get_password, ENT_QUOTES);?>">
<input type="hidden" name="password4" value="<?php echo htmlspecialchars($password3, ENT_QUOTES);?>">
<input type="submit" value="���M����">
</form>

<form method="post" action="mission_4.php">
<input type="text" name="number1" value="�폜�Ώ۔ԍ�">
<input type="text" name="password2" value="�p�X���[�h">
<input type="submit" value="�폜">
</form>

<form method="post" action="mission_4.php">
<input type="text" name="number2" value="�ҏW�Ώ۔ԍ�">
<input type="text" name="password3" value="�p�X���[�h">
<input type="submit" value="�ҏW">
</form>
</html>

<?php

//Mysql�ւ̐ڑ�
$dsn = "mysql:dbname=tt_171_99sv_coco_com;host=localhost";
$user = "tt-171.99sv-coco";
$password = "Br7kLP4n";
$pdo = new PDO($dsn,$user,$password);

//�e�[�u���쐬
$sql = "CREATE TABLE test2"
."("
."id INT,"
."name char(32),"
."comment TEXT,"
."time char(20),"
."password char(10)"
.");";
$stmt = $pdo -> query($sql);


$sql2 = "SELECT * FROM test2";
$results2 = $pdo -> query($sql2);
$id2 = 0;
foreach ($results2 as $row){
	if ($id2 < $row["id"]){
		$id2 = $row["id"];
	}
}


//�t�H�[������̒l�̎󂯎��
$name = htmlspecialchars($_POST["name"]);
$comment = htmlspecialchars($_POST["comment"]);
$time = date("Y/m/d H:i:s");
$password1 =  htmlspecialchars($_POST["password1"]);
//�폜
$number1 = htmlspecialchars($_POST["number1"]);
$password2 =  htmlspecialchars($_POST["password2"]);
//�ҏW
$number2 = htmlspecialchars($_POST["number2"]);
$number3 = htmlspecialchars($_POST["number3"]);
$password3 = htmlspecialchars($_POST["password3"]);
$password4 = htmlspecialchars($_POST["password4"]);


//MySQL�ɒl��}��
if (($name != NULL) && ($comment != NULL) && ($number3 == NULL)){
	$sql = $pdo -> prepare("INSERT INTO test2 (id,name,comment,time,password) VALUES (:id,:name,:comment,:time,:password)");
	$sql -> bindParam(":id",$id,PDO::PARAM_INT);
	$sql -> bindParam(":name",$name2,PDO::PARAM_STR);
	$sql -> bindParam(":comment",$comment2,PDO::PARAM_STR);
	$sql -> bindParam(":time",$time,PDO::PARAM_STR);
	$sql -> bindParam(":password",$password1,PDO::PARAM_INT);
	//�}������l�̐ݒ�
	$id = $id2 + 1;
	$name2 = mb_convert_encoding($name,"utf-8","sjis");
	$comment2 = mb_convert_encoding($comment,"utf-8","sjis");
	//���s
	$sql -> execute();
}


//�폜�t�H�[��
if ($number1 != NULL){
	foreach ($results as $row){
		if (($number1 == $row["id"]) && ($password2 == $row["password"])){
			$sql = "delete from test2 where id='$number1'";
			$result = $pdo -> query($sql);
		}
	}
}


//�ҏW
if ($number3 != NULL){
	foreach ($results as $row){
		if (($number3 == $row["id"]) && ($password4 == $row["password"])){
			$name2 = mb_convert_encoding($name,"utf-8","sjis");
			$comment2 = mb_convert_encoding($comment,"utf-8","sjis");
			$sql = "update test2 set name='$name2',comment='$comment2',time='$time',password = '$password1' where id='$number3'";
			$result = $pdo -> query($sql);
		}
	}
}


//�e�[�u���̒��g��\��
$sql = "SELECT * FROM test2";
$results = $pdo -> query($sql);
foreach ($results as $row){
	//$row�ɂ̓e�[�u���̃J������������
	echo $row["id"].", ";
	echo mb_convert_encoding($row["name"],"sjis","utf-8").", ";
	echo mb_convert_encoding($row["comment"],"sjis","utf-8").", ";
	echo $row["time"].", ";
	echo $row["password"]."<br>";
}

?>
