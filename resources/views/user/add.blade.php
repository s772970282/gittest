<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{--<form action="/user/store" method="post">--}}
<form action="{{url('/user/store')}}" method="post">
    <table>
        <tr>
            {{ csrf_field() }}
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            <td>用户名</td>
            <td><input type="text" name="username"></td>
            <td>密码</td>
            <td><input type="password" name="password"></td>
            <td></td>
            <td><input type="submit" value="提交"></td>
        </tr>
    </table>
</form>
</body>
</html>