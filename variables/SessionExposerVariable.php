<?php
/**
 * Session Exposer plugin for Craft CMS
 *
 * Session Exposer Variable
 *
 * @author    Mutual
 * @copyright Copyright (c) 2017 Mutual
 * @link      https://madebymutual.com
 * @package   SessionExposer
 * @since     1.0.0
 */

namespace Craft;

class SessionExposerVariable
{
    /**
     */
    public function sessionId()
    {
        return craft()->httpSession->sessionId;
    }
}