<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Factures</title>
</head>
<body>
    <h1>Création d'une Facture</h1>
    <h3>  <a href="{{route('index')}}">Back</a>  </h3>

    <br>
    <form action="{{ route('store') }}" method="POST">

        @csrf
        <label for="numero">Numéro : </label>
        <input type="number" name="numfact" id="numero"> 
        <br>
        <label for="datefact">Date Facture: </label>
        <input type="date" name="datefact" id="datefact">
        <br>
        <label for="montant">Montant: </label>
        <input type="number" name="montantfact" id="montant">
        <br>
        <label for="id">Client: </label>
        <select name="idclient" >
            @foreach ($clients as $cli)
                <option value="{{ $cli->id }}">{{ $cli->nomcli }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
