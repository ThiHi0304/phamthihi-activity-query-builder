<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text" href="assets/css/post.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container m-5">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($postList))
                    @foreach ($postList as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <th scope="row">{{$item->title}}</th>
                            <td>{{$item->description}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>Không có người dùng</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

</body>

</html>
