<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<section class="fullscreen_container">
    <div class="fullscreen_welcome">
        <h2>Student𝅘𝅥𝅮Fest</h2>
        <p>Votre festival étudiant.</p>
    </div>
</section>

<section class="video_presentation">
    <h3>Vidéo de présentation</h3>
    <div class="video_presentation_elements">
        <video controls>
            <source src="assets/videos/presentation.mp4" type="video/mp4">
            La vidéo n'arrive pas à charger
        </video>
        <p>Viens vibrer au rythme de la musique au cœur du Morbihan ! Pensé par et pour les étudiants, ce festival réunit des artistes émergents et des talents locaux dans une ambiance festive, conviviale et accessible à tous. Concerts live, découvertes musicales et moments de partage t’attendent pour célébrer la musique, la jeunesse et l’énergie étudiante dans un cadre breton unique.</p>
    </div>
</section>

<section class="localisation">
    <div id="map"></div>
    <a class="voirplus" href="localisation">Voir Plus</a>

    <!-- JS Leaflet -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        // Coordonnées demandées
        const lat = 47.59167670382576;
        const lng = -2.1544686654790404;

        // Initialisation de la carte centrée sur le point
        const map = L.map('map').setView([lat, lng], 11);

        // Tuiles OpenStreetMap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        // Marqueur sur les coordonnées
        L.marker([lat, lng])
            .addTo(map)
            .bindPopup('Mon point');
    </script>
</section>

<section class="notre-equipe">
    <h3>Organisateurs</h3>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Marc LAPIERRE</div>
            <p>DIRECTION</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Jean LAURENT</div>
            <p>DIRECTION</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Jade LAHAYE</div>
            <p>COMMUNICATION</p>
        </div>
    </div>
</section>
<section class="notre-equipe">

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Bruno VIRE</div>
            <p>CHEF</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Maria LARUE</div>
            <p>CHEF</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Aude LARUE</div>
            <p>VENDEUR</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Adrien NOUVEAU</div>
            <p>VENDEUR</p>
        </div>
    </div>

    <h3>Cuisiniers</h3>
</section>
<section class="notre-equipe">
    <h3>Equipe Technique</h3>
    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Flora MAYER</div>
            <p>INGENIEUR SON</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Michel COTEAUX</div>
            <p>REGISSEUR LUMIERE</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Christian Traie</div>
            <p>BACKLINER</p>
        </div>
    </div>

</section>
<section class="notre-equipe">


    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Sacha MAYER</div>
            <p>CHEF SECURITE</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Michel LAVANT</div>
            <p>AGENT SECURITE</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Camille DANIEL</div>
            <p>AGENT SECURITE</p>
        </div>
    </div>
    <h3>Agents de Sécurité</h3>
</section>
<section class="notre-equipe">

    <h3>Developpeurs</h3>
    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Hugo BARDIN</div>
            <p>DEV</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Octave ROUFFAUD</div>
            <p>DEV</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Kenan GUERIN</div>
            <p>DEV FRAISE</p>
        </div>
    </div>

    <div class="membre">
        <img class="membre-image" src="assets/images/default-membre.png">
        <div class="membre-text">
            <div class="membre-name">Théo LANNIER</div>
            <p>DEV</p>
        </div>
    </div>



    <div>
    <h3>Nos Valeurs</h3>
        <table-val>
        <tr>
            <td class="val">
                <h4>Tous Ensemble</h4>
                <p>Créer un environnement où chaque étudiant, quelles que soient son origine, sa filière ou ses capacités, se sent bienvenu et peut participer pleinement à l'événement.</p>
                <img src="assets/images/valeurs/valeur1.jpg" alt="image valeur1">
            </td>
            <td class="val">
                <h4>Montre tes Talents</h4>
                <p>Offrir une plateforme pour que tu puisse exprimer leurs talents artistiques, leurs idées innovantes et leurs passions, encourageant l'originalité et la diversité des formes d'art.</p>
                <img src="assets/images/valeurs/valeur2.png" alt="image valeur2">
            </td>
        </tr>
        <tr>
            <td class="val">
                <h4>Planète Friendly</h4>
                <p>S'engager à minimiser l'impact environnemental du festival (gestion des déchets, des fournisseurs), faisant de la durabilité une priorité.</p>
                <img src="assets/images/valeurs/valeur3.png" alt="image valeur3">
            </td>
            <td class="val">
                <h4>Qualité de Vie</h4>
                <p>Tout est facile et accessible. Les bénévoles sont là pour faciliter ton expérience dans le festival. Confort et simplicité garantis partout, pour tous.</p>
                <img src="assets/images/valeurs/valeur4.png" alt="image valeur4">
            </td>
        </tr>
    </table-val>
        <a href="?page=valeurs">Voir plus</a>
    </div>

</section>