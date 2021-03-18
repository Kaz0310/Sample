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
  <button v-on:click="toggle_switch()">Toggle Button</button>
  <p v-if="isActive === false">退社
  </p>
  <p v-else>出社
  </p>
 </div>
<script>
 export default {
  data: function() {
   return {
    isActive: false
   }
  },
  methods: {
   toggle_switch: function() {
    this.isActive = !this.isActive
   }
  }
 }
</script>
</body>
</html>
