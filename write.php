<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>ありがとうございました</p>

  <?php
// formからデータを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$age =$_POST["age"];
$app = $_POST["app"];
$time = $_POST["time"];


$file = fopen("data/data.csv", "a+");

// ファイルにある行を数えて番号を振りたかったけれど…時間切れ

// $line = fgetcsv($file);
// $num = count($line);
//     var_dump($num);
//     $newline = $num + 1;
    
    
    fwrite($file, $newline.",".$name.",".$email.",".$gender.",".$age.",".$app.",".$time."\n");


fclose($file);

?>

</body>
</html>