<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ReneRoboter.' . $_EXTKEY,
	'Documentext',
	array(
		'Content' => 'list,addForm,add,updateForm,update,deleteConfirm,delete,show,print' ,
		
	),
	// non-cacheable actions
	array(
		'Content' => 'list,addForm,add,updateForm,update,deleteConfirm,delete,show,print',
		
	)
);
