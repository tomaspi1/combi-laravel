<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World!</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
</head>
<body>
    <h1>Hello!</h1>

    <p>Pocet navstevniku: <?php echo rand(); ?></p>
    <p>Pocet navstevniku: {{rand()}}</p>

    <p>Lorem ipsum dolor sit {{$jmenoPrihalsenehoUzivatele}} consectetur adipisicing elit. Molestias quis impedit quaerat ea nemo. Dolores, autem molestias nisi quia quas voluptates fugiat, quo ad qui nam nihil optio. Reiciendis, fuga?</p>

    {{-- toto je komentar pro blade sablony --}}
    {{-- timto si muze frontendak vypsat vsechny poslane promenne --}}
    {{-- dd(get_defined_vars()) --}}

    <table border="1px solid">
        <tr>
            <th>Jmeno chovatele</th>
            <th>Plat</th>
            <th>Email</th>
            <th>Operace</th>
        </tr>
        @foreach($chovatele as $chovatel)
        <tr>
            <td>{{$chovatel->jmeno}}</td>
            <td>{{$chovatel->plat}}</td>
            <td>{{$chovatel->email}}</td>
            <td>
                <a href="smazat-chovatele/{{$chovatel->id}}">Smazat</a>
                <br>
                <a href="editovat-chovatele/{{$chovatel->id}}">Editovat</a>
            </td>
        </tr>
        @endforeach
    </table>



    @if ($jePlnolety)
        <p>Jste plnolety, zde je nabidka alkoholu.</p>
        <ul>
        @foreach ($alkoholy as $alkohol)
            <li>{{$alkohol}}</li>
        @endforeach
        </ul>
    @else
        <p>Jste moc mlady! Dejte si mleko a bezte domu!</p>
    @endif



    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="pridat-chovatele" method="post">
        @csrf
        <label for="jmeno">Jmeno</label>
        <input type="text" name="jmeno-chovatele" id="jmeno" value="{{ old('jmeno-chovatele') }}">

        <label for="email">Email</label>
        <input type="email" name="email-chovatele" id="email" value="{{ old('email-chovatele')}}">

        <label for="plat">Plat</label>
        <input type="number" name="plat-chovatele" id="plat" min="0" value="{{ old('plat-chovatele') }}">

        <input type="submit" value="Pridat chovatele">
    </form>

</body>
</html>