<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Modifier Factures : {{$factureFind->id}}</h1>
    <h3>  <a href="{{route('index')}}" class="text-center">Back</a>  </h3>

    <br>
    <form action="{{route('Update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$factureFind->id}}">
        <label for="">Numero </label>
        <input type="number" name="numfact" value="{{$factureFind->numfact}}">
        <br>
        <label for="">Date </label>
        <input type="date" name="datefact" value="{{$factureFind->datefact}}">
        <br>
        <label for="">Montant </label>
        <input type="number" name="" value="{{$factureFind->montantfact}}">
        <br>
        <label for="">Client : </label>
        <select name="idclient" id="">
            @foreach ($clients as $cls)
                <option value="{{$cls->id}}"
                    @if ($cls->id == $factureFind->id) selected @endif
                    >{{$cls->nomcli}}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Modifier">
    </form>
</body>
</html>
