<?php
defined('TYPO3') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['Domain/Repository/AbstractDemandedRepository.php']['findDemanded'][] =
    \SvenJuergens\Newsfixfor815\Hooks\FindDemanded::class . '->find';

