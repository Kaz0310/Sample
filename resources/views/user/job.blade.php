<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>社員情報入力</title>
    <link rel="stylesheet" href="{{ asset('css/create_style.css') }}">
</head>
<body>
    <h2>社員情報入力</h2>
<form action="/Sample/public/entry" method="post">
@csrf
<div>
    <?php foreach($career as $val){ ?>
      <?php echo $val->detail; ?>
      </br>
    <?php } ?>
</div>

<button type="submit" id="confirm" name="confirm">経歴登録</button>
</form>
</body>

</html>
