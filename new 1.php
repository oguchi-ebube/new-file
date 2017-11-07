<!DOCTYPE html>
<html>
<body>










<?php
//echo "hello world!";//

//$age = array( "john" => "23","bola"=> "42" , "sandra"=> "42 ");//
/*$num = array(7,1,2,4,5);
sort($num);
$arrlength = count($num);
for( $x=0;$x < $arrlength; $x++){
	echo $num[$x]."<br>";
}
echo" john is ".$age['john']."years old" . "<br>";
foreach( $age as $y=> $y_value){
	echo "name" ." " . $y . ",respective age" .$y_value ."<br>";
}


$num = 6;

if($num %2==0){
	echo "it is even"." ,"."the remainder is:".$num%2;
}
else{
	echo"it is odd";
}

*/
$name=$email=$gender=$comment=" ";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = test_input($_POST["name"]);
	$email=test_input($_POST["email"]);
	$gender=test_input($_POST["gender"])
	$comment=test_input($_POST["comment"]);	
}
function test_input($data){
	$data= trim($data);
	$data= stripslashes($data);
	$data= htmlspecialchars($data);
	return $data;
	
}

?>

<h2> FIRST PHP FORM CHECK</h2>

<form  method="post"   action = "<? php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
Name:<input type ="text" name=" name"><br>
E-mail:<input type ="text" name=" email"><br>
Gender:<input type ="radio"  name ="gender" value ="female"> Female <input type ="radio"  name ="gender" value = "male">Male
Comment: <textarea name="comment" rows="6" cols ="30"> </textarea><br>
<input type ="submit">


</form>
<?php

echo $name."<br>";
echo $email."<br>";
echo $gender."br>";
echo $comment."<br>";

?>





</body>
</html/>