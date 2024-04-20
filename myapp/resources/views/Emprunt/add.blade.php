<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    @csrf
    <label>Titre</label>
    <input type="text" name="titre">
    <label>Année Publication</label>
    <input type="date" name="anneepub">
    <label>Nombre de page</label>
    <input type="number" name="nbrpages">
    <label>Nom d'auteur</label>
    <input type="text" name="nom">
</form>
</body>
</html>
