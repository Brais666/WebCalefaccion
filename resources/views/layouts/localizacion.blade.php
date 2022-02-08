<div id="out"></div>
<script type="text/javascript">
	if ("geolocation" in navigator) {
	  function geoFindMe() {
	  var output = document.getElementById("out");

	  if (!navigator.geolocation){
	    output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
	    return;
	  }

	  function success(position) {
	    var latitude  = position.coords.latitude;
	    var longitude = position.coords.longitude;

	    output.innerHTML = '<p>Latitud ' + latitude + '° <br>Longitud ' + longitude + '°</p>';
	  };

	  function error() {
	    output.innerHTML = "Unable to retrieve your location";
	  };

	  output.innerHTML = "<p>Locating…</p>";



	  navigator.geolocation.getCurrentPosition(success, error);
	}

	

	
} 
else
{
  alert('No');
}
</script>

	