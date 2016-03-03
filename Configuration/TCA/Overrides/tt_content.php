<?php
// Einbindung Flexform für Plugin Bloglisting der Extension Simpleblog
// EXTKEY_PLUGINNAME
$pluginSignature = 'documentext_documentext';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:documentext/Configuration/FlexForms/ControllerActions.xml'
);