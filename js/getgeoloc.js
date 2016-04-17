<script>
if(geo_position_js.init()){
	geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
}
else{
	alert("Functionality not available");
}

function success_callback(p)
{
	alert('lat='+p.coords.latitude.toFixed(5)+';lon='+p.coords.longitude.toFixed(5));
	latitude= +p.coords.latitude.toFixed(5);
	longitude= +p.coords.longitude.toFixed(5);
}

function error_callback(p)
{
	alert('error='+p.message);
}		
</script>