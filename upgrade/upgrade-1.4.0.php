<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @param Psgdpr $module
 *
 * @return bool
 */
function upgrade_module_1_4_0($module)
{
    $sql = ' ALTER TABLE `' . _DB_PREFIX_ . 'psgdpr_log` 
        ADD INDEX `idx_id_customer` ( `id_customer`, `id_guest`, `client_name`, `id_module`, `date_add`, `date_upd`); ';

    if (Db::getInstance()->execute($sql) == false) {
        return false;
    }

    return true;
}
