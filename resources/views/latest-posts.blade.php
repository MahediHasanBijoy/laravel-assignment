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
    <h1 style="text-align: center;">Latest Posts by Category</h1>
    <table>
        <tr>
            <th>Sl</th>
            <th>Category</th>
            <th>Title</th>
            <th style="width: 500px">Content</th>

        </tr>
        @php
            $sl=1;
        @endphp
        @foreach ($categories as $category)
            <tr>
                <td>{{ $sl++ }}</td>
                <td>{{ $category->name}}</td>
                <td>@if ($category->latestPost)
                    {{ $category->latestPost->title }}
                @endif</td>
                <td>@if ($category->latestPost)
                    {{ $category->latestPost->content }}
                @endif</td>
            </tr>
        @endforeach
    </table>
</body>
</html>