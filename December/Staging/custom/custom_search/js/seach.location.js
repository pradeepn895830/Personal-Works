(function($){
$(document).ready(function(){
	if(navigator.geolocation){
	    navigator.geolocation.getCurrentPosition(function(position) { 
            var location = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			new google.maps.Geocoder().geocode({'latLng': location }, function(response, status) {
				  var ip_geoloc_address = new Object;
				  ip_geoloc_address['latitude']  = position.coords.latitude;
				  ip_geoloc_address['longitude'] = position.coords.longitude;
				  ip_geoloc_address['accuracy']  = position.coords.accuracy;

				  if (status == google.maps.GeocoderStatus.OK) {
					var google_address = response[0];
					ip_geoloc_address['formatted_address'] = google_address.formatted_address;
					for (var i = 0; i < google_address.address_components.length; i++) {
					  var component = google_address.address_components[i];
					  if (component.long_name != null) {
						var type = component.types[0];
						ip_geoloc_address[type] = component.long_name;
						if (type == 'country' && component.short_name != null) {
						  ip_geoloc_address['country_code'] = component.short_name;
						}
					  }
					}
				  }
				  else {
					ip_geoloc_address['error'] = Drupal.t('getLocation(): Google address lookup failed with status code !code.', { '!code': status });
					refresh_page = false;
				  }
				  //Insert Value in form
                  var state = $('form#custom-search-form').find('select').val();
                  if(!state && ip_geoloc_address.administrative_area_level_1){	
				     $("[id^=edit-key] option[value=" + ip_geoloc_address.administrative_area_level_1 +"]").attr("selected","selected");
                  }				  
				  //console.log(ip_geoloc_address.administrative_area_level_1);
			});   
		},function() {
			//window.location.reload();
		});
	}
});
   
})(jQuery);