<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>社員情報入力</title>
    <link rel="stylesheet" href="{{ asset('css/create_style.css') }}">
</head>
<body>
    <h2>社員情報入力</h2>
<form action="/public/form" method="post">
@csrf
<div>
    <table>
        <tbody>
            <tr>
                <th scope="row">社員番号</th>
                <td><input size="15" type="text" id="number" name="number"></td>
            </tr>
            <tr>
                <th scope="row">氏名</th>
                <td><input size="40" type="text" id="name" name="name"></td>
                <th scope="row">生年月日</th>
                <td><input size="15" type="text" id="birthday" name="birthday"></td>
            </tr>
            <tr>
                <th scope="row">氏名(ふりがな)</th>
                <td><input size="40" type="text" id="furigana" name="furigana"></td>
                <th scope="row">性別</th>
                <td><input size="15" type="text" id="sex" name="sex"></td>
                <th scope="row">年齢</th>
                <td><input size="15" type="text" id="age" name="age"></td>
            </tr>
        </tbody>
    </table>
    </br>
    <span>現住所</span>
    <table>
        <tbody>
            <tr>
                <th scope="row">住所</th>
                <td><input size="76" type="text" id="address" name="address"></td>
            </tr>
            <tr>
                <th scope="row">住所(ふりがな)</th>
                <td><input size="76" type="text" id="address_furi" name="address_furi"></td>
            </tr>
            <tr>
                <th scope="row">最寄り駅</th>
                <td><input size="40" type="text" id="near_station" name="near_station"></td>
            </tr>
            <tr>
                <th scope="row">電話</th>
                <td><input size="40" type="text" id="phone" name="phone"></td>
            </tr>
            <tr>
                <th scope="row">メール</th>
                <td><input size="40" type="text" id="mail" name="mail"></td>
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
                <td class="center"><input size="12" type="text" id="nengetu" name="nengetu"></td>
                <td class="center"><input size="40" type="text" id="gakureki" name="gakureki"></td>
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
                <td class="center"><input size="12" type="text" id="nengetu1" name="nengetu1"></td>
                <td class="center"><input size="40" type="text" id="shikaku1" name="shikaku1"></td>
            </tr>
            <tr>
                <td class="center"><input size="12" type="text" id="nengetu2" name="nengetu2"></td>
                <td class="center"><input size="40" type="text" id="shikaku2" name="shikaku2"></td>
            </tr>
            <tr>
                <td class="center"><input size="12" type="text" id="nengetu3" name="nengetu3"></td>
                <td class="center"><input size="40" type="text" id="shikaku3" name="shikaku3"></td>
            </tr>
        </tbody>
    </table>
  </br>
    <span>得意分野</span>
    </br>
    <textarea id="specialty" name="specialty"></textarea>
  </br></br>
    <span>自己PR</span>
    </br>
    <textarea id="message" name="message"></textarea>
</div>

<button type="submit" id="confirm" name="confirm">確認画面へ</button>
</form>
</body>

</html>
