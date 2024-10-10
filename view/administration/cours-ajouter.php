<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Création de Cours</title>
    <style>

        .cours-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
            margin-left:auto;
            margin-right:auto;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }

        input, select, textarea {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .cours-container button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .cours-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="cours-container">
        <form id="coursForm">
            <h2>Formulaire de Création de Cours</h2>
            <label for="titre-cours">Titre du cours :</label>
            <input type="text" id="titre-cours" name="titre-cours" required placeholder="Entrer le titre du cours">

            <label for="description">Description :</label>
            <textarea id="description" name="description" placeholder="Ajouter une description"></textarea>
            
            <label for="professeur-enseignes">Professeurs assignés :</label>
            <select id="professeur-enseignes" name="professeur-enseignes" multiple>
                <option value="Mathematiques">Prof Mathématiques</option>
                <option value="Physique">Prof Physique</option>
                <option value="Chimie">Prof Chimie</option>
                <option value="Biologie">Prof Biologie</option>
                <option value="Informatique">Prof Informatique</option>
                <option value="Histoire">Prof Histoire</option>
                <option value="Geographie">Prof Géographie</option>
                <option value="Francais">Prof Français</option>
                <option value="Anglais">Prof Anglais</option>
            </select>
            
            <label for="heure-semaine">Nombre d'heures par semaine :</label>
            <input type="number" id="heure-semaine" name="heure-semaine" placeholder="Entrer le nombre d'heures">
            
            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>
</html>
