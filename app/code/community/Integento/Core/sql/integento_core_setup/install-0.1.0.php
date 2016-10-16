<?php
/**
 * This file is part of Integento_Core for Magento.
 *
 * @license MIT
 * @author Darklg <darklg.blog@gmail.com> <@Darklg>
 * @category Integento
 * @package Integento_Core
 * @copyright Copyright (c) 2016 Integento (http://github.com/InteGento)
 */

try {

    /* @var $conn Varien_Db_Adapter_Interface */
    /* @var $installer Mage_Core_Model_Resource_Setup */
    $installer = $this;
    $installer->startSetup();

    $changeData = new Mage_Core_Model_Config();

    /* Default package name */
    $changeData->saveConfig('design/package/name', "integento", 'default', 0);

    /* Locale conf */
    $changeData->saveConfig('general/country/default', "FR", 'default', 0);
    $changeData->saveConfig('general/locale/firstday', 1, 'default', 0);
    $changeData->saveConfig('general/locale/weekend', '0,6', 'default', 0);



    $installer->endSetup();

} catch (Exception $e) {
    // Silence is golden
    //throw $e;
}
