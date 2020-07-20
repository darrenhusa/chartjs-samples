<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chart.js Practice</title>
</head>
<body>
  <h1>Chart.js Practice</h1>
  <div id="root">
    {{-- <example-component></example-component> --}}
    <line-graph v-bind:legend="['Jan', 'Feb', 'Mar']"
               v-bind:chartdata="[20, 10, 30]"
               color="green"
    ></line-graph>
    {{-- <bar-graph v-bind:legend="['01', '02', '03']"
               v-bind:chartdata="[100, 50, 25]"
    ></bar-graph> --}}

    {{-- <bar-graph></bar-graph> --}}
  </div>
  {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> --}}
  <script src="/js/app.js"></script>
</body>
</html>
