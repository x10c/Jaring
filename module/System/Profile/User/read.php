<?php
/*
	Copyright 2014 - Mhd Sulhan
	Authors:
		- mhd.sulhan (m.shulhan@gmail.com)

	Only select user whose group is Administrator (1).
*/

$q	="
	select	". implode (",", Jaring::$_mod["db_table"]["read"]) ."
	from	". Jaring::$_mod["db_table"]["name"] ."
	,		_user_group		UG
	,		_group			G
	where	U.id			= UG._user_id
	and		UG._group_id	= G.id
	and		G.id			= 1
	";

Jaring::$_out["success"]	= true;
Jaring::$_out["data"]		= Jaring::db_execute ($q);