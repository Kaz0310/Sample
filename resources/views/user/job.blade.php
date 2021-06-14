<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>アルテクス スキルシート</title>
    <link rel="stylesheet" href="{{ asset('css/job_style.css') }}">
</head>
<body>
    <h2>アルテクススキルシート</h2>
    <div>
    <table>
        <tbody>
            <tr>
            <th class="left" scope="row" width="80">社員番号</th>
            <td class="left" width="150"><?php echo $data->number; ?></td>
            <th class="left" scope="row" width="80">氏名</th>
            <td class="left" width="150"><?php echo $data->name; ?></td>
            <td class="left" width="150"><?php echo $data->furigana; ?></td>
            </tr>
        </tbody>
    </table>
    </div>
    <h3>職務</h3>
    <form action="/Sample/public/career" method="post">
    @csrf
       <input type="hidden" name="number" id="number_id" value="<?php echo $data->number; ?>" />
       <button style="width:60px;" type="submit" id="career" name="career">✚追加</button>
    </form>
<form action="/Sample/public/entry" method="post">
@csrf
<div>
    <table>
        <tbody>
            <tr>
            <th class="center" rowspan="2" width="60"></th>
            <th class="center" rowspan="2" width="60">期間</th>
            <th class="center" scope="row" width="400">案件名</th>
            <th class="center" rowspan="2" colspan="2" width="100">系統・規模<br>役割</th>
            <th class="center" rowspan="2" width="180">担当工程</th>
            <th class="center" rowspan="2" width="180">使用ツール等</th>
            </tr>
            <tr>
            <th class="center" scope="row" width="400">業務内容</th>
            </tr>
            <?php foreach($career as $val){ ?>
            <tr class="top" rowspan="4">
                <td rowspan="4"></td>
                <td rowspan="4"><?php echo $val->start; ?><br> | <br><?php echo $val->end; ?></td>
                <td><?php echo $val->matter; ?></td>
                <td class="center" colspan="2"><?php echo $val->type; ?></td>
                <td rowspan="4"><?php echo nl2br(htmlspecialchars($val->process, ENT_QUOTES, 'UTF-8')); ?></td>
                <td rowspan="4"><?php echo nl2br(htmlspecialchars($val->tools, ENT_QUOTES, 'UTF-8')); ?></td>
            </tr>
            <tr rowspan="3">
                <td class="left" rowspan="3"><?php echo nl2br(htmlspecialchars($val->detail, ENT_QUOTES, 'UTF-8')); ?></td>
                <td class="right" colspan="1">人月</td>
                <td class="right" colspan="1" width="30"><?php echo $val->manpower; ?></td>
            </tr>
            <tr>
                <td class="right" colspan="1">メンバ数</td>
                <td class="right" colspan="1" width="30"><?php echo $val->persons; ?></td>
            </tr>
            <tr>
                <td class="center" colspan="2"><?php echo $val->role; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</form>
</body>

</html>
