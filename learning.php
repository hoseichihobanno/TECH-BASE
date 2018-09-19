<html>
<title>学習画面</title>
<h1>php学習</h1>

<?php
//urlを利用した直接遷移を防ぐ(ログインしないと入れない)
/*
$enable_referer = 'http://tt-171.99sv-coco.com/mission6/login.php'; 
$enable_referer2 = 'http://tt-171.99sv-coco.com/mission6/learning.php';
if (!isset($_SERVER['HTTP_REFERER']) || (($_SERVER['HTTP_REFERER'] !== $enable_referer)&&($_SERVER['HTTP_REFERER'] !== $enable_referer2))){
	echo '<a href="http://tt-171.99sv-coco.com/mission6/login.php">'."ログインしてください".'</a>';
	header("HTTP/1.1 404 Not Found");
  	exit(1);
}
*/
?>


<!-----------文字列の出力--------------->
<p>
--文字列の出力--<br>
値の出力にはechoやprintを利用します．<br>
例えば，「Hello World」と表示したい場合は「echo "Hello World";」
もしくは「print "Hello World";」と記述します．
</p>
<form method="post" action="learning.php">
<p>実際に書いてみよう↓</p>
<input type="text" name="echo_print" placeholder="ここに記述してみよう">
<input type="submit" value="実行"><br>
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
			echo "プログラムが正しくありません";
		}
}
?>
<br><br>



<!-----------変数に格納して出力--------------->
<p>
--変数に格納して出力--<br>
変数の宣言には$を利用します．<br>
例えば，variableという変数を作り，hensuuという文字列を格納する際には<br>
「$variable = "hensuu";」と記述します．
ちなみに，数値を格納する際には，ダブルクォーテーションは不要です．<br>
ただし，数値を文字列として格納する際にはダブルクォーテーションで囲ってください．<br>

変数の出力にもechoやprintを利用します．<br>
$variableに格納した値を出力するには<br>
「echo $variable;」もしくは「print $variable;」と記述します．<br>
変数を出力する際，ダブルクォーテーションで囲む必要はありません．
</p>
<?php
	$value = "1行目：\$variableに文字列hensuuを格納"."\n"."2行目：echoもしくはprintで変数の値を出力";
?>
<form method="post" action="learning.php">
<p>実際に書いてみよう↓</p>
<textarea name="variable" cols="40" rows="2"><?php echo (htmlspecialchars($value, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="実行"><br>
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
		echo "プログラムが正しくありません";
	}
}
?>
<br><br>


<!-----------if文を使ってみよう--------------->
<p>
--ifを使って条件分岐--<br>
「もし～であれば」という条件分岐にはif文を使います．<br>
if文は主に，2つの値の大小関係・等しい・等しくないなどの条件により<br>
処理を変える場合に使われます．<br>
if文は<br>
if(条件式){<br>
&emsp;&emsp;&emsp;&emsp;処理式<br>
}<br>
という形で記述します．<br>
処理式の前のスペースをインデント(字下げ)と呼び，これを使うことでプログラムが見やすくなります．<br>
インデントを入れる際は，Tabキーを押してください．<br>
また，今回書くことはしませんが，elseifを使う際<br>
()の中に何も書き込みたくない場合はelseを利用します．<br>
今回は，値が等しい時に動く条件分岐を書いてみましょう．<br>
値が等しいことを示す比較演算子は「==」です．<br>
変数iに1を入れ「$i = 1;」，if文の条件式「if($i == 1){」を記述します．<br>
次に処理式「echo "iには1が入っています";」を記述し(今回はインデントなし)<br>
最後にif文を閉じます「}」．<br>
</p>

<?php
	$value2 = "1行目：\$iに数値1を格納"."\n"."2行目：if文の始まりを記述"."\n"
	."3行目：処理式を記述"."\n"."4行目：if文を閉じる";
?>

