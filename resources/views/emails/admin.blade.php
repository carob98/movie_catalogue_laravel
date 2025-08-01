<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Ciao Admin, un nuovo utente si é registrato a {{ env('APP_NAME') }}!</h1>
    <p>Informazioni:</p>
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{ $data['name'] }}</td>
            <td>{{ $data['email'] }}</td>
        </tr>
    </table>
</body>

</html>
