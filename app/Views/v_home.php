<div id="map" style="height: 400px;"></div>

<script>
    var map = L.map('map').setView([-6.892947689823893, 109.38121553749525], 12);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var iconkantor = L.icon({
    iconUrl: '<?= base_url('icon/icons8-location-64.png') ?>',

    iconSize:     [60, 60],
});

    <?php
    foreach ($kantor as $key => $value) { ?>
        L.marker([<?= $value['lat'] ?>, <?= $value['long'] ?>],{icon:iconkantor}).addTo(map).bindPopup("<b><?= $value['nama_kantor'] ?></b><br />" + "<img src='<?= base_url('foto/'.$value['foto']) ?>' width='200px' height='200px'> <br/>" + "No Telp: <?= $value['no_telpon'] ?>");
    <?php } ?>

</script>