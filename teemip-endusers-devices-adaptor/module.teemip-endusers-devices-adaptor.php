<?php
/**
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__,
	'teemip-endusers-devices-adaptor/3.0.1',
	array(
		// Identification
		//
		'label' => 'TeemIp adaptor for iTop End-user Devices Management',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-endusers-devices/2.7.0',
			'teemip-ip-mgmt/3.0.1',
			'teemip-config-mgmt-adaptor/3.0.1',
		),
		'mandatory' => false,
		'visible' => true, // To prevent auto-install but shall not be listed in the install wizard
 		'auto_select' => 'SetupInfo::ModuleIsSelected("itop-endusers-devices") && SetupInfo::ModuleIsSelected("teemip-ip-mgmt") && SetupInfo::ModuleIsSelected("teemip-config-mgmt-adaptor")',

		// Components
		//
		'datamodel' => array(
		),
		'data.struct' => array(
		),
		'data.sample' => array(
		),
		
		// Documentation
		//
		'doc.manual_setup' => '',
		'doc.more_information' => '',

		// Default settings
		//
		'settings' => array(
		),
	)
);
