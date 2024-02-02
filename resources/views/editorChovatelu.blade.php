<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editor chovatelu</title>
</head>
<body>
    <h1>Editor chovatelu</h1>

    <form action="/aktualizovat-chovatele/{{$chovatel->id}}" method="post">
        @csrf
        <label for="">Jmeno: </label>
        <input type="text" name="jmeno-chovatele" id="" value="{{$chovatel->jmeno}}">
        <br>
        <label for="">Email: </label>
        <input type="email" name="email-chovatele" id="" value="{{$chovatel->email}}">
        <br>
        <label for="">Plat: </label>
        <input type="number" name="plat-chovatele" id="" min="0" value="{{$chovatel->plat}}">
        <br>
        <input type="submit" value="Aktualizovat">
    </form>
</body>
</html>