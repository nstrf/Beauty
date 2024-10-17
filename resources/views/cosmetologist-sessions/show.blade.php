<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>{{ $cosmetologistSession ? "Услуги для сеанса ID: " . $cosmetologistSession->id : 'Неверный ID сеанса' }}</h2>

@if($cosmetologistSession)
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Наименование услуги</th>
            <th>Стоимость</th>
        </tr>
        </thead>
        @foreach($cosmetologistSession->procedures as $procedure)
            <tr>
                <td>{{ $procedure->id }}</td>
                <td>{{ $procedure->name }}</td>
                <td>{{ $procedure->price }}</td>
            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
