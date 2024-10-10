<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Communication</title>
    <link rel="stylesheet" href="styles.css">
    <style>
.messagerie-container {
    background-color: #fff;
    padding: 0;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#messagerieForm{
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

.messagerie-container input, select, textarea {
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
    <div class="messagerie-container">
        <form id="messagerieForm">
            <h2>Formulaire de Communication (Messagerie)</h2>
            
            <label for="destinataire">Destinataire :</label>
            <select id="destinataire" name="professeur-enseignes">
                <option value="parent">Parent</option>
                <option value="enseignant">Enseignant</option>
                <option value="administrateur">Administrateur</option>
            </select>
            
            <label for="sujet">Sujet du message :</label>
            <input type="text" id="sujet" name="sujet" placeholder="Sujet du message">

            <label for="contenu">Corps principal du message :</label>
            <textarea id="contenu" name="contenu"></textarea>

            <label for="pieces-jointes">Pièces jointes  :</label>
            <input type="file" id="pieces-jointes" name="pieces-jointes">
            
            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>
