<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title>ユーザー一覧</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <button type="button" onclick="location.href='/Sample/public/create'">ユーザー作成</button>
</br></br>
<label><?php echo count($data); ?>件</Label>
<table>
  <?php if(count($data) > 0){ ?>
  <tr><th class="center">ID</th><th class="center">NAME</th><th class="center">CAREER</th><th class="center">INFO</th></tr>
  <?php } ?>
  <?php foreach($data as $val){ ?>
      <tr>
          <td>
            <Label><?php echo $val->number; ?></Label>
          </td>
          <td>
            <?php echo $val->name; ?>
          </td>
          <td>
            <form action="/Sample/public/job" method="post">
            @csrf
            <div style="margin-left:10%;margin-right:10%;">
              <input type="hidden" name="number" id="number_id" value="<?php echo $val->number; ?>" />
              <button style="width:100%;" type="submit" id="career" name="career">経歴</button>
            </div>
            </form>
          </td>
          <td>
            <form action="/Sample/public/show" method="post">
            @csrf
            <div style="margin-left:10%;margin-right:10%;">
              <input type="hidden" name="number" id="number_id" value="<?php echo $val->number; ?>" />
              <button style="width:100%;" type="submit" id="info" name="info">詳細</button>
            </div>
            </form>
          </td>
      </tr>
  <?php } ?>
</table>
<!-- SCRIPTS -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
@yield('addJs')
</body>
</html>
