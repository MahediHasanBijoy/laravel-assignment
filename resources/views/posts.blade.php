<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid black;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">All Posts</h1>
    <table>
        <tr>
            <th>Sl</th>
            <th>Title</th>
            <th style="width: 500px">Content</th>
            <th>Category</th>
        </tr>
        @php
            $sl=1;
        @endphp
        @foreach ($posts as $post)
            <tr>
                <td>{{ $sl++ }}</td>
                <td>{{ $post->title}}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->category->name}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>