<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>{{ $client ? "Сеансы клиента " . $client->name : 'Неверный ID клиента' }}</h2>

@if($client)
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>ФИО косметолога</th>
            <th>Дата и время начала</th>
            <th>Дата и время окончания</th>
        </tr>
        </thead>
        @foreach($client->cosmetologistSessions as $session)
            <tr>
                <td>{{ $session->id }}</td>
                <td>{{ $session->cosmetologist->name }}</td>
                <td>{{ $session->date_time_start }}</td>
                <td>{{ $session->date_time_end }}</td>
            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
