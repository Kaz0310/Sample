<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title>Laravelでサイト作ってるよ</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
@yield('addCss')
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js">
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js">
<![endif]-->
</head>
<body>
<table>
  <tr><th>ID</th><th>NAME</th><th>AGE</th></tr>
  <?php foreach($data as $val){ ?>
      <tr>
          <td><a href="sample/<?php echo $val->user_id; ?>"><?php echo $val->user_id; ?></a></td>
          <td><?php echo $val->user_name; ?></td>
          <td><?php echo $val->user_age; ?></td>
      </tr>
      <?php } ?>
</table>
<!-- SCRIPTS -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
@yield('addJs')
</body>
</html>
