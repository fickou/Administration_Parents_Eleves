<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .liste-container{
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        .liste-container h1{
            text-align: center;
        }
        .liste-container table{
            width: 100%;
        }
        .liste-container th,td{
            width: 20%;
            border-bottom: 1px solid black;
            text-align: center;
        }
        .inter-table td{
            border: none;
        }
    </style>
</head>
<body>
    <div class="liste-container">
        <h1>Liste des élèves de la TS2</h1>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Classe</th>
                <th>Actions</th>
            </tr>
            <td>Ficou</td>
            <td>Maria</td>
            <td>TS2</td>
            <td>
                <table class="inter-table">
                    <tr>
                        <td>Profil</td>
                        <td>Editer</td>
                        <td>Supprimer</td>
                    </tr>
                </table>
            </td>
        </table>
    </div>
</body>
</html>