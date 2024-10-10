<style>
    #menu,#croix{
        position: fixed;
        top: 70px; /* Fixer la position en haut */
        left: 10px; /* Fixer la position à gauche */
        z-index:2000;
        border: none;
        background: none;
    }
    #menu:hover,#croix:hover{
        cursor: pointer;
    }

    .sidebar {
            width: 220px;
            background: #ecf0f1;
            padding: 20px;
            position: fixed;
            top: 60px;
            bottom: 30px;
            overflow-y: auto;
            z-index: 1000;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #2c3e50;
            font-weight: bold;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar ul li a:hover {
            background: #3498db;
            color: white;
        }

        .sidebar ul li a.aff-sous-menu::after {
            content: '▼';
            font-size: 0.8em;
            float: right;
        }

        .sidebar ul .sousMenu {
            display: none;
            padding-left: 15px;
            margin-top: 10px;
        }

        .sidebar ul .sousMenu li a {
            padding: 5px 10px;
        }

        .sidebar ul .sousMenu li a:hover {
            background: #3498db;
            color: white;
        }
</style>

<button onclick="menu()" id="menu" class="icon-link"><i class="fas fa-bars"></i></button>
<button onclick="menu()" id="croix" class="icon-link"><i class="fas fa-times"></i></i></button>

<nav class="sidebar" id="sidebar">
            <ul>
                <li>
                    <a href="javascript:void(0);" class="nav-link" data-target="dashboard">Tableau de bord</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="aff-sous-menu">Cours</a>
                    <ul class="sousMenu">
                        <li><a href="javascript:void(0);" class="nav-link" data-target="cours-ajouter.php">Ajouter un cours</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="cours-mettre-a-jour.php">Mettre à jour un cours</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="cours-supprimer.php">Supprimer un cours</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="cours-suivi.php">Suivi des programmes scolaires</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="cours-bulletins.php">Générer des bulletins de notes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="aff-sous-menu">Élèves</a>
                    <ul class="sousMenu">
                        <li>
                            <a href="javascript:void(0);" class="aff-sous-menu">Liste des élèves</a>
                            <ul>
                                <li><a href="javascript:void(0);" class="nav-link" data-target="liste_eleves.html">TS2</a></li>
                                <li><a href="javascript:void(0);" class="nav-link" data-target="#">TL2</a></li>
                                <li><a href="javascript:void(0);" class="nav-link" data-target="#">TL'</a></li>
                                <li><a href="javascript:void(0);" class="nav-link" data-target="#">1er S</a></li>
                                <li><a href="javascript:void(0);" class="nav-link" data-target="#">1er L</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="eleves-ajouter.php">Ajouter un élève</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="eleves-mettre-a-jour.php">Mettre à jour un élève</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="eleves-supprimer.php">Supprimer un élève</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="aff-sous-menu">Professeurs</a>
                    <ul class="sousMenu">
                        <li><a href="javascript:void(0);" class="nav-link" data-target="professeurs-ajouter.php">Ajouter un professeur</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="professeurs-mettre-a-jour.php">Mettre à jour un professeur</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="professeurs-supprimer.php">Supprimer un professeur</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="aff-sous-menu">Frais élèves</a>
                    <ul class="sousMenu">
                        <li><a href="javascript:void(0);" class="nav-link" data-target="frais-gestion.php">Gestion des frais</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="aff-sous-menu">Générations de factures</a>
                    <ul class="sousMenu">
                        <li><a href="javascript:void(0);" class="nav-link" data-target="factures-ajouter.php">Ajouter une facture</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="factures-mettre-a-jour.php">Mettre à jour une facture</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="factures-supprimer.php">Supprimer une facture</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="aff-sous-menu">Communication</a>
                    <ul class="sousMenu">
                        <li><a href="javascript:void(0);" class="nav-link" data-target="communication-messagerie.php">Messagerie</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="communication-annonces.php">Annonces</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="aff-sous-menu">Avis</a>
                    <ul class="sousMenu">
                        <li><a href="javascript:void(0);" class="nav-link" data-target="avis-ajouter.php">Ajouter un avis</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="avis-supprimer.php">Supprimer un avis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="aff-sous-menu">Pages</a>
                    <ul class="sousMenu">
                        <li><a href="javascript:void(0);" class="nav-link" data-target="pages-apropos.php">À propos de nous</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="pages-contact.php">Contactez-nous</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="aff-sous-menu">Rapports</a>
                    <ul class="sousMenu">
                        <li><a href="javascript:void(0);" class="nav-link" data-target="rapports-affichage.php">Affichage des rapports</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="aff-sous-menu">Recherche</a>
                    <ul class="sousMenu">
                        <li><a href="javascript:void(0);" class="nav-link" data-target="recherche-factures.php">Recherche de factures</a></li>
                        <li><a href="javascript:void(0);" class="nav-link" data-target="recherche-eleves.php">Recherche de détails élèves</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <script>
            side = document.getElementById('sidebar');
            side.style.display = 'none';
            croix = document.getElementById('croix');
            croix.style.display = 'none';
            var p=0;
            function menu() {
                if (p==0) {
                    side.style.display = 'block';
                    croix.style.display = 'block';
                    p=1;
                }
                else{
                    side.style.display = 'none';
                    croix.style.display = 'none';
                    p=0;
                }
            }

            function fermerMenu() {
                side.style.display = 'none';
                croix.style.display = 'none';
                p = 0;
            }

            document.querySelectorAll('.sidebar .nav-link').forEach(link => {
                link.addEventListener('click', fermerMenu);
            });
        </script>