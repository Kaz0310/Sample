<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>社員情報</title>
    <link rel="stylesheet" href="{{ asset('css/create_style.css') }}">
</head>
<body>
    <h2>社員情報</h2>
<div>
  <?php foreach($data as $val){ ?>
    <table>
        <tbody>
            <tr>
                <th scope="row">社員番号</th>
                <td><?php echo $val->number; ?></td>
            </tr>
            <tr>
                <th scope="row">氏名</th>
                <td><?php echo $val->name; ?></td>
                <th scope="row">生年月日</th>
                <td><?php echo $val->birthday; ?></td>
            </tr>
            <tr>
                <th scope="row">氏名(ふりがな)</th>
                <td><?php echo $val->furigana; ?></td>
                <th scope="row">性別</th>
                <td><?php echo $val->sex; ?></td>
                <th scope="row">年齢</th>
                <td><?php echo $val->age; ?></td>
            </tr>
        </tbody>
    </table>
    </br>
    <span>現住所</span>
    <table>
        <tbody>
            <tr>
                <th scope="row">住所</th>
                <td><?php echo $val->address; ?></td>
            </tr>
            <tr>
                <th scope="row">住所(ふりがな)</th>
                <td><?php echo $val->address_furi; ?></td>
            </tr>
            <tr>
                <th scope="row">最寄り駅</th>
                <td><?php echo $val->near_station; ?></td>
            </tr>
            <tr>
                <th scope="row">電話</th>
                <td><?php echo $val->phone; ?></td>
            </tr>
            <tr>
                <th scope="row">メール</th>
                <td><?php echo $val->mail; ?></td>
            </tr>
        </tbody>
    </table>
    </br>
    <span>最終学歴</span>
    <table>
        <tbody>
            <tr>
                <th class="center" scope="row">年月</th>
                <th class="center" scope="row">学歴</th>
            </tr>
            <tr>
                <td class="center"><?php echo $val->nengetu; ?></td>
                <td class="center"><?php echo $val->gakureki; ?></td>
            </tr>
        </tbody>
    </table>
    </br>
    <span>保有資格等</span>
    <table>
        <tbody>
            <tr>
                <th class="center" scope="row">年月</th>
                <th class="center" scope="row">資格</th>
            </tr>
            <tr>
                <td class="center"><?php echo $val->nengetu1; ?></td>
                <td class="center"><?php echo $val->shikaku1; ?></td>
            </tr>
            <tr>
                <td class="center"><?php echo $val->nengetu2; ?></td>
                <td class="center"><?php echo $val->shikaku2; ?></td>
            </tr>
            <tr>
                <td class="center"><?php echo $val->nengetu3; ?></td>
                <td class="center"><?php echo $val->shikaku3; ?></td>
            </tr>
        </tbody>
    </table>
  </br>
    <span>得意分野</span>
    </br>
    <?php echo $val->specialty; ?>
  </br></br>
    <span>自己PR</span>
    </br>
    <?php echo $val->message; ?>
    </br>
    <?php } ?>
    </br>
    <?php foreach($career as $val){ ?>
      <?php echo $val->detail; ?>
      </br>
    <?php } ?>
  </br></br>
      <button type="button" onclick="location.href='/Sample/public/user'">ユーザー一覧</button>
</div>

</body>

</html>
