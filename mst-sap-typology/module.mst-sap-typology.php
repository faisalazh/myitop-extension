<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'MST-SAP-Typology/1.0.0',
	array(
		'label' => 'MST SAP Typology',
		'category' => 'business',
		'dependencies' => array(
			'itop-config-mgmt/2.3.0'
		),
		'mandatory' => false,
		'visible' => true,
		'datamodel' => array(
			'model.mst-sap-typology.php'
		),
		'webservice' => array(
		),
		'data.struct' => array(
		),
		'data.sample' => array(
		),
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
