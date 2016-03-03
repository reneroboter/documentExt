<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin('ReneRoboter.' . $_EXTKEY, 'Documentext',
    'documentExt - Ausbildungsdokumentation');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'documentExt');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_documentext_domain_model_content',
    'EXT:documentext/Resources/Private/Language/locallang_csh_tx_documentext_domain_model_content.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_documentext_domain_model_content');

