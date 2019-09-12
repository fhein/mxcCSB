<?php


namespace MxcCategorySidebar\Subscriber;


use Doctrine\Common\Collections\ArrayCollection;
use Enlight\Event\SubscriberInterface;
use Enlight_Event_EventArgs;
use Shopware_Controllers_Frontend_Index;
use Enlight_Controller_Request_RequestHttp;
use Enlight_Controller_Response_ResponseHttp;
use Enlight_View_Default;
use Enlight_Template_Manager;

class SidebarSubscriber implements SubscriberInterface
{
    private $pluginDirectory;
    private $templateManager;

    public function __construct($pluginDirectory, Enlight_Template_Manager $templateManager)
    {
        $this->pluginDirectory = $pluginDirectory;
        $this->templateManager = $templateManager;
    }

    public static function getSubscribedEvents()
    {
        return [
            'Theme_Compiler_Collect_Plugin_Javascript' => 'onCollectJavaScript',
            'Enlight_Controller_Action_PreDispatch' => 'onPreDispatch',
        ];
    }

    public function onPreDispatch(Enlight_Event_EventArgs $args)
    {
        $this->templateManager->addTemplateDir($this->pluginDirectory . '/Resources/views');
    }

    public function onCollectJavaScript(){
        $jsDir  = $this->pluginDirectory . '/Resources/views/frontend/_public/src/js/';

        return new ArrayCollection([
            $jsDir . 'mxc-csb-off-canvas-menu.js',
        ]);
    }

}