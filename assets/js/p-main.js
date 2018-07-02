var autocomplete,autocomplete2,d_lat,d_long,l_lat,l_long;

$(document).ready(function(){
    $(this).closest('.job-desc').slideUp(500);
    $('.job-button').click(function(){
        var id = $(this).parent().parent().find('.id').val();
       $.ajax({
        url: '../include/driverController.php',
        type: 'get',
        data: 'job='+id,
        success: function(data){
            if(data == 1){
                $(this).closest('.job-desc').slideUp(500);
            }else{
                
            }
        }
       });
    });
    // GET JOBS EVERY 2 SECONDS



    // TAKE A JOB 
    // $('.job-button').on('click',function() {
    //     $(this).closest('.job-desc').slideUp(500);
    // });
      //  setInterval(show_jobs(),2000);
});

function getstatus(){
        var id = $('#id').val();
        $.ajax({
            url: '../include/controller2.php',
            dataType: 'json',
            type: 'post',
            data: {'id': id,'status': 'status'},
            beforeSend: function(){
                $('#begin-btn').html('Loading...');
            },
            success: function(data){
                if(data == 0){
                    $('#begin-btn').html('<a href="#" class="btn btn-x btn-default" id="begin-btn">Begin pickup</a>');
                }else if(data == 1){
                    $('#begin-btn').html('<a href="#" class="btn btn-x btn-default" id="begin-btn">Take a break</a>').addClass('break');
                }else{
                    $('#begin-btn').html('<a href="#" class="btn btn-x btn-default" id="begin-btn">Resume Job</a>').addClass('break');
                }
            },
            error: function() {
                $('#begin-btn').html('Error Occurred');
            }
        });
    }

function initMap() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              }
            var chicago = {lat: 41.85, lng: -87.65};
            var indianapolis = {lat: 39.79, lng: -86.14};

            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 6.8645, lng: 7.4083},
              scrollwheel: false,
              zoom: 13
            });

            // var directionsDisplay = new google.maps.Map({
            //   map: map
            // });

            // // Set destination, origin and travel mode.
            // var request = {
            //   destination: indianapolis,
            //   origin: geolocation,
            //   travelMode: 'DRIVING'
            // };

        //     // Pass the directions request to the directions service.
        //     var directionsService = new google.maps.DirectionsService();
        //     directionsService.route(request, function(response, status) {
        //       if (status == 'OK') {
        //         // Display the route on the map.
        //         directionsDisplay.setDirections(response);
        //       }
        // });
            });

            
        }

      }



function show_jobs() {
    $.ajax({
        url: '../include/driverController.php',
        data: 'jobs',
        dataType: 'html',
        error: function() {
            // Error State
        },
        success: function(data){
            $('.job-desc').append(data);
        }
    });
}

function dynamicSearch() {
    var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(6.8645, 7.4083));
    var input = document.getElementById('location');
    var options = 
    {
      types: ['establishment'],
      bounds: defaultBounds
    }
    autocomplete = new google.maps.places.Autocomplete(input,options);
    autocomplete.addListener('place_changed', getLatLng);

    var input2 = document.getElementById('destination');
    var options2 = 
    {
      types: ['establishment'],
      bounds: defaultBounds
    }
    autocomplete2 = new google.maps.places.Autocomplete(input2,options2);
}

function getLatLng() {
    var place = autocomplete.getPlace();
    l_long = place.geometry.viewport.b.b;
    l_lat = place.geometry.viewport.f.f;

    if(l_lat !== null && l_long !== null) {
        $('.lat').html('<input type="hidden" value='+l_lat+" "+'name="l_lat">');
        $('.long').html('<input type="hidden" value='+l_long+" "+'name="l_long">');
    }

    // var destination = autocomplete2.getPlace();
    // d_long = destination.geometry.viewport.b.b;
    // d_lat = destination.geometry.viewport.f.f;

}

function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}

functiom checktrip(){
    $.ajax({
        url: '../ride/process.php',
        data: 'data',
        type: 'get',
        error: function()  {
            $('.status').html('An Error Occurred');
        },
        success: function(data) {
            if(data == 0){
                $('.status').html('Please wait a moment for a driver');
            }else{
                $('.status').html('');
            }
        }
    });
}