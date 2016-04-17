<?php
require_once('template/header.php');
?>
			<br/>
			<div class="panel panel-success">
                <div class="panel-heading">
					<h3 class="panel-title">Search for Medical Institution Using Needed Service or Equipment Name</h3>
                </div>
				<div class="panel-body">
					<form role="form" method="post" name="customerFinder" onSubmit="<?php echo $_SERVER['PHP_SELF'];?>">
						<div class="form-group">
							<label for="searchString">Needed Medical Service or Equipment</label>
							<input type="text" class="form-control" name="searchString" id="searchString" placeholder="Enter Needed Medical Service or Equipment">
						</div>
						<input type="submit" name="Search" id="Search" class="btn btn-info" onClick="document.pressed=this.value" value="Search">
					</form>
				</div>
<?php
require_once('dbconn.php');

if(isset($_REQUEST["searchString"]))
{
    $searchString= $_REQUEST["searchString"];
	
	//search services
	$query= "select deptservices.id, facilitydept.deptdesc, deptservices.svcdesc  from facilitydept, deptservices where deptservices.deptid=facilitydept.id and deptservices.svcdesc like '%".$searchString."%'";
    
	$stmt= $dbh->query($query);
	$result= $stmt->fetchAll();
    
?>
				<div class="list-group" role="navigation">
<?php
	
	if(sizeof($result) > 0)
	{
	
		foreach($result as $row)
		{
?>
					
					<a href="getMapLocation.php?serviceid=<?php echo "$row[0]"; ?>" class="list-group-item"><strong><?php echo "Services > $row[1] > $row[2]";?></strong></a>
<?php
		}
	
	}
	
	//search equipment
	$query2= "select deptequipments.id, facilitydept.deptdesc, deptequipments.eqpdesc  from facilitydept, deptequipments where deptequipments.deptid=facilitydept.id and deptequipments.eqpdesc like '%".$searchString."%'";
	
	$stmt2= $dbh->query($query2);
	$result2= $stmt2->fetchAll();
	
	if(sizeof($result2) > 0)
	{
		foreach($result2 as $row2)
		{
?>
					
					<a href="getMapLocation.php?equipmentid=<?php echo "$row2[0]"; ?>" class="list-group-item"><strong><?php echo "Equipments > $row2[1] > $row2[2]";?></strong></a>
<?php
		}		
	}
?>
				</div>
<?php
}
require_once('template/footer.php');