<html>
<title>�w�K���</title>
<h1>php�w�K</h1>

<?php
//url�𗘗p�������ڑJ�ڂ�h��(���O�C�����Ȃ��Ɠ���Ȃ�)
/*
$enable_referer = 'http://tt-171.99sv-coco.com/mission6/login.php'; 
$enable_referer2 = 'http://tt-171.99sv-coco.com/mission6/learning.php';
if (!isset($_SERVER['HTTP_REFERER']) || (($_SERVER['HTTP_REFERER'] !== $enable_referer)&&($_SERVER['HTTP_REFERER'] !== $enable_referer2))){
	echo '<a href="http://tt-171.99sv-coco.com/mission6/login.php">'."���O�C�����Ă�������".'</a>';
	header("HTTP/1.1 404 Not Found");
  	exit(1);
}
*/
?>


<!-----------������̏o��--------------->
<p>
--������̏o��--<br>
�l�̏o�͂ɂ�echo��print�𗘗p���܂��D<br>
�Ⴆ�΁C�uHello World�v�ƕ\���������ꍇ�́uecho "Hello World";�v
�������́uprint "Hello World";�v�ƋL�q���܂��D
</p>
<form method="post" action="learning.php">
<p>���ۂɏ����Ă݂悤��</p>
<input type="text" name="echo_print" placeholder="�����ɋL�q���Ă݂悤">
<input type="submit" value="���s"><br>
</form>
<?php
$echo_hello = 'echo \"Hello World\";';
$print_hello = 'print \"Hello World\";';
$echo_print = $_POST["echo_print"];
if($echo_print != NULL){
	if(($echo_print == $echo_hello) || ($echo_print == $print_hello)){
		echo "Hello World";
	}
	else{
			echo "�v���O����������������܂���";
		}
}
?>
<br><br>



