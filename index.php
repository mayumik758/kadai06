<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート</title>
</head>
<body>
  <header></header>
  <main>
  <div id="formpart">
  <form action="write.php" method="post">
  
  <p>名前：<input type="text" name="name" id="name"></p>
  <p>email：<input type="email" name="email" id="email"></p>
  <p>性別：<select name="gender" id="gender">
  <option value="m">男性</option>
  <option value="f">女性</option>
  <option value="o">その他</option>
  </select></p>
  
  <p>年代：<select name="age" id="age">
  <option value="10">10代</option>
  <option value="20">20代</option>
  <option value="30">30代</option>
  <option value="40">40代</option>
  <option value="50">50代</option>
  <option value="60">60代</option>
  <option value="70">70代</option>
  <option value="80">80代以上</option>
  </p></select>

  <p>Q1 次のうちニュースを知るのに一番よく使うアプリはどれですか<br>
  <input type="radio" name="app" value="yahoo" id="app">Yahoo!
  <input type="radio" name="app" value="google" id="app">Google
  <input type="radio" name="app" value="line" id="app">LINE
  <input type="radio" name="app" value="smartnews" id="app">スマートニュース
  <input type="radio" name="app" value="twitter" id="app">Twitter
  <input type="radio" name="app" value="newspics" id="app">NewsPics
  <input type="radio" name="app" value="newspaper" id="app">新聞社のアプリ
  <input type="radio" name="app" value="other" id="app">その他
   </p>
   <p>Q2 1日でニュースを見たり読んだりするのに費やす時間は<br>
   <input type="radio" value="15" name="time" id="time">15分未満
   <input type="radio" value="30" name="time" id="time">15～30分
   <input type="radio" value="60" name="time" id="time">30分～1時間
   <input type="radio" value="90" name="time" id="time">1時間以上
   </p>
  <button type="submit">送信する</button>
  <button type="reset">リセット</button>
  </form>
  </div>
  </main>
  <footer></footer>
</body>
</html>