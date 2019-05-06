<?php /* Smarty version 2.6.31, created on 2019-05-06 18:33:45
         compiled from layout.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="/css/ethna.css" type="text/css" />
<title>Yururi</title>
</head>
<body>
<div class='header'>
    <div class="header-logo">Y u r u r i</div>
    <!menu>
    <div class="header-list">    

      <ul>
        <li>登録・ログイン</li>
        <li>お問い合わせ</li>
        <li>マイページ</li>
        <li>
	<form action="." method="post">
	<p>
        <input type="submit" name="action_cart" value="カート">
        </p>
	</li>
      </ul>
    </div>
  </div>

<div id="main">
<?php echo $this->_tpl_vars['content']; ?>

</div>

 <div class="footer">
    <div class="footer-logo">
      Y u r u r i
    </div>
    <div class="footer-list">
      <ul class="footer-ul">
        <li class="left">登録・ログイン</li>
        <li class="left">ショッピングガイド</li>
        <li class="left">お問い合わせ</li>
        <li>利用規約</li>
        <li>プライバシーポリシー</li>
        <li>特定商取引に基づく表示</li>
      </ul>
    </div>  
  </div>
</body>
</html>