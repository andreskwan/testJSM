<?php
/**
 * @category	Helper
 * @package		JomSocial
 * @copyright (C) 2008 by Slashes & Dots Sdn Bhd - All rights reserved!
 * @license		GNU/GPL, see LICENSE.php
 */
defined('_JEXEC') or die('Restricted access');

require_once( JPATH_ROOT.'/components/com_community/helpers/validate.php' );

class CEmails{
        /**
        * Deprecated since 1.8
        */
        function isValidInetAddress($data, $strict = false) 
        {
                return CValidateHelper::email( $data, $strict );
        }

}
