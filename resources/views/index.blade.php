<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDoList</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawsome.com/releases/v5.10.0/css/all.css">
    <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-3.2.1.main.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}//js/bootstrap.js"></script>
    <script src="https://akax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.main.js"></script>

</head>
<body>
    <div class="alret alret-info text-center">
        <h4 style="margin-bottom: 0px"><b>ToDoList</b> Manage your activity</h4>
    </div>
        @include('menu')
        @include('sidebar')
        @include('konten')
        @include('footer')
    </div>
</body>
</html>