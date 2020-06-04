<?php
include("index.html");

$filename = "data/data.csv";

$fp = fopen($filename, "r");

// while (!feof($fp)){
  //   $text = fgets($fp);
//   echo $text."<br>";
// }

echo '<table>
<tr>
<th>No.</th>
<th>名前</th>
<th>email</th>
<th>性別</th>
<th>年代</th>
<th>使うアプリ</th>
<th>接触時間</th>
</tr>';

// csvファイルから1行ずつ書き出す
while($line = fgetcsv($fp)) {
  echo '<tr>';

  for ($i=0;$i<count($line);$i++) {
    // $num = count($line);
    echo '<td>' . $line[$i] . '</td>';
  }
  echo '</tr>';
}
echo '</table>';

// echo $num;

fclose($fp);

?>
