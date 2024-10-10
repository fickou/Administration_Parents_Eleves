<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Génération de Factures</title>
    <style>

        .factures-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .factures-container button {
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

        .factures-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="factures-container">
        <form id="facturesForm">
            <h2>Formulaire de Génération de Factures</h2>
            
            <label for="id-eleve">ID de l'élève :</label>
            <input type="text" id="id-eleve" name="id-eleve" placeholder="Sélection de l'élève pour qui la facture est générée.">

            <label for="montant">Montant :</label>
            <input type="number" id="montant" name="montant" min="0" placeholder="Montant total à facturer">

            <label for="frais">Description des frais :</label>
            <textarea id="frais" name="frais" placeholder="Détails sur les frais inclus dans la facture"></textarea>

            <label for="date-limite">Date limite de paiement de la facture :</label>
            <input type="date" id="date-limite" name="date-limite" placeholder="Date limite de paiement de la facture">
            
            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>
