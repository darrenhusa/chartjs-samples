<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Hello view</h1>

  <ol>
  @foreach ($users as $user)
      <li>{{ $user->name }}</li>
  @endforeach
  </ol>

</body>
</html>
