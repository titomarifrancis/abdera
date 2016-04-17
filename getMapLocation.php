<?php
if(isset($_REQUEST['serviceid']))
{
	$idInt= $_REQUEST['serviceid'];
	//query using serviceid
	$query= "select facilitylist.id, facilitylist.facilityname, facilitylist.geolatitude, facilitylist.geolongitude from facilitylist, facilityservices where facilitylist.id=facilityservices.facilityid and facilityservices.facilitysvclist @> '{".$idInt."}'::int[]";
}

if(isset($_REQUEST['equipmentid']))
{
	$idInt= $_REQUEST['equipmentid'];
	//query using equipmentid
	$query= "select facilitylist.id, facilitylist.facilityname, facilitylist.geolatitude, facilitylist.geolongitude from facilitylist, facilityequipments where facilitylist.id=facilityequipments.facilityid and facilityequipments.facilityequipmentlist @> '{".$idInt."}'::int[]";
}

require_once('dbconn.php');

$stmt= $dbh->query($query);
$result= $stmt->fetchAll();

$facilityId= $result[0][0];
$facilityName= $result[0][1];
$geoLatitude= $result[0][2];
$geoLongitude= $result[0][3];

require_once('template/header.php');
?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=true"> </script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(<?php echo $geoLatitude;?>,<?php echo $geoLongitude;?>),
    zoom:16,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
  
  var marker = new google.maps.Marker({
            position: coords,
            map: map,
            title: "<?php echo $facilityName;?>"
            });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
			<br/>
			<a href="/">Go back to Home</a>
			<div id="googleMap" style="width:500px;height:380px;"></div>
<?php
require_once('template/footer.php');