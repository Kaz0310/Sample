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
            <td class="left" width="170"><?php echo $data->number; ?></td>
            <td class="noborder" width="10"></td>
            <th class="left" scope="row" width="80">氏名</th>
            <td class="left" width="280"><?php echo $data->name; ?></td>
            <td class="left" width="280"><?php echo $data->furigana; ?></td>
            </tr>
        </tbody>
    </table>
    </br>
    <table>
        <tbody>
        <td class="noborder" width="550">
            <table>
                <tbody>
                <tr>
                    <th class="left" scope="row" width="120">レベル4</th>
                    <td class="left" width="420"></td>
                </tr>
                <tr>
                    <th class="left" scope="row" width="120">レベル3</th>
                    <td class="left" width="420"></td>
                </tr>
                <tr>
                    <th class="left" scope="row" width="120">レベル2</th>
                    <td class="left" width="420"></td>
                </tr>
                <tr>
                    <th class="left" scope="row" width="120">レベル1</th>
                    <td class="left" width="420"></td>
                </tr>
                <tr>
                    <th class="left" scope="row" width="120">レベル0</th>
                    <td class="left" width="420"></td>
                </tr>
                <tr>
                    <th class="left" scope="row" width="120">未経験参加希望</th>
                    <td class="left" width="420"></td>
                </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                <tr>
                    <th class="center" scope="row" width="300">業務スキル</th>
                    <th class="center" width="120">経験年月</th>
                    <th class="center" width="120">レベル</th>
                </tr>

                </tbody>
            </table>
        </td>
        <td class="noborder" width="550">
            <table>
                <tbody>
                <tr>
                    <th class="center" scope="row" width="300">技術スキル</th>
                    <th class="center" width="120">経験年月</th>
                    <th class="center" width="120">レベル</th>
                </tr>

                </tbody>
            </table>
        </td>
        </tbody>
    </table>
    </br>
    
    </div>
<div>

</div>

</form>
</body>

</html>
