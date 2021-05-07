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
            <th rowspan="2"></th>
            <th rowspan="2">期間</th>
            <th scope="row">案件名</th>
            </tr>
            <tr>
            <th scope="row">業務内容</th>
            </tr>
            <?php foreach($career as $val){ ?>
            <tr>
            <td rowspan="2"></td>
            <td rowspan="2">yyyy/mm - yyyy/mm</td>
            <td>
            <?php echo $val->matter; ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php echo $val->detail; ?>
            </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</form>
</body>

</html>
