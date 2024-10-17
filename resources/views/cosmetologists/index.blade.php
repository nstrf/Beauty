<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>Список косметологов:</h2>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>ФИО</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cosmetologists as $cosmetologist)
        <tr>
            <td>{{ $cosmetologist->id }}</td>
            <td>{{ $cosmetologist->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
