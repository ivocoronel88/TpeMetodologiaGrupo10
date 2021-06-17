document.addEventListener('DOMContentLoaded', () =>{


    const map = L.map('map').setView([-37.32181760562174, -59.082416525214946], 13);

    var KMTOTAL = 0;

    createMapa();
    getUbication();

    function createMapa() {
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: "pk.eyJ1IjoiamVyZW1pYXNjYWJhbGxlcm8iLCJhIjoiY2s4OTlwbnFxMDFibTNrczR5dzBiNWVvNSJ9.P_D8pKxAzJbL5a5vtMsYeg"
        }).addTo(map);


        let centerUbication = L.marker([-37.32181760562174, -59.082416525214946]).addTo(map);
        centerUbication.bindPopup("Centro de Acopio").openPopup();
        L.popup();
    }
    function getUbication() {
        let options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };
        navigator.geolocation.getCurrentPosition(success, error, options);
    }
    function error(err) {
        console.warn('ERROR(' + err.code + '): ' + err.message);
    };
    function success(pos) {
        let crd = pos.coords;
        let point = L.marker([crd.latitude, crd.longitude]).addTo(map);
        KMTOTAL = calculateKm(point);
    };
    function calculateKm(from){
        let coords = from.getLatLng();
        console.log(coords);
        let to = [-37.32181760562174, -59.082416525214946]; // centro de acopio.
        let distance = (coords.distanceTo(to).toFixed(0)/1000);
        if(distance < 1){
          distance = distance*1000;
        }
        return distance;
      }

    //formulario

    let btnForm = document.querySelector("#btn_enviar_submit").addEventListener('click', function(e) {
       let form = document.querySelector('#form');
        e.preventDefault();
    
        if(KMTOTAL> 6){
            let cuerpo = document.querySelector('.formsoli');
            let temp = cuerpo.innerHTML;
            cuerpo.innerHTML = "<p class='txterror'>los cartoneros no pueden retirar materiales a mas de 6km del centro de acopio. Puede ver si hay ciudadanos dispuestos a llevar sus materiales o postularse para llevar lo de otros en su misma condicion en la seccion de Cartelera Virtual</p>";
            
            
            setTimeout(() => {
               location.reload();
            }, 10000);   
        }else{
            form.submit();
        }

    })

});