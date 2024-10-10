<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Communication</title>
    <link rel="stylesheet" href="styles.css">
    <style>
.annonce-container {
    background-color: #fff;
    padding: 0;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#annonceForm{
    width: 400px;
    padding: 50px;
    margin: auto;
    background-color: #ecf0f1;
}

form {
    display: flex;
    flex-direction: column;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}

.annonce-container input, select, textarea {
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px;
    background-color: #2c3e50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 105%;
    margin-bottom: 50px;
    font-size: 25px;
}

button:hover {
    background-color: #212e3c;
}

    </style>
</head>
<body>
    <div class="annonce-container">
        <form id="annonceForm">
            <h2>Formulaire de Publication d'Annonces</h2>
            
            <label for="annonce">Titre de l'annonce :</label>
            <input type="text" id="annonce" name="annonce" placeholder="Enter un titre pour l'annonce">

            <label for="contenu">Contenu de l'annonce :</label>
            <textarea id="contenu" name="contenu" placeholder="Texte détaillant l'information à communiquer"></textarea>

            <label for="date-pub">Date de publication :</label>
            <input type="date" id="date-pub" name="date-pub" placeholder="Date à laquelle l'annonce doit être publiée">
            
            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>
</html>
