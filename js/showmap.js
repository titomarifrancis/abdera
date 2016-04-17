<script>
function showPosition(position)
{
	var latlon = position.coords.latitude + "," + position.coords.longitude;

	var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
	+latlon+"&zoom=14&size=400x300&sensor=false";

	document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
</script>