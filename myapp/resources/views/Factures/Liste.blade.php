<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Liste Des Factures</h1>
    <br>

    <a href="{{ route('ajouter') }}">Ajouter Un Stagiaire</a>
    <a href="{{route('search')}}">Search Factures</a>

    <br> <br>
    <table>
        <thead>
            <tr>
                <th>Numero</th>
                <th>Date Facture</th>
                <th>Client</th>
                <th>Montant</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($factures as $fact)
                <tr>
                    <td>{{ $fact->numfact }}</td>
                    <td>{{ $fact->datefact }}</td>
                    <td>{{ $fact->getClient() }}</td>
                    <td>{{ $fact->montantfact }}</td>
                    <td>
                        <a href="{{ route('edit', $fact->id) }}">Modifier</a>
                        <a href="{{ route('delete', $fact->id) }}">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
