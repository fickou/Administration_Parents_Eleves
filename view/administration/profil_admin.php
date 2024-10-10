<style>
    #profil{
        font-size: 20px;
        cursor: pointer;
        border-radius: 100px;
        background-color: #4CAF50;
        border: none;
    }
    #prof{
        margin-top: 500px;
        z-index: 2000;
        position: absolute;
        margin-right: 50px;
    }
    .profil{
        border: 1px solid black;
        width: 260px;
        margin-left:auto;
        border-radius: 10px;
    }
    .partie1{
        text-align: center;
        padding: 20px;
        background-color: blue;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .section-photo{
        position: absolute;
        z-index: 3000;
        width: 26%;
        margin-left: 37%;
        margin-top: -13%;
        border-radius: 50%;
    }
    .image{
        width: 100%;
    }
    .partie2{
        padding-top: 20px;
        background-color: black;
        color: white;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    .partie2 a{
        text-decoration: none;
        color: white;
        margin-bottom: 10%;
    }
    .info-pers{
        text-align: center;
        margin-bottom:20px;
    }

    .info-pers>p{
        margin-bottom: -10px;
        font-size: 15px;
    }

    .info-secu{
        padding: 10px;
    }
    
    .info-gestion{
        border-top: 1px solid white;
        padding: 10px;
    }
    .info-secu a,.info-gestion a {
        display: block;
        margin-bottom: 10px; 
    }

    .sous-section i{
        margin-right: 18px;
    }
    .info-secu a:hover,.info-gestion a:hover{
        background-color: rgba(255, 255, 255, 0.5);
    }
</style>
<button onclick="monProfil()" id="profil"><i class="fas fa-user"></i></button>
<div class="profil" id="prof">
    <div class="partie1">
        <div>
            <p>Personne</p>
        </div>
        <div class="modif">
            
        </div>
        <div></div>
    </div>
    <div class="section-photo">
        <img src="../../images/MonLogo.png" alt="" class="image">
    </div>
    <div class="partie2">
        <div class="info-pers">
            <p>Nom utilisateur</p>
            <p>Adresse Email</p>
            <p>Numéro de Téléphone</p>
            <p>Dernière connexion</p>
        </div>
        <div class="info-secu">
            <a href="">
                <div class="sous-section">
                    <i class="fas fa-lock"></i> Paramètres de sécurité
                </div>
            </a><a href="">
                <div class="sous-section">
                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                </div>
            </a>
        </div>
        <div class="info-gestion" >
            <a href="">
                <div class="sous-section"> <i class="fas fa-book"></i> Gestion des Cours</div>
            </a>
            <a href="">
                <div class="sous-section"> <i class="fas fa-user-graduate"></i> Gestion des Elèves</div>
            </a>
            <a href="">
                <div class="sous-section"> <i class="fas fa-chalkboard-teacher"></i> Gestion des Enseignants</div>
            </a>
            <a href="">
                <div class="sous-section"> <i class="fas fa-money-bill-wave"></i> Gestion Financière</div>
            </a>
        </div>
    </div>
</div>

<script>
    profil = document.getElementById('prof');
    profil.style.display = 'none';
    var q = 0;
    function monProfil() {
        if (q==0) {
            profil.style.display = 'block';
            q = 1;
        }
        else{
            profil.style.display = 'none';
            q = 0;
        }
        
    }
</script>