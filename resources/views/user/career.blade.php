<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>社員情報入力</title>
    <link rel="stylesheet" href="{{ asset('css/create_style.css') }}">
</head>
<body>
    <h2>社員情報入力</h2>
<form action="/public/entry" method="post">
@csrf
<div>
    <table>
        <tbody>
            <tr>
                <th scope="row">社員番号</th>
                <td><?php echo $data1['number']; ?>
                  <input type="hidden" name="number" id="number_id" value="<?php echo $data1['number']; ?>" />
                </td>
            </tr>
            <tr>
                <th scope="row">経歴</th>
                <td><input size="40" type="text" id="detail" name="detail"></td>
            </tr>
        </tbody>
    </table>
    </br>
</div>

<button type="submit" id="confirm" name="confirm">経歴登録</button>
</form>
</body>

</html>
