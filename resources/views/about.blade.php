<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
<div style="text-align: center;">
    <h1>aboutページ テスト2</h1>
</div>
<div id="app-1">@{{ message }}</div>
<script>
var app1 = new Vue({
  el: '#app-1',
  data: { message: 'Hello world!' }
})
</script>
</body>
</html>
