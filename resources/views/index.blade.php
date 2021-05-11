<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .style{
            width: 100px;
            height: 50px;
            background-color: red;
        }
    </style>
</head>
<body>
    @if (session()->get('local') == 'en')
        <a name="" id="" class="btn btn-danger" href="{{route('user.change-language',['language' => 'vi'])}}" role="button">Vietnamese</a>
    @elseif(session()->get('local') == 'vi')
        <a name="" id="" class="btn btn-primary" href="{{route('user.change-language',['language' => 'en'])}}" role="button">English</a>
    @else
    <a name="" id="" class="btn btn-danger" href="{{route('user.change-language',['language' => 'vi'])}}" role="button">Tiếng Việt</a>
    @endif
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ trans('message.name') }}</th>
                            <th>{{ trans('message.email') }}</th>
                            <th>{{ trans('message.pass') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td scope="row">{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   <a href="#" class="style">aaaaaaaaaaaaa</a>
</body>
</html>
@if (session()->has('local'))
    {{session()->get('local')}}
@endif
<script>
    $(document).ready(function () {
        $(".style").click(function (e) {
            e.preventDefault();
            $(this).attr('href');
        });
    });
</script>
