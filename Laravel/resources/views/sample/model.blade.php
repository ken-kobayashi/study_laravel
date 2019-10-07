<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>model sample</title>
</head>

<body>
  <ul>
    @foreach($data as $d)
      <li>{{$d->name}}</li>
    @endforeach
  </ul>
</body>
</html>
