<?php
include_once "$_SERVER[DOCUMENT_ROOT]/ArtStore/pages/header.php";
?>


<main class="bg-dark">

    <section class="py-4 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light text-light">Contact Us</h1>
                <p class="lead  text-light">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <p>
                    <a href="../../pages/shop/" class="btn btn-warning my-2">Go to Shopping</a>
                    <a href="../../" class="btn btn-secondary my-2">Homepage</a>    
                </p>
            </div>
        </div>
    </section>

    <div id="mapid" style="width: 100%; height: 400px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.marker([-23.013104, -43.394365, 13]).addTo(mymap)
            .bindPopup("<b>ArtStore</b> Main Office<br />Location.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>e();
    </script>

    <div class="container py-1 bg-dark">
        <div class="row py-5">
            <form class="col-md-9 m-auto" role="form" method="POST" action="../../includes/contact-process.php">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname" class="text-white">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail" class="text-white">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject" class="text-white">Subject</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <label for="inputmessage" class="text-white">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-warning btn-lg px-3">Let’s Talk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</main>

<?php
include_once "$_SERVER[DOCUMENT_ROOT]/ArtStore/pages/footer.php";
?>