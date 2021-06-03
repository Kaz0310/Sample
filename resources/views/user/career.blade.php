<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>社員情報入力</title>
    <link rel="stylesheet" href="{{ asset('css/job_style.css') }}">
</head>
<body>
    <h2>社員情報入力</h2>
<form action="/Sample/public/entry" method="post">
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
                <th scope="row">期間</th>
                <td><input size="10" type="text" id="start" name="start"></td>
                <td>―</td>
                <td><input size="10" type="text" id="end" name="end"></td>
            </tr>
            <tr>
                <th scope="row">案件名</th>
                <td rowspan="3"><input size="40" type="text" id="matter" name="matter"></td>
            </tr>
            <tr>
                <th scope="row">業務内容</th>
                <td rowspan="3"><input size="40" type="text" id="detail" name="detail"></td>
            </tr>
        </tbody>
    </table>
    </br>
</div>

<button type="submit" id="confirm" name="confirm">経歴登録</button>
</form>
</body>

</html>
