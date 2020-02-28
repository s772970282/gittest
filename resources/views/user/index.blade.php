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
    <table>
        <tr>
            <td>id</td>
            <td>用户名</td>
            <td>密码</td>
            <td>操作</td>
        </tr>
        @foreach($user as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->username}}</td>
            <td>{{$v->password}}</td>
            <td><a href="/test/public/index.php/user/edit/{{$v->id}}">修改</a>|<a href="/test/public/index.php/user/del/{{$v->id}}">删除</a></td>
        </tr>
        @endforeach
    </table>

    <style>
        table,tr,td{
            border: 1px solid blue;
        }
    </style>

</body>
</html>