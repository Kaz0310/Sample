<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>アルテクス スキルシート</title>
    <link rel="stylesheet" href="{{ asset('css/exp_style.css') }}">
</head>
<body>
    <h2>アルテクススキルシート</h2>
    <div>
    <table>
        <tbody>
            <tr>
            <th class="left" scope="row" width="80">社員番号</th>
            <td class="left" width="150"><?php echo $data->number; ?></td>
            <td class="noborder" width="30"></td>
            <th class="left" scope="row" width="80">氏名</th>
            <td class="left" width="150"><?php echo $data->name; ?></td>
            <td class="left" width="150"><?php echo $data->furigana; ?></td>
            </tr>
        </tbody>
    </table>
    </div>
<div>

</div>

</form>
</body>

</html>
