<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Professeur</title>
    <style>
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
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
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-container button {
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        input[type="file"] {
            padding: 0;
            border: none;
            background: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form id="profForm">
            <h2>Formulaire Professeur</h2>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required placeholder="Entrer votre nom">
            
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom">
            
            <label for="genre">Genre:</label>
            <select id="genre" name="genre">
                <option value="male">Masculin</option>
                <option value="female">Féminin</option>
            </select>
            
            <label for="numero_telephone">Numéro téléphone:</label>
            <input type="tel" id="numero_telephone" name="numero_telephone" placeholder="Entrer votre numéro de téléphone">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Entrer votre email">
            
            <label for="date_naissance">Date de naissance:</label>
            <input type="date" id="date_naissance" name="date_naissance" placeholder="Entrer votre date de naissance">
            
            <label for="id_professeur">Identifiant du Professeur:</label>
            <input type="text" id="id_professeur" name="id_professeur" placeholder="Entrer l'identifiant du professeur">
            
            <label for="cours_enseignes">Cours enseignés:</label>
            <select id="cours_enseignes" name="cours_enseignes" multiple>
                <option value="Mathematiques">Mathématiques</option>
                <option value="Physique">Physique</option>
                <option value="Chimie">Chimie</option>
                <option value="Biologie">Biologie</option>
                <option value="Informatique">Informatique</option>
                <option value="Histoire">Histoire</option>
                <option value="Geographie">Géographie</option>
                <option value="Francais">Français</option>
                <option value="Anglais">Anglais</option>
            </select>
            
            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse" placeholder="Entrer l'adresse du professeur">
            
            <label for="photo">Photo:</label>
            <input type="file" id="photo" name="photo" placeholder="Choisir une photo">
            
            <label for="nom_utilisateur">Nom Utilisateur:</label>
            <input type="text" id="nom_utilisateur" name="nom_utilisateur">
            
            <label for="mot_de_passe">Mot de Passe:</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe">
            
            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>
</html>
