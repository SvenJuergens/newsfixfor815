<?php

namespace SvenJuergens\Newsfixfor815\Hooks;

use TYPO3\CMS\Extbase\Persistence\Generic\Query;

class FindDemanded {

    public function find(array &$params, &$ref)
    {
        /** @var Query $query */
        $query = $params['query'];
        $query->getQuerySettings()->setLanguageOverlayMode(false);
    }
}