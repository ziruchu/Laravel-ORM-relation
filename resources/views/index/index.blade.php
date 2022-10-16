<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>用户列表</title>
    <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row text-center mt-3">
            <h1>Laravel 模型关联案例</h1>
        </div>
        <div class="row">
            <table class="table m-3">
                <thead>
                <tr>
                    <th>姓名</th>
                    <th>邮箱</th>
                    <th>创建时间</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
