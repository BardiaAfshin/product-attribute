<?php
/**
 * Created by PhpStorm.
 * User: bardiaafshin
 * Date: 8/27/16
 * Time: 7:48 PM
 */

namespace BardiaModule\ProductAttribute\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\UninstallInterface;


class UninstallSchema implements UninstallInterface
{
    private $eavSetupFactory;

    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->removeAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'cart_message');
    }

}