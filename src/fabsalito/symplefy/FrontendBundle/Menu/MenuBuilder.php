<?php

namespace fabsalito\symplefy\FrontendBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;
//use Mopa\Bundle\BootstrapBundle\Navbar\AbstractNavbarMenuBuilder;

//class MenuBuilder extends AbstractNavbarMenuBuilder
class MenuBuilder
{
    protected $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(Request $request)
    {
        // menu object
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav pull-right');


        // home button
        $menu->addChild('', array('route' => 'symplefy_frontend_homepage'))
            ->setLabel('<i class="icon-home icon-white"></i>')
            ->setExtra('safe_label', true)
        ;

        // divider vertical
        $menu->addChild('divider-vertical_'.rand())
            ->setLabel('')
            ->setAttribute('class', 'divider-vertical')
            ;

        // user menú
        $menu->addChild('User', array('uri' => '#'))
            ->setLinkattribute('class', 'dropdown-toggle')
            ->setLinkattribute('data-toggle', 'dropdown')
            ->setAttribute('class', 'dropdown')
            ->setChildrenAttribute('class', 'dropdown-menu')
            ->setLabel('User <span class="caret"></span>')
            ->setExtra('safe_label', true)
        ;

        $menu['User']->addChild('Profile', array('route' => 'fos_user_profile_show'));
        $menu['User']->addChild('Collaborators', array('route' => 'symplefy_frontend_user_collaborator'));
        // divisor horizontal
        $menu['User']->addChild('divider_'.rand())
            ->setLabel('')
            ->setAttribute('class', 'divider')
            ;
        $menu['User']->addChild('Login', array('route' => 'fos_user_security_login'));

        // languages menu
        $menu->addChild('Languages', array('uri' => '#'))
            ->setLinkattribute('class', 'dropdown-toggle')
            ->setLinkattribute('data-toggle', 'dropdown')
            ->setAttribute('class', 'dropdown')
            ->setChildrenAttribute('class', 'dropdown-menu')
            ->setLabel('Languages <span class="caret"></span>')
            ->setExtra('safe_label', true)
        ;

        $menu['Languages']->addChild('Spanish', array('uri' => '#'));
        $menu['Languages']->addChild('English', array('uri' => '#'));

        // symplefy menú
        $menu->addChild('symplefy', array('uri' => '#'))
            ->setLinkattribute('class', 'dropdown-toggle')
            ->setLinkattribute('data-toggle', 'dropdown')
            ->setAttribute('class', 'dropdown')
            ->setChildrenAttribute('class', 'dropdown-menu')
            ->setLabel('symplefy <span class="caret"></span>')
            ->setExtra('safe_label', true)
        ;

        $menu['symplefy']->addChild('Dashboard', array('route' => 'symplefy_frontend_homepage'));
        
        // divisor horizontal
        $menu['symplefy']->addChild('divider_'.rand())
            ->setLabel('')
            ->setAttribute('class', 'divider')
        ;
        
        $menu['symplefy']->addChild('Plans', array('route' => 'symplefy_frontend_plan_read'));
        $menu['symplefy']->addChild('Forecast', array('route' => 'symplefy_frontend_forecast_read'));
        $menu['symplefy']->addChild('Transactions', array('route' => 'symplefy_frontend_transaction_read'));
        
        // divisor horizontal
        $menu['symplefy']->addChild('divider_'.rand())
            ->setLabel('')
            ->setAttribute('class', 'divider')
            ;
        
        $menu['symplefy']->addChild('Reporting')
            ->setAttribute('class', 'nav-header')
        ;
        $menu['symplefy']->addChild('Actual vs Plan', array('route' => 'symplefy_frontend_reporting_actualvsplan'));
        
        // divisor horizontal
        $menu['symplefy']->addChild('divider_'.rand())
            ->setLabel('')
            ->setAttribute('class', 'divider')
        ;
        
        $menu['symplefy']->addChild('Settings')
            ->setAttribute('class', 'nav-header')
        ;
        $menu['symplefy']->addChild('Concepts', array('route' => 'symplefy_frontend_setting_concept'));
        $menu['symplefy']->addChild('Accounts', array('route' => 'symplefy_frontend_setting_account'));
        $menu['symplefy']->addChild('Credits Cards', array('route' => 'symplefy_frontend_setting_creditcard'));
        $menu['symplefy']->addChild('Shops', array('route' => 'symplefy_frontend_setting_shop'));
        
        return $menu;
    }

}