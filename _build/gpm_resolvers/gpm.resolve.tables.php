<?php
/**
 * Resolve creating db tables
 *
 * THIS RESOLVER IS AUTOMATICALLY GENERATED, NO CHANGES WILL APPLY
 *
 * @package socialstream
 * @subpackage build
 */

if ($object->xpdo) {
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modelPath = $modx->getOption('socialstream.core_path', null, $modx->getOption('core_path') . 'components/socialstream/') . 'model/';
            $modx->addPackage('socialstream', $modelPath, 'modx_');

            $manager = $modx->getManager();

            $manager->createObjectContainer('SocialStreamItem');

            break;
    }
}

return true;