<?php

require_once("library.php");
Core::init();

$config = array(
	"exportType"        => $_POST["gdExportType"],
	"countries"         => $_POST["gdCountryChoice"],
	"numRowsToGenerate" => $_POST["numRowsToGenerate"],
	"batchSize"         => $_POST["batchSize"],
	"currentBatchNum"   => $_POST["currentBatchNum"],
	"formData"          => $_POST["formdata"]
);

$data = new Generator($config);
