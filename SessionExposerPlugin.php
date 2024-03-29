<?php
/**
 * Session Exposer plugin for Craft CMS
 *
 * Exposes the  Craft Session ID
 *
 * @author    Mutual
 * @copyright Copyright (c) 2017 Mutual
 * @link      https://madebymutual.com
 * @package   SessionExposer
 * @since     1.0.0
 */

namespace Craft;

class SessionExposerPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Session Exposer');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Exposes the  Craft Session ID');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/madebymutuak/sessionexposer/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/madebymutual/sessionexposer/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.2';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.2';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Mutual';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://madebymutual.com';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}
