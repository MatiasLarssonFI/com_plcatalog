<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_plcatalog
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1><?= $this->title; ?></h1>
<?php

$this->products_renderer->render();
?>
<div class="plcatalog-bottom">
    <div class="plcatalog-bottom-product-wrapper">
        <?= $this->fixed_products_renderer->render() ?>
    </div>
</div>
