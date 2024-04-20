<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>
<body>
    <h1>Liste des factures</h1>
    <h1><a href="{{route('index')}}">Back</a></h1>

    <form action="{{ route('search') }}" method="post">
        @csrf
        <label for="start_date">Date de début :</label>
        <input type="date" id="start_date" name="start_date">
        <label for="end_date">Date de fin :</label>
        <input type="date" id="end_date" name="end_date">
        <button type="submit">Rechercher</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Numéro de facture</th>
                <th>Date de facture</th>
                <th>Client</th>
                <th>Montant</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($factures as $facture)
            <tr>
                <td>{{ $facture->numfact }}</td>
                <td>{{ $facture->datefact }}</td>
                <td>{{ $facture->getClient()}}</td>
                <td>{{ $facture->montantfact }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>
