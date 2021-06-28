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
        <td class="noborder" width="440">
            <table>
                <tbody>
                <tr>
                    <th class="center" scope="row" width="350">業種</th>
                    <th class="center" width="120">経験年月</th>
                </tr>
                <?php foreach($industry as $val){ ?>
                <tr>
                    <td class="left"><?php echo $val->industry_name; ?></td>
                    @if(isset( $val->year ) && isset( $val->month ))
                    <td class="right"><?php echo $val->year; ?>年<?php echo $val->month; ?>月</td>
                    @else
                    <td class="right"> 年 月</td>
                    @endif
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </td>
        <td class="noborder" width="440">
            <table>
                <tbody>
                <tr>
                    <th class="center" scope="row" width="350">職種：Web・アプリ・クリエイティブ</th>
                    <th class="center" width="120">経験年月</th>
                </tr>
                <?php foreach($occupation as $val){ ?>
                <tr>
                    <td class="left"><?php echo $val->occupation_name; ?></td>
                    @if(isset( $val->year ) && isset( $val->month ))
                    <td class="right"><?php echo $val->year; ?>年<?php echo $val->month; ?>月</td>
                    @else
                    <td class="right"> 年 月</td>
                    @endif
                </tr>
                <?php } ?>
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
