<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>アルテクス スキルシート</title>
    <link rel="stylesheet" href="{{ asset('css/skill_style.css') }}">
</head>
<body>
    <h2>アルテクススキルシート</h2>
    <form action="/Sample/public/result" method="post">
    @csrf
    <button type="submit" id="search" name="search">検索開始</button>
    <table>
        <tbody>
        <td class="noborder" width="550">
            <table>
                <tbody>
                <tr>
                    <th class="center" scope="row" width="210">氏名</th>
                    <th class="center" width="85">年齢</th>
                    <th class="center" width="110">就業状態</th>
                    <th class="center" width="135">終業日</th>
                </tr>
                @if(isset($user))
                <?php foreach($user as $val){ ?>
                    <tr>
                    <td class="left"><?php echo $val->name; ?></td>
                    <td class="center"><?php echo $val->age; ?></td>
                    <td class="center"></td>
                    <td class="center"></td>
                    </tr>
                <?php } ?>
                @endif
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
                    <td class="right"> 年 月</td>
                    <td class="right">
                    <select name="business_level_<?php echo $val->business_code; ?>_<?php echo $val->business_class_code; ?>">
                        <option value="4">レベル４</option>
                        <option value="3">レベル３</option>
                        <option value="2">レベル２</option>
                        <option value="1">レベル１</option>
                        <option value="0" selected="selected">レベル０</option>
                    </select>
                    </td>
                    <input type="hidden" name="business_code_<?php echo $val->business_code; ?>_<?php echo $val->business_class_code; ?>" id="business_code_id" value="<?php echo $val->business_code; ?>" />
                    <input type="hidden" name="business_class_code_<?php echo $val->business_code; ?>_<?php echo $val->business_class_code; ?>" id="business_class_code_id" value="<?php echo $val->business_class_code; ?>" />
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </td>
        <td class="noborder" width="550">
        <div style='font-weight: bold;'>レベルの説明</div>
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
                    <th class="center" scope="row" width="300">技術スキル</th>
                    <th class="center" width="120">経験年月</th>
                    <th class="center" width="120">レベル</th>
                </tr>
                <?php $var = 0; ?>
                <?php foreach($technology as $val){ ?>
                @if($var != $val->technology_code)
                <tr>
                    <td class="blue" colspan="3"><?php echo $val->technology_name; ?></td>
                </tr>
                <?php $var = $val->technology_code; ?>
                @endif
                <tr>
                    <td class="left"><?php echo $val->technology_class_name; ?></td>
                    <td class="right"> 年 月</td>
                    <td class="right">
                    <select name="technology_level_<?php echo $val->technology_code; ?>_<?php echo $val->technology_class_code; ?>">
                        <option value="4">レベル４</option>
                        <option value="3">レベル３</option>
                        <option value="2">レベル２</option>
                        <option value="1">レベル１</option>
                        <option value="0" selected="selected">レベル０</option>
                    </select>
                    </td>
                    <input type="hidden" name="technology_code_<?php echo $val->technology_code; ?>_<?php echo $val->technology_class_code; ?>" id="technology_code_id" value="<?php echo $val->technology_code; ?>" />
                    <input type="hidden" name="technology_class_code_<?php echo $val->technology_code; ?>_<?php echo $val->technology_class_code; ?>" id="technology_class_code_id" value="<?php echo $val->technology_class_code; ?>" />
                </tr>
                <?php } ?>
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
