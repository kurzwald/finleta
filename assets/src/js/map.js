var map;

function initMap() {

    const image = "/wp-content/themes/finleta/assets/build/img/map-point.svg";

    map = new google.maps.Map(document.getElementById('map'), {


        center: {lat: 54.6884109, lng: 25.2743051},

        zoom: 14,

        mapTypeControl: false,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            position: google.maps.ControlPosition.TOP_CENTER,
        },
        zoomControl: false,
        zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_CENTER,
        },
        scaleControl: true,
        streetViewControl: false,
        streetViewControlOptions: {
            position: google.maps.ControlPosition.LEFT_TOP,
        },
        fullscreenControl: false,

        styles: [
            {
                "featureType": "all",
                "stylers": [
                    {
                        "saturation": 0
                    },
                    {
                        "hue": "#e7ecf0"
                    }
                ]
            },
            {
                "featureType": "road",
                "stylers": [
                    {
                        "saturation": -70
                    }
                ]
            },
            {
                "featureType": "transit",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "saturation": -60
                    }
                ]
            }
        ]
    });

    var marker = new google.maps.Marker({
        position: {lat: 54.6884109, lng: 25.2743051},
        map: map,
        title: 'map',
        icon: image
    });
}