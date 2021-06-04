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
                <th class="center" scope="row" width="120">社員番号</th>
                <td><?php echo $data1['number']; ?>
                  <input type="hidden" name="number" id="number_id" value="<?php echo $data1['number']; ?>" />
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th class="center" scope="row" width="120">期間</th>
                <td class="center">
                <input size="15" type="text" id="start" name="start">
                ―
                <input size="15" type="text" id="end" name="end">
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th class="center" scope="row" width="120">案件名</th>
                <td><input size="80" type="text" id="matter" name="matter"></td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th class="center" scope="row" width="120">業務内容</th>
                <td><textarea id="detail" name="detail" style="margin: 0px; width: 543px; height: 200px;"></textarea></td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th class="center" scope="row" width="120">系統</th>
                <td><input size="12" type="text" id="type" name="type"></td>

                <th class="center" scope="row" width="120">役割</th>
                <td><input size="12" type="text" id="role" name="role"></td>
            </tr>
            <tr>
                <th class="center" scope="row" width="120">規模</th>
                <td><input size="12" type="text" id="manpower" name="manpower"></td>

                <th class="center" scope="row" width="120">人数</th>
                <td><input size="12" type="text" id="persons" name="persons"></td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th class="center" scope="row" width="120">担当工程</th>
                <td><textarea id="detail" name="detail" style="margin: 0px; width: 230px; height: 300px;"></textarea></td>

                <th class="center" scope="row" width="120">使用ツール等</th>
                <td><textarea id="detail" name="detail" style="margin: 0px; width: 300px; height: 300px;"></textarea></td>
            </tr>
        </tbody>
    </table>
</div>

<button type="submit" id="confirm" name="confirm">経歴登録</button>
</form>
</body>

</html>