<form method="post" action="learning.php" >
<p>実際に書いてみよう↓</p>
<textarea name="branch" cols="40" rows="4"><?php echo (htmlspecialchars($value2, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="実行"><br>
</form>

<?php
$branch = $_POST["branch"];
$i_in = '$i = 1;';
$if_start = "if(\$i == 1){";
$process = 'echo \"iには1が入っています\";';
$if_end = "}";
if($branch != NULL){
	$array = explode("\n",$branch);
	$array[0] = trim($array[0]);
	$array[1] = trim($array[1]);
	$array[2] = trim($array[2]);
	$array[3] = trim($array[3]);
	
	if($array[0] != $i_in){
		echo "iには1が入っていません<br>";
	}
	elseif(($array[1] == $if_start) && ($array[2] == $process) && ($array[3] == $if_end)){
		echo "iには1が入っています<br>";
	}
	else{
		echo "プログラムが正しくありません<br>";
	}
}
?>
<IMG border="0" name="if" src="http://tt-171.99sv-coco.com/mission6/examples/operator.PNG" width=400" height="150"></IMG>
<br><br><br>



<!-----------for文について知ろう--------------->
<p>
--forを使ってループする--<br>
ループ(繰り返し処理)を行う場合には，while文やfor文を使います．<br>
今回はfor文について学習していきます．<br>
for文は<br>
for(初期値; ループの条件式; 増減式){<br>
&emsp;&emsp;&emsp;&emsp;処理式<br>
}<br>
という形で記述します．<br>
繰り返し文の開始時に初期値が評価され<br>
条件式がTRUEの場合にループ処理が継続，FALSEの場合はループ処理が終了されます．<br>
各ループ処理の後に増減式が評価され，指定した値が増減します．<br>
今回は，表示される値が1ずつ増え，1～5まで表示するように書いてみましょう．<br>
初期値に1を入れ($i=1;)，ループの条件式を5以下にし($i<=5)，増減式を$i=$i+1にします($i++)．<br>
これらをまとめると，1行目は「for($i=1; $i<=5; $i++){」となります．<br>
次に処理式「echo $i;」を記述し(今回はインデントなし)<br>
最後にif文を閉じます「}」．<br>
</p>

<?php
	$for_box = "1行目：for文の条件式を記述"."\n"."2行目：処理式を記述"."\n"."3行目：for文を閉じる";
?>

<form method="post" action="learning.php" >
<p>実際に書いてみよう↓</p>
<textarea name="loop" cols="40" rows="3"><?php echo (htmlspecialchars($for_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="実行"><br>
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
		echo "プログラムが正しくありません";
	}
}

?>
<br><br><br>



<!-----------for文で配列を表示しよう--------------->
<p>
--forを使って配列を表示しよう--<br>
変数では，1つの変数につき1つのデータを格納しました．<br>
変数に0から順番に番号を付けて拡張し，複数のデータを格納できるものを配列と呼びます．<br>
まず最初に，配列に値を代入します．<br>
今回は，fruitsという配列にorange・apple・grapeというデータを格納します．<br>
「$fruits = array("orange","apple","grape");」arrayとは配列のことです．<br>
このままecho $fruits;と書いてもarrayと表示されるだけです．<br>
データを表示させるには，番号を指定する必要があります．<br>
具体的には，echo $fruits[0];のような書き方をします．<br>
この時に，for文を使うと1回echoを書くだけで全て表示することができます．<br>
初期値は0($i=0)，ループ回数はデータの数($i<3)，増減は+1ずつ($i++)です．<br>
表示にはecho $fruits[$i];を使用しますが，今回は改行もいれて<br>
「echo $fruits[$i]."&lt;br&gt;";」と記述してみましょう．<br>
</p>

<?php
	$array_box = "1行目：配列に値を格納"."\n"."2行目：for文の条件式を記述"."\n"."3行目：配列を表示させる"."\n"."4行目：for文を閉じる";
?>

<form method="post" action="learning.php" >
<p>実際に書いてみよう↓</p>
<textarea name="array" cols="40" rows="4"><?php echo (htmlspecialchars($array_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="実行"><br>
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
		echo "プログラムが正しくありません";
	}
}
?>
<br><br>



<!-----------日付や時間情報の取得--------------->
<p>
--日付や時間情報の取得をしてみよう--<br>
現在の日付や時間を得るにはdata関数を利用します．<br>
今回は，年の取得にY，月の取得にm，日の取得にd<br>
時の取得にH，分の取得にi，秒の取得にsを使ってみましょう．<br>
具体的には，data(YmdHis);と記述するのですが，これだと非常に見難いので<br>
「$time = date("Y/m/d H:i:s");」と記述し，$timeを表示してみましょう．<br>
</p>

<?php
	$date_box = "1行目：変数timeに日時情報を格納"."\n"."2行目：変数timeを出力";
?>

<form method="post" action="learning.php" >
<p>実際に書いてみよう↓</p>
<textarea name="day_time" cols="40" rows="2"><?php echo (htmlspecialchars($date_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="実行"><br>
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
		echo "プログラムが正しくありません"."<br>";
	}
echo "<br>";
}
?>

<IMG border="0" name="date" src="http://tt-171.99sv-coco.com/mission6/examples/date.PNG" width="320" height="370"></IMG>
<br><br><br>



<!-----------textファイルへの書き込み--------------->
<p>
--PHPでTextファイルに書き込みしよう--<br>
PHPでテキストファイルに書き込みを行う際<br>
ファイルのオープン・ファイルへの書き込み・ファイルのクローズの3段階の工程があります．<br>
ファイルのオープンには fopen(filename,mode); を利用します．<br>
filenameでは開きたいファイルのパスを，modeではファイルを開くモードを指定します．<br>
ファイルへの書き込みには fwrite(filename,書き込み内容); を利用します．<br>
ファイルのクローズには fclose(filename); を利用します．<br><br>

例えば，text.txtというファイルにlearningという文字列を格納するには，<br>
$filename = "text.txt";<br>
$insert = "learning";<br>
$fp = fopen($filename,a);<br>
fwrite($fp,$insert);<br>
fclose($fp);<br>
と記述します．<br>
ただし，今回のプログラムでは結果は表示されません．<br>
</p>

<?php
	$file_box = "1行目：変数filenameにファイルのパスを格納"."\n"
	."2行目：変数insertに文字列を格納"."\n"
	."3行目：変数fpにファイルオープンを記述"."\n"
	."4行目：テキストファイルに文字列を書き込む"."\n"
	."5行目：ファイルを閉じる";
?>

<form method="post" action="learning.php" >
<p>実際に書いてみよう↓</p>
<textarea name="text" cols="40" rows="5"><?php echo (htmlspecialchars($file_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="実行"><br>
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
		echo "プログラムは正しいです．<br>";
	}
	else{
		echo "プログラムが正しくありません"."<br>";
	}
}
?>
<IMG border="0" name="date" src="http://tt-171.99sv-coco.com/mission6/examples/fopen.PNG" width="500" height="140"></IMG>
<br><br><br>



<!-----------三項演算子--------------->
<p>
--三項演算子を使ってみよう--<br>
三項演算子を使うと，if/elseを1文で置き換えることが出来る．<br>
書き方 ： 変数 = (条件式)? trueの時の値 : falseの時の値<br><br>

例えば<br>
if($box == "box"){<br>
&emsp;&emsp;&emsp;&emsp;$variable = 1;<br>
}else{<br>
&emsp;&emsp;&emsp;&emsp;$variable = "中身はboxではありません":<br>
}<br>
を三項演算子を使って書くと<br>
「$variable = ($box == "box")? 1 : "中身はboxではありません";」<br>
となります．<br>
</p>

<?php
	$Ternary = "1行目：変数boxに文字列boxを格納"."\n"
	."2行目：三項演算子を使って変数variableに値を格納"."\n"
	.'3行目：変数$variableを表示させる';
?>

<form method="post" action="learning.php" >
<p>実際に書いてみよう(今回は，1行目で$box = 好きな値もしくは文字列 としてもokです．)↓</p>
<textarea name="Ternary_operator" cols="50" rows="3"><?php echo (htmlspecialchars($Ternary, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="実行"><br>
</form>

<?php

$Ternary_first = '$box = \"box\";';
$Ternary_second = '$variable = ($box == \"box\")? 1 : \"中身はboxではありません\";';
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
		echo "中身はboxではありません<br>";
	}
	else{
		echo "プログラムが正しくありません"."<br>";
	}
}
?>



<!-----------""と''の違いを知ろう--------------->
<p>
--""と''の違いを知ろう--<br>
ダブルクォーテーション("")を使うと，文字列中の変数を変数値に置換しますが<br>
シングルクォーテーション('')を使うと，文字列中の変数を変数値に置換しません．<br>
具体的に使ってみると<br>
ダブルクォーテーション：「echo "ダブルクォーテーションで表示 = $different&lt;br&gt;";」<br>
シングルクォーテーション：「echo 'シングルクォーテーションで表示 = $different';」<br>
となります．<br>
</p>

<?php
	$different_box = "1行目：変数differentに文字列differenceを格納"."\n"
	."2行目：ダブルクォーテーションで表示"."\n"
	.'3行目：シングルクォーテーションで表示';
?>

<form method="post" action="learning.php" >
<p>実際に表示してみよう↓</p>
<textarea name="different" cols="60" rows="3"><?php echo (htmlspecialchars($different_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="実行"><br>
</form>


<?php

$different = "difference";


$different_first = '$different = \"difference\";';
$different_second = 'echo \"ダブルクォーテーションで表\\示 = $different<br>\";';
$different_end = "echo \'シングルクォーテーションで表\\示 = \$different\';";
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
		echo "ダブルクォーテーションで表示 = $different<br>";
		echo 'シングルクォーテーションで表示 = $different';
	}
	else{
		echo "プログラムが正しくありません"."<br>";
	}
}
?>
<br><br><br>


<!-----------コメントアウトについて知ろう--------------->
<p>
--コメントアウトを使おう--<br>
複数人で作業をする際，他の人が見ても分かるようにしたい時や<br>
後で見直した時に，分かりやすくするために<br>
コメントを書いておくには，コメントアウトを使います．<br>
1行の時は//を，複数行の時は/**/を使います．<br>
例えば↓<br>
「//コメントを挿入」<br>
「/*<br>
コメントを挿入<br>
コメントを挿入<br>
*/」<br>
ただし，今回のプログラムでは結果は表示されません．<br>
</p>

<?php
	$out_box = "1行目：1行コメントアウト"."\n"
	."2～5行目：2行コメントアウト";
?>

<form method="post" action="learning.php" >
<p>実際に表示してみよう↓</p>
<textarea name="comment_out" cols="40" rows="5"><?php echo (htmlspecialchars($out_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="実行"><br>
</form>

<?php

$out_first = '//コメントを挿入';
$out_second = '/*';
$out_third = 'コメントを挿入';
$out_fourth = 'コメントを挿入';
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
		echo "プログラムは正しいです<br>";
	}
	else{
		echo "プログラムが正しくありません<br>";
	}
}
?>
<br><br><br>



<!-----------formから送信された値を受け取ろう--------------->
<p>
--formから送信された値を受け取ろう--<br>
いつもプログラムを記述，実行している部分をformと呼びます．<br>
実行ボタンを押したときに記述したプログラムを受け取る方法について学んでみましょう．<br>
formの作成については，phpではなくhtmlで記述するため，今回実際に書いてみるという事はしません．<br>
例えば<br>
&lt;form method="post" action="learning.php" &gt;<br>
&lt;textarea name="receive" cols="60" rows="3"&gt;&lt;/textarea&gt;<br>
&lt;input type="submit" value="実行"&gt;<br>
&lt;/form&gt;<br>
というフォームがあるとします．<br>
いつもプログラムを書き込んでいる枠はtextareaの部分です．<br>
この書き込んだ値を受け取るには$_POST["receive"]を利用します．<br>
例えば：「$received = $_POST["receive"];」<br>
今回はフォームから，受け取りました，という文が送信されたと仮定してプログラムを書いてみましょう．<br>
</p>

<?php
	$receive_box = "1行目：変数receivedにフォームからの値を格納"."\n"
	."2行目：変数receivedを出力";
?>

<form method="post" action="learning.php" >
<p>実際に記述してみよう↓</p>
<textarea name="receive" cols="40" rows="2"><?php echo (htmlspecialchars($receive_box, ENT_QUOTES,'sjis','utf-8'));?></textarea>
<input type="submit" value="実行"><br>
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
		echo "受け取りました<br>";
	}
	else{
		echo "プログラムが正しくありません<br>";
	}
}
?>

</html>
