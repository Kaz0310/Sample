<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>アルテクス スキルシート</title>
    <link rel="stylesheet" href="{{ asset('css/skill_style.css') }}">
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
    <div style='font-weight: bold;'>レベルの説明</div>
    <table>
        <tbody>
        <td class="noborder" width="550">
            <table>
                <tbody>
                <tr>
                    <th class="blue" scope="row" width="120">レベル4</th>
                    <td class="left" width="420">対象となる技術の経験を体系化し先進的なやり方を</br>工夫・開発できる</td>
                </tr>
                <tr>
                    <th class="blue" scope="row" width="120">レベル3</th>
                    <td class="left" width="420">他のエンジニアに対して指導及び環境を提供できる</br>作業標準化またはチェックリスト化できる</td>
                </tr>
                <tr>
                    <th class="blue" scope="row" width="120">レベル2</th>
                    <td class="left" width="420">サポートがなくても自律的に実施できる</td>
                </tr>
                <tr>
                    <th class="blue" scope="row" width="120">レベル1</th>
                    <td class="left" width="420">サポートがあれば実施できる</br>トレーニングを受けた程度の知識はある</td>
                </tr>
                <tr>
                    <th class="blue" scope="row" width="120">レベル0</th>
                    <td class="left" width="420">知識、経験なし</td>
                </tr>
                <tr>
                    <th class="blue" scope="row" width="120">未経験参加希望</th>
                    <td class="left" width="420">知識、経験ともに無いが機会があれば参加したい</td>
                </tr>
                </tbody>
            </table>
            </br>
            <table>
                <tbody>
                <tr>
                    <th class="center" scope="row" width="300">業務スキル</th>
                    <th class="center" width="120">経験年月</th>
                    <th class="center" width="120">レベル</th>
                </tr>
                <?php $var = 0; ?>
                <?php foreach($business as $val){ ?>
                @if($var != $val->business_code)
                <tr>
                    <td class="blue" colspan="3"><?php echo $val->business_name; ?></td>
                </tr>
                <?php $var = $val->business_code; ?>
                @endif
                <tr>
                    <td class="left"><?php echo $val->business_class_name; ?></td>
                    @if(isset( $val->year ) && isset( $val->month ) && isset( $val->level ))
                    <td class="right"><?php echo $val->year; ?>年<?php echo $val->month; ?>月</td>
                    <td class="right">レベル<?php echo $val->level; ?></td>
                    @else
                    <td class="right"> 年 月</td>
                    <td class="right">レベル0</td>
                    @endif
                </tr>
                <?php } ?>
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
</form>
</body>

</html>