<!-----------�ϐ��Ɋi�[���ďo��--------------->
<p>
--�ϐ��Ɋi�[���ďo��--<br>
�ϐ��̐錾�ɂ�$�𗘗p���܂��D<br>
�Ⴆ�΁Cvariable�Ƃ����ϐ������Chensuu�Ƃ�����������i�[����ۂɂ�<br>
�u$variable = "hensuu";�v�ƋL�q���܂��D
���Ȃ݂ɁC���l���i�[����ۂɂ́C�_�u���N�H�[�e�[�V�����͕s�v�ł��D<br>
�������C���l�𕶎���Ƃ��Ċi�[����ۂɂ̓_�u���N�H�[�e�[�V�����ň͂��Ă��������D<br>

�ϐ��̏o�͂ɂ�echo��print�𗘗p���܂��D<br>
$variable�Ɋi�[�����l���o�͂���ɂ�<br>
�uecho $variable;�v�������́uprint $variable;�v�ƋL�q���܂��D<br>
�ϐ����o�͂���ہC�_�u���N�H�[�e�[�V�����ň͂ޕK�v�͂���܂���D
</p>
<?php
	$value = "1�s�ځF\$variable�ɕ�����hensuu���i�["."\n"."2�s�ځFecho��������print�ŕϐ��̒l���o��";
?>
<form method="post" action="learning.php">
<p>���ۂɏ����Ă݂悤��</p>
<textarea name="variable" cols="40" rows="2"><?php echo (htmlspecialchars($value, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="���s"><br>
</form>



<?php
$variable = $_POST["variable"];
$hensuu = '$variable = \"hensuu\";';
$echo_hensuu = "echo \$variable;";
$print_hensuu = "print \$variable;";
if($variable != NULL){
	$array = explode("\n",$variable);
	$array[0] = trim($array[0]);
	$array[1] = trim($array[1]);
	
	if(($array[0] == $hensuu)&&(($array[1] == $echo_hensuu)||($array[1] == $print_hensuu))){
		echo "hensuu";
	}
	else{
		echo "�v���O����������������܂���";
	}
}
?>
<br><br>


<!-----------if�����g���Ă݂悤--------------->
<p>
--if���g���ď�������--<br>
�u�����`�ł���΁v�Ƃ�����������ɂ�if�����g���܂��D<br>
if���͎�ɁC2�̒l�̑召�֌W�E�������E�������Ȃ��Ȃǂ̏����ɂ��<br>
������ς���ꍇ�Ɏg���܂��D<br>
if����<br>
if(������){<br>
&emsp;&emsp;&emsp;&emsp;������<br>
}<br>
�Ƃ����`�ŋL�q���܂��D<br>
�������̑O�̃X�y�[�X���C���f���g(������)�ƌĂсC������g�����ƂŃv���O���������₷���Ȃ�܂��D<br>
�C���f���g������ۂ́CTab�L�[�������Ă��������D<br>
�܂��C���񏑂����Ƃ͂��܂��񂪁Celseif���g����<br>
()�̒��ɉ����������݂����Ȃ��ꍇ��else�𗘗p���܂��D<br>
����́C�l�����������ɓ�����������������Ă݂܂��傤�D<br>
�l�����������Ƃ�������r���Z�q�́u==�v�ł��D<br>
�ϐ�i��1�����u$i = 1;�v�Cif���̏������uif($i == 1){�v���L�q���܂��D<br>
���ɏ������uecho "i�ɂ�1�������Ă��܂�";�v���L�q��(����̓C���f���g�Ȃ�)<br>
�Ō��if������܂��u}�v�D<br>
</p>

<?php
	$value2 = "1�s�ځF\$i�ɐ��l1���i�["."\n"."2�s�ځFif���̎n�܂���L�q"."\n"
	."3�s�ځF���������L�q"."\n"."4�s�ځFif�������";
?>

<form method="post" action="learning.php" >
<p>���ۂɏ����Ă݂悤��</p>
<textarea name="branch" cols="40" rows="4"><?php echo (htmlspecialchars($value2, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="���s"><br>
</form>

<?php
$branch = $_POST["branch"];
$i_in = '$i = 1;';
$if_start = "if(\$i == 1){";
$process = 'echo \"i�ɂ�1�������Ă��܂�\";';
$if_end = "}";
if($branch != NULL){
	$array = explode("\n",$branch);
	$array[0] = trim($array[0]);
	$array[1] = trim($array[1]);
	$array[2] = trim($array[2]);
	$array[3] = trim($array[3]);
	
	if($array[0] != $i_in){
		echo "i�ɂ�1�������Ă��܂���<br>";
	}
	elseif(($array[1] == $if_start) && ($array[2] == $process) && ($array[3] == $if_end)){
		echo "i�ɂ�1�������Ă��܂�<br>";
	}
	else{
		echo "�v���O����������������܂���<br>";
	}
}
?>
<IMG border="0" name="if" src="http://tt-171.99sv-coco.com/mission6/examples/operator.PNG" width=400" height="150"></IMG>
<br><br><br>



<!-----------for���ɂ��Ēm�낤--------------->
<p>
--for���g���ă��[�v����--<br>
���[�v(�J��Ԃ�����)���s���ꍇ�ɂ́Cwhile����for�����g���܂��D<br>
�����for���ɂ��Ċw�K���Ă����܂��D<br>
for����<br>
for(�����l; ���[�v�̏�����; ������){<br>
&emsp;&emsp;&emsp;&emsp;������<br>
}<br>
�Ƃ����`�ŋL�q���܂��D<br>
�J��Ԃ����̊J�n���ɏ����l���]������<br>
��������TRUE�̏ꍇ�Ƀ��[�v�������p���CFALSE�̏ꍇ�̓��[�v�������I������܂��D<br>
�e���[�v�����̌�ɑ��������]������C�w�肵���l���������܂��D<br>
����́C�\�������l��1�������C1�`5�܂ŕ\������悤�ɏ����Ă݂܂��傤�D<br>
�����l��1�����($i=1;)�C���[�v�̏�������5�ȉ��ɂ�($i<=5)�C��������$i=$i+1�ɂ��܂�($i++)�D<br>
�������܂Ƃ߂�ƁC1�s�ڂ́ufor($i=1; $i<=5; $i++){�v�ƂȂ�܂��D<br>
���ɏ������uecho $i;�v���L�q��(����̓C���f���g�Ȃ�)<br>
�Ō��if������܂��u}�v�D<br>
</p>

<?php
	$for_box = "1�s�ځFfor���̏��������L�q"."\n"."2�s�ځF���������L�q"."\n"."3�s�ځFfor�������";
?>

<form method="post" action="learning.php" >
<p>���ۂɏ����Ă݂悤��</p>
<textarea name="loop" cols="40" rows="3"><?php echo (htmlspecialchars($for_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="���s"><br>
</form>

<?php
$loop = $_POST["loop"];
$for_start = 'for($i=1; $i<=5; $i++){';
$for_process = 'echo $i;';
$for_end = "}";

if($loop != NULL){
	$array = explode("\n",$loop);
	$array[0] = trim($array[0]);
	$array[1] = trim($array[1]);
	$array[2] = trim($array[2]);

	if(($array[0] == $for_start) && ($array[1] == $for_process) && ($array[2] == $for_end)){
		for($i=1; $i<=5; $i++){
			echo "$i";
		}
	}
	else{
		echo "�v���O����������������܂���";
	}
}

?>
<br><br><br>



<!-----------for���Ŕz���\�����悤--------------->
<p>
--for���g���Ĕz���\�����悤--<br>
�ϐ��ł́C1�̕ϐ��ɂ�1�̃f�[�^���i�[���܂����D<br>
�ϐ���0���珇�Ԃɔԍ���t���Ċg�����C�����̃f�[�^���i�[�ł�����̂�z��ƌĂт܂��D<br>
�܂��ŏ��ɁC�z��ɒl�������܂��D<br>
����́Cfruits�Ƃ����z���orange�Eapple�Egrape�Ƃ����f�[�^���i�[���܂��D<br>
�u$fruits = array("orange","apple","grape");�varray�Ƃ͔z��̂��Ƃł��D<br>
���̂܂�echo $fruits;�Ə����Ă�array�ƕ\������邾���ł��D<br>
�f�[�^��\��������ɂ́C�ԍ����w�肷��K�v������܂��D<br>
��̓I�ɂ́Cecho $fruits[0];�̂悤�ȏ����������܂��D<br>
���̎��ɁCfor�����g����1��echo�����������őS�ĕ\�����邱�Ƃ��ł��܂��D<br>
�����l��0($i=0)�C���[�v�񐔂̓f�[�^�̐�($i<3)�C������+1����($i++)�ł��D<br>
�\���ɂ�echo $fruits[$i];���g�p���܂����C����͉��s�������<br>
�uecho $fruits[$i]."&lt;br&gt;";�v�ƋL�q���Ă݂܂��傤�D<br>
</p>

<?php
	$array_box = "1�s�ځF�z��ɒl���i�["."\n"."2�s�ځFfor���̏��������L�q"."\n"."3�s�ځF�z���\��������"."\n"."4�s�ځFfor�������";
?>

<form method="post" action="learning.php" >
<p>���ۂɏ����Ă݂悤��</p>
<textarea name="array" cols="40" rows="4"><?php echo (htmlspecialchars($array_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="���s"><br>
</form>

<?php
$fruits = array("orange","apple","grape");
$array_get = $_POST["array"];
$array_in = '$fruits = array(\"orange\",\"apple\",\"grape\");';
$array_start = 'for($i=0; $i<3; $i++){';
$array_process = 'echo $fruits[$i].\"<br>\";';
$array_end = "}";

if($array_get != NULL){
	$array = explode("\n",$array_get);
	$array[0] = trim($array[0]);
	$array[1] = trim($array[1]);
	$array[2] = trim($array[2]);
	$array[3] = trim($array[3]);

	if(($array[0] == $array_in) && ($array[1] == $array_start) && ($array[2] == $array_process) && ($array[3] == $array_end)){
		for($i=0; $i<3; $i++){
			echo $fruits[$i]."<br>";
		}
	}
	else{
		echo "�v���O����������������܂���";
	}
}
?>
<br><br>



<!-----------���t�⎞�ԏ��̎擾--------------->
<p>
--���t�⎞�ԏ��̎擾�����Ă݂悤--<br>
���݂̓��t�⎞�Ԃ𓾂�ɂ�data�֐��𗘗p���܂��D<br>
����́C�N�̎擾��Y�C���̎擾��m�C���̎擾��d<br>
���̎擾��H�C���̎擾��i�C�b�̎擾��s���g���Ă݂܂��傤�D<br>
��̓I�ɂ́Cdata(YmdHis);�ƋL�q����̂ł����C���ꂾ�Ɣ��Ɍ���̂�<br>
�u$time = date("Y/m/d H:i:s");�v�ƋL�q���C$time��\�����Ă݂܂��傤�D<br>
</p>

<?php
	$date_box = "1�s�ځF�ϐ�time�ɓ��������i�["."\n"."2�s�ځF�ϐ�time���o��";
?>

<form method="post" action="learning.php" >
<p>���ۂɏ����Ă݂悤��</p>
<textarea name="day_time" cols="40" rows="2"><?php echo (htmlspecialchars($date_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="���s"><br>
</form>

<?php
$time = date("Y/m/d H:i:s");
$day_time = $_POST["day_time"];
$day_time_first = '$time = date(\"Y/m/d H:i:s\");';
$day_time_last = 'echo $time;';

if($day_time != NULL){
	$array = explode("\n",$day_time);
	$array[0] = trim($array[0]);
	$array[1] = trim($array[1]);

	if(($array[0] == $day_time_first) && ($array[1] == $day_time_last)){
		echo $time."<br>";
	}
	else{
		echo "�v���O����������������܂���"."<br>";
	}
echo "<br>";
}
?>

<IMG border="0" name="date" src="http://tt-171.99sv-coco.com/mission6/examples/date.PNG" width="320" height="370"></IMG>
<br><br><br>



<!-----------text�t�@�C���ւ̏�������--------------->
<p>
--PHP��Text�t�@�C���ɏ������݂��悤--<br>
PHP�Ńe�L�X�g�t�@�C���ɏ������݂��s����<br>
�t�@�C���̃I�[�v���E�t�@�C���ւ̏������݁E�t�@�C���̃N���[�Y��3�i�K�̍H��������܂��D<br>
�t�@�C���̃I�[�v���ɂ� fopen(filename,mode); �𗘗p���܂��D<br>
filename�ł͊J�������t�@�C���̃p�X���Cmode�ł̓t�@�C�����J�����[�h���w�肵�܂��D<br>
�t�@�C���ւ̏������݂ɂ� fwrite(filename,�������ݓ��e); �𗘗p���܂��D<br>
�t�@�C���̃N���[�Y�ɂ� fclose(filename); �𗘗p���܂��D<br><br>

�Ⴆ�΁Ctext.txt�Ƃ����t�@�C����learning�Ƃ�����������i�[����ɂ́C<br>
$filename = "text.txt";<br>
$insert = "learning";<br>
$fp = fopen($filename,a);<br>
fwrite($fp,$insert);<br>
fclose($fp);<br>
�ƋL�q���܂��D<br>
�������C����̃v���O�����ł͌��ʂ͕\������܂���D<br>
</p>

<?php
	$file_box = "1�s�ځF�ϐ�filename�Ƀt�@�C���̃p�X���i�["."\n"
	."2�s�ځF�ϐ�insert�ɕ�������i�["."\n"
	."3�s�ځF�ϐ�fp�Ƀt�@�C���I�[�v�����L�q"."\n"
	."4�s�ځF�e�L�X�g�t�@�C���ɕ��������������"."\n"
	."5�s�ځF�t�@�C�������";
?>

<form method="post" action="learning.php" >
<p>���ۂɏ����Ă݂悤��</p>
<textarea name="text" cols="40" rows="5"><?php echo (htmlspecialchars($file_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="���s"><br>
</form>

<?php
$filename = '$filename = \"text.txt\";';
$insert = '$insert = \"learning\";';
$fp = '$fp = fopen($filename,a);';
$fwrite = 'fwrite($fp,$insert);';
$fclose = 'fclose($fp);';

$text_get = $_POST["text"];

if($text_get != NULL){
	$array = explode("\n",$text_get);
	$array[0] = trim($array[0]);
	$array[1] = trim($array[1]);
	$array[2] = trim($array[2]);
	$array[3] = trim($array[3]);
	$array[4] = trim($array[4]);

	if(($array[0] == $filename) && ($array[1] == $insert) && ($array[2] == $fp) && ($array[3] == $fwrite) && ($array[4] == $fclose)){
		echo "�v���O�����͐������ł��D<br>";
	}
	else{
		echo "�v���O����������������܂���"."<br>";
	}
}
?>
<IMG border="0" name="date" src="http://tt-171.99sv-coco.com/mission6/examples/fopen.PNG" width="500" height="140"></IMG>
<br><br><br>



<!-----------�O�����Z�q--------------->
<p>
--�O�����Z�q���g���Ă݂悤--<br>
�O�����Z�q���g���ƁCif/else��1���Œu�������邱�Ƃ��o����D<br>
������ �F �ϐ� = (������)? true�̎��̒l : false�̎��̒l<br><br>

�Ⴆ��<br>
if($box == "box"){<br>
&emsp;&emsp;&emsp;&emsp;$variable = 1;<br>
}else{<br>
&emsp;&emsp;&emsp;&emsp;$variable = "���g��box�ł͂���܂���":<br>
}<br>
���O�����Z�q���g���ď�����<br>
�u$variable = ($box == "box")? 1 : "���g��box�ł͂���܂���";�v<br>
�ƂȂ�܂��D<br>
</p>

<?php
	$Ternary = "1�s�ځF�ϐ�box�ɕ�����box���i�["."\n"
	."2�s�ځF�O�����Z�q���g���ĕϐ�variable�ɒl���i�["."\n"
	.'3�s�ځF�ϐ�$variable��\��������';
?>

<form method="post" action="learning.php" >
<p>���ۂɏ����Ă݂悤(����́C1�s�ڂ�$box = �D���Ȓl�������͕����� �Ƃ��Ă�ok�ł��D)��</p>
<textarea name="Ternary_operator" cols="50" rows="3"><?php echo (htmlspecialchars($Ternary, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="���s"><br>
</form>

<?php

$Ternary_first = '$box = \"box\";';
$Ternary_second = '$variable = ($box == \"box\")? 1 : \"���g��box�ł͂���܂���\";';
$Ternary_end = 'echo $variable;';

$Ternary_get = $_POST["Ternary_operator"];

if($Ternary_get != NULL){
	$array = explode("\n",$Ternary_get);
	$array[0] = trim($array[0]);
	$array[1] = trim($array[1]);
	$array[2] = trim($array[2]);

	if(($array[0] == $Ternary_first) && ($array[1] == $Ternary_second) && ($array[2] == $Ternary_end)){
		echo "1<br>";
	}
	elseif(($array[0] != $Ternary_first) && ($array[1] == $Ternary_second) && ($array[2] == $Ternary_end)){
		echo "���g��box�ł͂���܂���<br>";
	}
	else{
		echo "�v���O����������������܂���"."<br>";
	}
}
?>



<!-----------""��''�̈Ⴂ��m�낤--------------->
<p>
--""��''�̈Ⴂ��m�낤--<br>
�_�u���N�H�[�e�[�V����("")���g���ƁC�����񒆂̕ϐ���ϐ��l�ɒu�����܂���<br>
�V���O���N�H�[�e�[�V����('')���g���ƁC�����񒆂̕ϐ���ϐ��l�ɒu�����܂���D<br>
��̓I�Ɏg���Ă݂��<br>
�_�u���N�H�[�e�[�V�����F�uecho "�_�u���N�H�[�e�[�V�����ŕ\�� = $different&lt;br&gt;";�v<br>
�V���O���N�H�[�e�[�V�����F�uecho '�V���O���N�H�[�e�[�V�����ŕ\�� = $different';�v<br>
�ƂȂ�܂��D<br>
</p>

<?php
	$different_box = "1�s�ځF�ϐ�different�ɕ�����difference���i�["."\n"
	."2�s�ځF�_�u���N�H�[�e�[�V�����ŕ\��"."\n"
	.'3�s�ځF�V���O���N�H�[�e�[�V�����ŕ\��';
?>

<form method="post" action="learning.php" >
<p>���ۂɕ\�����Ă݂悤��</p>
<textarea name="different" cols="60" rows="3"><?php echo (htmlspecialchars($different_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="���s"><br>
</form>


<?php

$different = "difference";


$different_first = '$different = \"difference\";';
$different_second = 'echo \"�_�u���N�H�[�e�[�V�����ŕ\\\�� = $different<br>\";';
$different_end = "echo \'�V���O���N�H�[�e�[�V�����ŕ\\\�� = \$different\';";
$different_get = $_POST["different"];

if($different_get != NULL){
	$array = explode("\n",$different_get);
	$array[0] = trim($array[0]);
	$array[1] = trim($array[1]);
	$array[2] = trim($array[2]);
/*
	echo $array[0]."<br>";
	echo $array[1]."<br>";
	echo $array[2]."<br><br>";
	
	echo $different_first."<br>";
	echo $different_second."<br>";
	echo $different_end."<br>";
*/
	if(($array[0] == $different_first) && ($array[1] == $different_second) && ($array[2] == $different_end)){
		echo "�_�u���N�H�[�e�[�V�����ŕ\�� = $different<br>";
		echo '�V���O���N�H�[�e�[�V�����ŕ\�� = $different';
	}
	else{
		echo "�v���O����������������܂���"."<br>";
	}
}
?>
<br><br><br>


<!-----------�R�����g�A�E�g�ɂ��Ēm�낤--------------->
<p>
--�R�����g�A�E�g���g����--<br>
�����l�ō�Ƃ�����ہC���̐l�����Ă�������悤�ɂ���������<br>
��Ō����������ɁC������₷�����邽�߂�<br>
�R�����g�������Ă����ɂ́C�R�����g�A�E�g���g���܂��D<br>
1�s�̎���//���C�����s�̎���/**/���g���܂��D<br>
�Ⴆ�΁�<br>
�u//�R�����g��}���v<br>
�u/*<br>
�R�����g��}��<br>
�R�����g��}��<br>
*/�v<br>
�������C����̃v���O�����ł͌��ʂ͕\������܂���D<br>
</p>

<?php
	$out_box = "1�s�ځF1�s�R�����g�A�E�g"."\n"
	."2�`5�s�ځF2�s�R�����g�A�E�g";
?>

<form method="post" action="learning.php" >
<p>���ۂɕ\�����Ă݂悤��</p>
<textarea name="comment_out" cols="40" rows="5"><?php echo (htmlspecialchars($out_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="���s"><br>
</form>

<?php

$out_first = '//�R�����g��}��';
$out_second = '/*';
$out_third = '�R�����g��}��';
$out_fourth = '�R�����g��}��';
$out_end = '*/';
$out_get = $_POST["comment_out"];

if($out_get != NULL){
	$array = explode("\n",$out_get);
	$array[0] = trim($array[0]);
	$array[1] = trim($array[1]);
	$array[2] = trim($array[2]);
	$array[3] = trim($array[3]);
	$array[4] = trim($array[4]);


	echo $array[0]."<br>";
	echo $array[1]."<br>";
	echo $array[2]."<br>";
	echo $array[3]."<br>";
	echo $array[4]."<br><br>";

	echo $out_first."<br>";
	echo $out_second."<br>";
	echo $out_third."<br>";
	echo $out_fourth."<br>";
	echo $out_end."<br>";


	if(($array[0] == $out_first) && ($array[1] == $out_second) && ($array[2] == $out_third) && ($array[3] == $out_fourth) && ($array[4] == $out_end)){
		echo "�v���O�����͐������ł�<br>";
	}
	else{
		echo "�v���O����������������܂���<br>";
	}
}
?>
<br><br><br>



<!-----------form���瑗�M���ꂽ�l���󂯎�낤--------------->
<p>
--form���瑗�M���ꂽ�l���󂯎�낤--<br>
�����v���O�������L�q�C���s���Ă��镔����form�ƌĂт܂��D<br>
���s�{�^�����������Ƃ��ɋL�q�����v���O�������󂯎����@�ɂ��Ċw��ł݂܂��傤�D<br>
form�̍쐬�ɂ��ẮCphp�ł͂Ȃ�html�ŋL�q���邽�߁C������ۂɏ����Ă݂�Ƃ������͂��܂���D<br>
�Ⴆ��<br>
&lt;form method="post" action="learning.php" &gt;<br>
&lt;textarea name="receive" cols="60" rows="3"&gt;&lt;/textarea&gt;<br>
&lt;input type="submit" value="���s"&gt;<br>
&lt;/form&gt;<br>
�Ƃ����t�H�[��������Ƃ��܂��D<br>
�����v���O��������������ł���g��textarea�̕����ł��D<br>
���̏������񂾒l���󂯎��ɂ�$_POST["receive"]�𗘗p���܂��D<br>
�Ⴆ�΁F�u$received = $_POST["receive"];�v<br>
����̓t�H�[������C�󂯎��܂����C�Ƃ����������M���ꂽ�Ɖ��肵�ăv���O�����������Ă݂܂��傤�D<br>
</p>

<?php
	$receive_box = "1�s�ځF�ϐ�received�Ƀt�H�[������̒l���i�["."\n"
	."2�s�ځF�ϐ�received���o��";
?>

<form method="post" action="learning.php" >
<p>���ۂɋL�q���Ă݂悤��</p>
<textarea name="receive" cols="40" rows="2"><?php echo (htmlspecialchars($receive_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="���s"><br>
</form>

<?php
$receive_first = '$received = $_POST[\"receive\"];';
$receive_end = 'echo $received;';
$receive_get = $_POST["receive"];

if($receive_get != NULL){
	$array = explode("\n",$receive_get);
	$array[0] = trim($array[0]);
	$array[1] = trim($array[1]);

	if(($array[0] == $receive_first) && ($array[1] == $receive_end)){
		echo "�󂯎��܂���<br>";
	}
	else{
		echo "�v���O����������������܂���<br>";
	}
}
?>

</html>
