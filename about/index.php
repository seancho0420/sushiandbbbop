<?php
$page_title = 'Sushi &amp; BBbop - About';

include '../common/page/header.inc.php';
?>

<div id="content-effect">
    <div id="contents">
        <div id="about">
            <ul>
                <li>
                    <img src="../images/about.jpg" alt="About">
                </li>
                <li>
                    <img src="../images/about2.jpg" alt="About2">
                </li>
            </ul>

            <div class="header">
                <div class="footer">
                    <div class="body">
                        <img src="../images/full_logo.gif" alt="Full Logo">

                        <p></p>  

                        <div id="map-canvas"></div>

                        <div id="address">
                            <h2>Find Us Here</h2>
                            <br>
                            384 Yonge Street Unit #57<br>
                            Toronto, ON, M5B 1S8<br>
                            (Food Court at AURA)
                            <br><br>
                            Phone: 647-557-3922<br>
                            Cell Phone: 647-710-0900
                        </div>

                        <br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function initialize() {
            var map_canvas = document.getElementById('map-canvas');
            var map_options = {
                center: new google.maps.LatLng(43.659156, -79.382141),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(map_canvas, map_options)

            var contentString = '<h2>Sushi&BBbop</h2>' +
                    '<p>Food court in AURA</p>'
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(43.659156, -79.382141),
                map: map,
                title: 'Sushi&BBbop'
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <?php
    include '../common/page/footer.inc.php';
    ?>