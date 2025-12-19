<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<section class="localisationbigsection">
    <a class="retour" href="home">Retour</a>

    <div class="localisation">
        <div id="map"></div>
        <p>Chem. de Trevingat, 56350 Rieux</p>

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
    </div>
</section>

<p class = "direction">
Depuis Vannes<br>
En venant de Vannes, prenez la direction de Redon en suivant la voie rapide, puis continuez vers Rieux en restant sur les axes principaux. À l’approche de la commune, suivez les panneaux indiquant la zone du festival, située vers Chem. de Trevingat, où un fléchage dédié vous guidera jusqu’aux parkings.​
    <br>
Depuis Nantes<br>
Depuis Nantes, rejoignez la route en direction de Redon, puis poursuivez en suivant les indications pour Rieux. Une fois aux abords du bourg, des panneaux temporaires « Festival » vous orienteront vers Chem. de Trevingat ; il suffit de suivre le fléchage pour accéder à l’entrée principale et aux zones de stationnement.​
    <br>
Depuis Rennes<br>
En venant de Rennes, prenez la direction de Redon, puis continuez vers Rieux en suivant les routes principales. À l’entrée de la commune, cherchez les panneaux du festival qui vous mèneront jusqu’à Chem. de Trevingat, où l’accueil, la billetterie et les parkings sont clairement indiqués.
</p>
