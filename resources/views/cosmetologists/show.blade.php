<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>{{ $cosmetologist ? "Сеансы косметолога " . $cosmetologist->name : 'Неверный ID косметолога' }}</h2>

@if($cosmetologist)
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>ФИО клиента</th>
            <th>Дата и время начала</th>
            <th>Дата и время окончания</th>
        </tr>
        </thead>
        @foreach($cosmetologist->cosmetologistSessions as $session)
            <tr>
                <td>{{ $session->id }}</td>
                <td>{{ $session->client->name }}</td>
                <td>{{ $session->date_time_start }}</td>
                <td>{{ $session->date_time_end }}</td>
            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
