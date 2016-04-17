create table facilityType (
	id serial primary key,
	typeDescription varchar(32) not null
);

create table region (
	id serial primary key,
	regName varchar(24) not null
);

create table facilityOwnership (
	id serial primary key,
	ownershipDesc varchar(24) not null
);

create table facilityDept (
	id serial primary key,
	deptDesc varchar(64) not null
);

create table deptServices (
	id serial primary key,
	deptId integer references facilityDept(id) on delete restrict,
	svcDesc varchar(64) not null
);

create table deptEquipments (
	id serial primary key,
	deptId integer references facilityDept(id) on delete restrict,
	eqpDesc varchar(64) not null
);

create table facilityList (
	id serial primary key,
	facilityTypeId integer references facilityType(id) on delete restrict,
	facilityName varchar(32) not null,
	address varchar(64) not null,
	regionId integer references region(id) on delete restrict,
	zipcode varchar(8) default null,
	contactNumbers varchar(64) default null,
	facilityOwnershipId integer references facilityOwnership(id) on delete restrict,
	isFacilityActive boolean default true,
	geoLatitude numeric default null,
	geoLongitude numeric default null,
	deptList integer array
);

create table facilityServices (
	id serial primary key,
	facilityId integer references facilityList(id) on delete restrict,
	facilitySvcList integer array
);

create table facilityEquipments (
	id serial primary key,
	facilityId integer references facilityList(id) on delete restrict,
	facilityEquipmentList integer array
);

