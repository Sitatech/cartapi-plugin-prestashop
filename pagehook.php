<?php
/*
* 
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0).
* It is available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to info@appixia.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to newer
* versions in the future. If you wish to customize the module for your
* needs please look at the /overrides module directory or refer to
* http://kb.appixia.com for more information.
*
*/

include(dirname(__FILE__).'/../../config/config.inc.php');
require_once(dirname(__FILE__).'/../../init.php');

require_once(dirname(__FILE__).'/Helpers.php');

$url = CartAPI_Handlers_Helpers::getShopDomain() . $_REQUEST['q'];

?>

<html>
<body>

<iframe src="bridge://SendMessageToParent/Url?<?php echo urlencode($url); ?>" width="0" height="0" frameborder="0"></iframe>

<p>The Appixia Prestashop module has intercepted the display of this page.</p>
<p>You are seeing this because you have the "appixia" cookie (did you use the debugger?) or you're using an appixia mobile app.</p>
<p><a href="pagehookclear.php?url=<?php echo urlencode($url); ?>">Return to original website (clear cookie)</a></p>
<br>
<p>If you're trying to show a page from your store website in your mobile app <a href="http://kb.appixia.com/cart:plugin-overrides-prestashop:cms-page">read this</a>.</p>
<br><br>
<p>Original requested url:<br><?php echo $url ?></p>

</body>
</html>