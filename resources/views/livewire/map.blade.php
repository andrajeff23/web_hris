<div class="grid grid-cols-1 dark:bg-gray-900 md:grid-cols-12 gap-4" wire:ignore>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <div class="md:col-span-12 bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
        <form wire:submit.prevent="filterAttendance">
            {{ $this->form }}
            
        </form>
    </div>
    <div class="md:col-span-12 bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
        
        <div id="map" class="w-full" style="height: 75vh;"></div> <!-- Dynamic height based on viewport -->
    </div>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    let map;
    function initializeMap() {
        if (map) {
            map.remove();
        }

        map = L.map('map').setView([-0.089275, 121.921327], 4.5);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

       const markers = @json($markers);
       console.log(markers);

        markers.forEach(marker => {
            const str = `Nama : ${marker.user.name}<br>Jam Masuk : ${marker.start_time}`;
            L.marker([marker.start_latitude, marker.start_longitude])
                .addTo(map)
                .bindPopup(str);
        });
    }

    document.addEventListener('livewire:load', function() {
        initializeMap();
    });

    document.addEventListener('livewire:initialized', function() {
        Livewire.on('markersUpdated', function() {
            initializeMap();
        });

    });
</script>
