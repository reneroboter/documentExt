<?php
return array(
    'ctrl'      => array(
        'title'                  => 'LLL:EXT:documentext/Resources/Private/Language/locallang_db.xlf:tx_documentext_domain_model_content',
        'label'                  => 'description',
        'tstamp'                 => 'tstamp',
        'crdate'                 => 'crdate',
        'cruser_id'              => 'cruser_id',
        'dividers2tabs'          => true,
        'versioningWS'           => 2,
        'versioning_followPages' => true,

        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete'                   => 'deleted',
        'enablecolumns'            => array(
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
        ),
        'searchFields'             => 'description,category,workday_at,created_at,updated_at,',
        'iconfile'                 => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('documentext') . 'Resources/Public/Icons/tx_documentext_domain_model_content.gif'
    ),
    'interface' => array(
        '' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, description, category, workday_at, created_at, updated_at',
    ),
    'types'     => array(
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, description, category, workday_at, created_at, updated_at, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
    ),
    'palettes'  => array(
        '1' => array('showitem' => ''),
    ),
    'columns'   => array(

        'sys_language_uid' => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config'  => array(
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items'               => array(
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
                ),
            ),
        ),
        'l10n_parent'      => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config'      => array(
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'items'               => array(
                    array('', 0),
                ),
                'foreign_table'       => 'tx_documentext_domain_model_content',
                'foreign_table_where' => 'AND tx_documentext_domain_model_content.pid=###CURRENT_PID### AND tx_documentext_domain_model_content.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource'  => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),

        't3ver_label' => array(
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max'  => 255,
            )
        ),

        'hidden'    => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config'  => array(
                'type' => 'check',
            ),
        ),
        'starttime' => array(
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config'    => array(
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime'   => array(
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config'    => array(
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),

        'description' => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:documentext/Resources/Private/Language/locallang_db.xlf:tx_documentext_domain_model_content.description',
            'config'  => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            )
        ),
        'category'    => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:documentext/Resources/Private/Language/locallang_db.xlf:tx_documentext_domain_model_content.category',
            'config'  => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            )
        ),
        'workday_at'  => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:documentext/Resources/Private/Language/locallang_db.xlf:tx_documentext_domain_model_content.workday_at',
            'config'  => array(
                'type'     => 'input',
                'size'     => 10,
                'eval'     => 'datetime',
                'checkbox' => 1,
                'default'  => time()
            ),
        ),
        'created_at'  => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:documentext/Resources/Private/Language/locallang_db.xlf:tx_documentext_domain_model_content.created_at',
            'config'  => array(
                'type'     => 'input',
                'size'     => 10,
                'eval'     => 'datetime',
                'checkbox' => 1,
                'default'  => time()
            ),
        ),
        'updated_at'  => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:documentext/Resources/Private/Language/locallang_db.xlf:tx_documentext_domain_model_content.updated_at',
            'config'  => array(
                'type'     => 'input',
                'size'     => 10,
                'eval'     => 'datetime',
                'checkbox' => 1,
                'default'  => time()
            ),
        ),

    ),
);