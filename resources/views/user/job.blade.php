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
            <th class="center" rowspan="2" colspan="2" width="80">系統・規模　役割</th>
            <th class="center" rowspan="2" width="100">担当工程</th>
            <th class="center" rowspan="2" width="100">使用ツール等</th>
            </tr>
            <tr>
            <th class="center" scope="row" width="300">業務内容</th>
            </tr>
            <?php foreach($career as $val){ ?>
            <tr rowspan="4">
                <td rowspan="4"></td>
                <td rowspan="4">yyyy/mm - yyyy/mm</td>
                <td><?php echo $val->matter; ?></td>
                <td colspan="2">開発系</td>
                <td rowspan="4"></td>
                <td rowspan="4"></td>
            </tr>
            <tr rowspan="3">
                <td rowspan="3"><?php echo $val->detail; ?></td>
                <td colspan="1" width="60">人月</td>
                <td colspan="1">１</td>
            </tr>
            <tr>
                <td colspan="1" width="60">メンバ数</td>
                <td colspan="1">１</td>
            </tr>
            <tr>
                <td colspan="2">リーダー</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</form>
</body>

</html>
