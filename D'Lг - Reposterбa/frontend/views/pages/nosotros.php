<div class="about">
    <main>
        <h2>Nosotros</h2>
        <p>¡Bienvenidos a D'Lú! Somos un negocio gastronómico especializado en la preparación de postres, dulces y colaciones. Nuestra misión es brindar a nuestros clientes una experiencia única a través de productos de alta calidad preparados con cariño.</p>
        

        <h3>Encuéntranos en el mapa</h3>
        <h5>Dirección: Hijuela las Quemas #2 cruce Coique, Futrono, Regíon de los Ríos</h5>
        <div id="map" style="height: 400px;"></div>

        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([-40.116532734138005, -72.44163844820007], 15);

          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
            maxZoom: 18,
            }).addTo(map);

            var redIcon = L.icon({
                iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            var marker = L.marker([-40.116532734138005, -72.44163844820007]).addTo(map);

            marker.bindPopup("<b>Mi ubicación</b>").openPopup();
        });
    </script>
    </main>
</div>
