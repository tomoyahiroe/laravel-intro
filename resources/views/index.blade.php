<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>{{$txt}}</h1>

  @if (count($errors) > 0)
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
  @endif

  <form action="/" method="Post">
    <table>
      @csrf
      @error('name')
      <tr>
        <th>ERROR</th>
        <td>{{$errors->first('name')}}</td>
      </tr>
      @enderror
      <tr>
        <th>名前</th>
        <td><input type="text" name="name" /></td>
      </tr>
      @error('role')
      <tr>
        <th>ERROR</th>
        <td>{{$errors->first('role')}}</td>
      </tr>
      @enderror
      <tr>
        <th>役職</th>
        <td><input type="text" name="role" /></td>
      </tr>
      @error('email')
      <tr>
        <th>ERROR</th>
        <td>{{$errors->first('email')}}</td>
      </tr>
      @enderror
      <tr>
        <th>メールアドレス</th>
        <td><input type="email" name="email" /></td>
      </tr>
      @error('age')
      <tr>
        <th>ERROR</th>
        <td>{{$errors->first('age')}}</td>
      </tr>
      @enderror
      <tr>
        <th>年齢</th>
        <td><input type="text" name="age" /></td>
      </tr>
      @error('registered_at')
      <tr>
        <th>ERROR</th>
        <td>{{$errors->first('registered_at')}}</td>
      </tr>
      @enderror
      <tr>
        <th>登録日</th>
        <td><input type="text" name="registered_at" /></td>
      </tr>
    </table>
    <input type="submit" value="送信" />
  </form>
</body>

</html>