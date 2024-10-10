<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Élève</title>
    <link rel="stylesheet" href="styles.css">
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
            font-size: 26px;
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
        <form id="eleveForm">
            <h2>Inscription Élève</h2>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required placeholder="Entrer le nom de l'élève">
            
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrer le prénom de l'élève">
            
            <label for="genre">Genre:</label>
            <select id="genre" name="genre">
                <option value="male">Masculin</option>
                <option value="female">Féminin</option>
                <option value="other">Autre</option>
            </select>
            
            <label for="date_naissance">Date de Naissance:</label>
            <input type="date" id="date_naissance" name="date_naissance" placeholder="Entrer la date de naissance de l'élève">
            
            <label for="photo">Photo:</label>
            <input type="file" id="photo" name="photo" placeholder="Choisissez votre photo">
            
            <label for="classe">Classe:</label>
            <input type="text" id="classe" name="classe" placeholder="Entrer sa classe">
            
            <label for="email_tuteur">Email Tuteur:</label>
            <input type="email" id="email_tuteur" name="email_tuteur" placeholder="Entrer l'email de son tuteur">
            
            <label for="nom_tuteur">Nom Tuteur:</label>
            <input type="text" id="nom_tuteur" name="nom_tuteur" placeholder="Entrer le nom de son tuteur">
            
            <label for="nom_mere">Nom Mère:</label>
            <input type="text" id="nom_mere" name="nom_mere" placeholder="Entrer le nom de sa mère">
            
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact">
            
            <label for="adresse">Adresse:</label>
            <textarea id="adresse" name="adresse" placeholder="Entrer son adresse"></textarea>
            
            <label for="nom_utilisateur">Nom Utilisateur:</label>
            <input type="text" id="nom_utilisateur" name="nom_utilisateur">
            
            <label for="mot_de_passe">Mot de Passe:</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe">
            
            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>
</html>
