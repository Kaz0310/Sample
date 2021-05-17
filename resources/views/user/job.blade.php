<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>アルテクス スキルシート</title>
    <link rel="stylesheet" href="{{ asset('css/job_style.css') }}">
</head>
<body>
    <h2>職務</h2>
<form action="/Sample/public/entry" method="post">
@csrf
<div>
    <table>
        <tbody>
            <tr>
            <th class="center" rowspan="2" width="50"></th>
            <th class="center" rowspan="2" width="50">期間</th>
            <th class="center" scope="row" width="300">案件名</th>
            <th class="center" rowspan="2" colspan="3" width="100">系統・規模<br>役割</th>
            <th class="center" rowspan="2" width="150">担当工程</th>
            <th class="center" rowspan="2" width="150">使用ツール等</th>
            </tr>
            <tr>
            <th class="center" scope="row" width="300">業務内容</th>
            </tr>
            <?php foreach($career as $val){ ?>
            <tr rowspan="4">
                <td rowspan="4"></td>
                <td rowspan="4"><?php echo $val->start; ?><br> | <br><?php echo $val->end; ?></td>
                <td><?php echo $val->matter; ?></td>
                <td class="center" colspan="3"><?php echo $val->type; ?></td>
                <td rowspan="4"></td>
                <td rowspan="4"><?php echo htmlspecialchars($val->tools, ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
            <tr rowspan="3">
                <td class="left" rowspan="3"><?php echo $val->detail; ?></td>
                <td class="right" colspan="2">人月</td>
                <td class="right" colspan="1"><?php echo $val->manpower; ?></td>
            </tr>
            <tr>
                <td class="right" colspan="2">メンバ数</td>
                <td class="right" colspan="1"><?php echo $val->persons; ?></td>
            </tr>
            <tr>
                <td class="center" colspan="3"><?php echo $val->role; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</form>
</body>

</html>
