<?php

namespace MxcCategorySidebar;

use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use Shopware\Components\Plugin\Context\ActivateContext;
use Shopware\Components\Plugin\Context\DeactivateContext;

class MxcCategorySidebar extends Plugin
{
    public function install(InstallContext $context){
        $context->scheduleClearCache($context::CACHE_LIST_FRONTEND);
        return true;
    }

    public function uninstall(UninstallContext $context){
        $context->scheduleClearCache($context::CACHE_LIST_FRONTEND);
        return true;
    }

    public function activate(ActivateContext $context){
        $context->scheduleClearCache($context::CACHE_LIST_FRONTEND);
        return true;
    }

    public function deactivate(DeactivateContext $context){
        $context->scheduleClearCache($context::CACHE_LIST_FRONTEND);
        return true;
    }
}