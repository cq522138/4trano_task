<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="">Add new task</a>
                    <a href="{{ route('tasks.index') }}">Tasks list</a>
                </div>
            </div>
        </div>

        @if(!isset($tasks))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
        @else
            @endif


        @if(!isset($tasks))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
        @else
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Created</th>
                    <th scope="col">Due Date</th>
                </tr>
                </thead>
                <tbody>
                // Kiểm tra, nếu biến tasks có số lượng bằng 0 (Không có task nào) thì trả về thông báo
                @if(count($tasks) == 0)
                    <tr>
                        <td colspan="5"><h5 class="text-primary">Hiện tại chưa có task nào được tạo!</h5></td>
                    </tr>
                @else
                    // Duyệt mảng $tasks, lấy ra từng trường của từng task để hiển thị ra bảng
                    @foreach($tasks as $key => $task)
                        <tr>
                            <td scope="row">{{ ++$key }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->content }}</td>
                            <td>{{ $task->created_at }}</td>
                            <td>{{ $task->due_date }}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        @endif
    </body>
</html>
