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
<div id="app">
  <toggle-button @change="onChangeEventHandler"></toggle-button>
  <toggle-button v-model="myDataVariable"></toggle-button>  
  <toggle-button :value="false"
                 color="#82C7EB"
                 height="40"
                 width="84"
                 :sync="true"
                 :labels="true"></toggle-button>
  <toggle-button :value="true"
                 :labels="{checked: 'Foo', unchecked: 'Bar'}"></toggle-button>
</div>
<script>
var app1 = new Vue({
   el: '#app',
   data: {
    myDataVariable: ''
   },
   methods: {
    onChangeEventHandler: function(){
      console.log('onChangeEventHandler');
    }
   }
})
</script>
</body>
</html>
