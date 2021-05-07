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
    <table>
        <tbody>
            <tr>
            <th rowspan="2" width="20"></th>
            <th scope="row">案件名</th>
            </tr>
            <tr>
            <th scope="row">業務内容</th>
            </tr>
            <?php foreach($career as $val){ ?>
            <tr>
                <td></td>
                <td>
                <?php echo $val->detail; ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<button type="submit" id="confirm" name="confirm">経歴登録</button>
</form>
</body>

</html>
