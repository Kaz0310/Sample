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
            <th class="center" rowspan="2" width="50"></th>
            <th class="center" rowspan="2" width="50">期間</th>
            <th class="center" scope="row" width="300">案件名</th>
            </tr>
            <tr>
            <th class="center" scope="row" width="300">業務内容</th>
            </tr>
            <th class="center" rowspan="2" width="70">系統・規模　役割</th>
            <th class="center" rowspan="2" width="100">担当工程</th>
            <th class="center" rowspan="2" width="100">使用ツール等</th>
            <?php foreach($career as $val){ ?>
            <tr rowspan="4">
                <td rowspan="4"></td>
                <td rowspan="4">yyyy/mm - yyyy/mm</td>
                <td><?php echo $val->matter; ?></td>
            </tr>
            <tr rowspan="3">
                <td rowspan="3"><?php echo $val->detail; ?></td>
            </tr>
            <tr colspan="2" width="70">
                <td colspan="2">開発系</td>
            </tr>
            <tr colspan="2" width="70">
                <td colspan="1">人月</td>
                <td colspan="1">１</td>
            </tr>
            <tr colspan="2" width="70">
                <td colspan="1">メンバ数</td>
                <td colspan="1">１</td>
            </tr>
            <tr colspan="2" width="70">
                <td colspan="2">リーダー</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</form>
</body>

</html>
