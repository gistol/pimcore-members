<?php

namespace MembersBundle;

use MembersBundle\Tool\Install;
use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class MembersBundle extends AbstractPimcoreBundle
{
    const BUNDLE_VERSION = '2.1.0';

    /**
     * {@inheritdoc}
     */
    public function getInstaller()
    {
        return $this->container->get(Install::class);
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        return self::BUNDLE_VERSION;
    }

    /**
     * @return string[]
     */
    public function getJsPaths()
    {
        return [
            '/bundles/members/js/backend/startup.js',
            '/bundles/members/js/backend/document/restriction.js',

            '/bundles/members/js/pimcore/js/coreExtension/data/dataMultiselect.js',
            '/bundles/members/js/pimcore/js/coreExtension/data/membersGroupMultiselect.js',

            '/bundles/members/js/pimcore/js/coreExtension/tags/multiselect.js',
            '/bundles/members/js/pimcore/js/coreExtension/tags/membersGroupMultiselect.js'
        ];
    }

    public function getCssPaths()
    {
        return [
            '/bundles/members/css/admin.css'
        ];
    }

}
