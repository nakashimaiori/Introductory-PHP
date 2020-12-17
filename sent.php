<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">

      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <!-- nameを受け取りecho -->
      <?php echo $_POST ['name']; ?>
      <div class="form-item">■ 内容</div>
      <!-- bodyを受け取りecho -->
      <?php echo $_POST ['body'] ; ?>
    </div>

  </div>

  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
  <style>
    * {
  padding: 0;
  margin: 0;
}

li {
  list-style: none;
}

.header {
  height: 65px;
  border-bottom: 1px solid #dddddd;
}

.header-left {
  float: left;
  padding: 10px 60px;
  color: #ED7000;
  font-size: 30px;
}

.header-right {
  float: right;
  color: #808080;
}

.header-right li {
  float: left;
  padding: 20px 30px;
  border-left: 1px solid #dddddd;
}

.selected {
  color: #ED7000;
}

.main {
  min-width: 800px;
}

.contact-form {
  width: 70%;
  margin: 60px auto;
  padding: 50px;
  background-color: #F5F5F5;
  color: #333;
}

.form-title {
  text-align: center;
  margin-bottom: 30px;
  font-size: 30px;
}

.form-item {
  padding: 20px 0 10px 0;
  font-weight: bold;
}

input[type="text"] {
  width: 30%;
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 6px 12px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555;
}

input[type="submit"] {
  margin-top: 30px;
  width: 30%;
  border: 1px solid #5cb85c;
  border-radius: 4px;
  padding: 12px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  font-size: 14px;
  line-height: 1.428571429;
  color: white;
  background-color: #5cb85c;
}


textarea {
  width: 90%;
  height: 100px;
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 6px 12px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555;
}

.footer {
  height: 200px;
  clear: left;
  border-top: 1px solid #dddddd;
}

.footer-left {
  float: left;
  width: 200px;
  padding: 30px 100px;
}

.footer-left li {
  margin-bottom: 5px;
  color: #808080;
  border-bottom: 1px dotted #808080;
}

.like-box {
  float: left;
  padding: 30px;
}
  </style>
</body>
</html>