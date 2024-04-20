<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (@session('yes'))

    <div class="alert alert-succes">
        {{session('yes')}}
    </div>

    @endif
<table border="2">
    <tr>
        <th> Titre </th>
        <th> Annee publication </th>
        <th> Nombre de Page </th>
        <th> Nom du Auteur </th>
        <th>Actions</th>
    </tr>
    @foreach($data as $dt)
    <tr>
        <td> {{$dt->titre}} </td>
        <td> {{$dt->anneepub}} </td>
        <td> {{$dt->nbrpages}} </td>
        <td> {{$dt->getNom()}} </td>
        <td>
            <form method="POST" action="{{route('delete',$dt->id)}}" >
                @csrf
                @method('delete')
                <button onclick="(return confirm('Vous voullez supprimer cette livres'))">Supprimer</button></form> 
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>
