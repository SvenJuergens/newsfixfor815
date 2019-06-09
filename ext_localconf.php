<?php
defined('TYPO3_MODE') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['Domain/Repository/AbstractDemandedRepository.php']['findDemanded'][] =
    \SvenJuergens\Newsfixfor815\Hooks\FindDemanded::class . '->find';

