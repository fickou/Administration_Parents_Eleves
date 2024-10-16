<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration_Parents_Elèves</title>
    <link rel="stylesheet" href="../fontawesome-free-6.5.2-web/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background: #2c3e50;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .logo{
            width: 60px;
        }
        .logo img{
            width: 100%;
        }

        .image-container {
            width: 100%; 
            height: 200px; 
            position: relative;
            overflow: hidden; 
        }
        .image-container img {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        

        .user-menu{
            display: flex;
            margin-left: 10px;
            cursor: pointer;
            
        }
        
        .user-menu i{
            color: white;
        }
        .user-menu i:hover{
            color: chocolate;
        }
        .droite {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .icon-link i {
            font-size: 24px;
            margin-left: 20px; 
            margin-right: 20px; 
        }

        .icon-link:hover {
            color: #007bff;
            color: chocolate;
        }
        .rech{
            width: 60%;
            display: flex;
            align-items: center;
        }
        header form{
            width: 100%;
            display: flex;
        }
        .rech1{
            width: 90%;
        }
        .search-bar {
            width: 95%;
            padding: 5px;
            border-radius: 5px;
            border: none;
            flex: 1;
        }

        .container {
            display: flex;
            flex: 1;
            margin-top: 60px;
            overflow-y: hidden;
            height: calc(100vh - 60px);
        }

        .content {
            flex: 1;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            overflow-y: auto;
            
        }

        .dashboard h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        a{
            text-decoration: none;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .card:hover{
            box-shadow: 0 8px 16px rgba(0, 0, 51, 0.8);
            transform: translateY(-15px);
        }

        .card i {
            font-size: 40px;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .card h3 {
            margin: 10px 0;
        }

        .card p {
            color: #777;
        }


        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            bottom: 0;
            width: 100%;
            
        }

        footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .element{
            padding: 20px;
            border-radius: 10px;
        }


        @media screen and (max-width: 800px) {
            .container {
                height: auto;
                flex-direction: column;/*ajustement automatique en une colonne sur les petits écrans */
            }
            .sidebar {
                width: 100%;
                top: 60px;
                height: auto;
                position: relative;
            }
            .content {
                margin-left: 0;
                padding: 10px;
                overflow-y: auto;
            }
        }
        .rech{
            display: flex;
        }
        .rech button{
            padding: 4px;
            border-radius: 5px;
        }
        .rech button:hover{
            color: white;
            cursor: pointer;
            background-color: chocolate;
        }
        #profil:hover{
            color: chocolate;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="../../images/MonLogo.png" alt="" srcset="" class="image">
        </div>
        
        <div class="rech">
            <form action="#" method="post">
                <div class="rech1"><input type="text" id="recherche" name="recherche" placeholder="Rechercher..." class="search-bar"></div>
                <div><button type="submit"><i class="fas fa-search"></i></button></div> 
            </form>
        </div>
        <div class="user-menu">
            <div class="droite"><a href="#" class="icon-link"><i class="fas fa-bell"></i></a></div>
            <div class="droite"><a href="#" class="icon-link"><i class="fas fa-envelope"></i></a></div>
            <div class="droite"><?php include 'profil_admin.php'?></div>
        </div>
    </header>
    <div class="container">
        <?php include 'menu.php'?>
        <p></p>
        <main class="content" id="main-content">
            <div class="image-container">
                <img src="../../images/MonLogo.png" alt="" srcset="" class="image">
            </div>
            <section class="dashboard">
            <h1>Bienvenue dans le module d'administration</h1>
            <div class="cards">
                <a href="">
                    <div class="card">
                        <i class="fas fa-user-graduate"></i>
                        <h3>Élèves</h3>
                        <p>Gérer les informations des élèves</p>
                    </div>
                </a>
                <a href="">
                    <div class="card">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h3>Professeurs</h3>
                        <p>Gérer les informations des professeurs</p>
                    </div>
                </a>
                <a href="">
                    <div class="card">
                        <i class="fas fa-book"></i>
                        <h3>Cours</h3>
                        <p>Gérer les cours et les programmes</p>
                    </div>
                </a>
                <a href="">
                    <div class="card">
                        <i class="fas fa-money-check-alt"></i>
                        <h3>Gestion des frais</h3>
                        <p>Suivre les paiements et les frais</p>
                    </div>
                </a>
                <a href="">
                    <div class="card">
                        <i class="fas fa-file-invoice"></i>
                        <h3>Factures</h3>
                        <p>Générer et gérer les factures</p>
                    </div>
                </a>
                <a href="">
                    <div class="card">
                        <i class="fas fa-comments"></i>
                        <h3>Communication</h3>
                        <p>Gérer la communication avec les élèves et les parents</p>
                    </div>
                </a>
                <a href="">
                    <div class="card">
                        <i class="fas fa-chart-line"></i>
                        <h3>Rapport</h3>
                        <p>Voir et analyser les rapports</p>
                    </div>
                </a>
                <a href="">
                    <div class="card">
                        <i class="fas fa-star"></i>
                        <h3>Avis</h3>
                        <p>Gérer les avis et les retours</p>
                    </div>
                </a>
                <a href="">
                    <div class="card">
                        <i class="fas fa-file-alt"></i>
                        <h3>Pages</h3>
                        <p>Gérer les pages du site</p>
                    </div>
                </a>
            </div>
        </section>
        </main>
    </div>
    <footer>
        <p>© 2024 Collège XYZ. Tous droits réservés.</p>
        <p><a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a> | <a href="#">Assistance</a></p>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggles = document.querySelectorAll(".aff-sous-menu");
            toggles.forEach(toggle => {
                toggle.addEventListener("click", function() {
                    const sousMenu = this.nextElementSibling;
                    if (sousMenu.style.display === "block") {
                        sousMenu.style.display = "none";
                    } else {
                        sousMenu.style.display = "block";
                    }
                });
            });

            const navLinks = document.querySelectorAll(".nav-link");//contient les liens de navigations
            const mainContent = document.getElementById("main-content"); //récupère l'id du main

            navLinks.forEach(link => {
                link.addEventListener("click", function() {
                    const target = this.getAttribute("data-target");
                    if (target === "dashboard") {
                        mainContent.innerHTML = getDashboardContent();
                    } else {
                        fetch(target)
                            .then(response => response.text())
                            .then(data => {
                                mainContent.innerHTML = data;
                            })
                            .catch(error => console.error('Error fetching content:', error));
                    }
                });
            });

            function getDashboardContent() {
                return `
                     <div class="image-container">
                            <img src="../../images/MonLogo.png" alt="" srcset="" class="image">
                        </div>
                        <section class="dashboard">
                        <h1>Bienvenue dans le module d'administration</h1>
                        <div class="cards">
                            <div class="card">
                                <i class="fas fa-user-graduate"></i>
                                <h3>Élèves</h3>
                                <p>Gérer les informations des élèves</p>
                            </div>
                            <div class="card">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <h3>Professeurs</h3>
                                <p>Gérer les informations des professeurs</p>
                            </div>
                            <div class="card">
                                <i class="fas fa-book"></i>
                                <h3>Cours</h3>
                                <p>Gérer les cours et les programmes</p>
                            </div>
                            <div class="card">
                                <i class="fas fa-money-check-alt"></i>
                                <h3>Gestion des frais</h3>
                                <p>Suivre les paiements et les frais</p>
                            </div>
                            <div class="card">
                                <i class="fas fa-file-invoice"></i>
                                <h3>Factures</h3>
                                <p>Générer et gérer les factures</p>
                            </div>
                            <div class="card">
                                <i class="fas fa-comments"></i>
                                <h3>Communication</h3>
                                <p>Gérer la communication avec les élèves et les parents</p>
                            </div>
                            <div class="card">
                                <i class="fas fa-chart-line"></i>
                                <h3>Rapport</h3>
                                <p>Voir et analyser les rapports</p>
                            </div>
                            <div class="card">
                                <i class="fas fa-star"></i>
                                <h3>Avis</h3>
                                <p>Gérer les avis et les retours</p>
                            </div>
                            <div class="card">
                                <i class="fas fa-file-alt"></i>
                                <h3>Pages</h3>
                                <p>Gérer les pages du site</p>
                            </div>

                            <!-- Ajoutez d'autres cartes pour chaque section -->
                        </div>
                    </section>
                `;
            }
        });
    </script>
</body>
</html>
