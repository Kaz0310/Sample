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
    <h2>勤怠状態</h2>
    <?php echo $data; ?>
    </br>
    @if($data->arrive)
    <button type="button" disabled onclick="location.href='/Sample/public/arrive'">出社</button>
    <button type="button" onclick="location.href='/Sample/public/leave'">退社</button>
    @else
    <button type="button" onclick="location.href='/Sample/public/arrive'">出社</button>
    <button type="button" disabled onclick="location.href='/Sample/public/leave'">退社</button>
    @endif
    
</div>
</body>
</html>
