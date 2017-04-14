/**
 * Created by Vivek on 7/13/2016.
 */


var gps = document.getElementById("gps");
var json; var xyz;
console.log("working");
getLocation();
function getLocation() {
    if (navigator.geolocation) {
        gps.value ="Geolocation";
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        location.value = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    console.log(position.coords.latitude);
    gps.value = "Latitude: " + position.coords.latitude + "Longitude: " + position.coords.longitude;

    $.ajax({url: "http://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude,
            success :function (data) {
                xyz=data;
                json =data;
                gps.value = json.results[0].formatted_address
                $("#selectcountry").val(json.results[0].address_components[8].short_name);
                console.log("country  code is " +json.results[0].address_components[8].short_name );
            }
    });

}
$.validate({
    form : '#registration',
    modules : 'security',
    onError : function($form) {
        alert('Validation of form '+$form.attr('id')+' failed!');
    },
    onSuccess : function($form) {
      //  alert('The form '+$form.attr('id')+' is valid!');
        return true; // Will stop the submission of the form
    },

    onElementValidate : function(valid, $el, $form, errorMess) {
        console.log('Input ' +$el.attr('name')+ ' is ' + ( valid ? 'VALID':'NOT VALID') );
    }
});

$('input')
    .on('beforeValidation', function(value, lang, config) {
        console.log('Input "'+this.name+'" is about to become validated');
        // Call $(this).attr('data-validation-skipped', 1); to prevent validation
    })
    .on('validation', function(evt, valid) {
        console.log('Input "'+this.name+'" is ' + (valid ? 'VALID' : 'NOT VALID'));
    });

