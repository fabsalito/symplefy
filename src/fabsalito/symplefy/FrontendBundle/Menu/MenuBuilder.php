<?php

namespace fabsalito\symplefy\FrontendBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Mopa\Bundle\BootstrapBundle\Navbar\AbstractNavbarMenuBuilder;

class MenuBuilder extends AbstractNavbarMenuBuilder
{
    //protected $factory;

    /**
     * @param FactoryInterface $factory
     */
    //public function __construct(FactoryInterface $factory)
    //{
    //    $this->factory = $factory;
    //}

    public function createMainMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav pull-right');

        // home
        //$menu->addChild('Home', array('route' => 'symplefy_frontend_homepage'));

        // languages menu
        $dropdown = $this->createDropdownMenuItem($menu, "Language", true, array('icon', 'icon-flag'), array('caret' => true));
        $dropdown->addChild('Spanish', array('uri' => '#'));
        $dropdown->addChild('English', array('uri' => '#'));

        // symplefy menu
        //$dropdown = $this->createDropdownMenuItem($menu, "symplefy", true, array('caret' => true));
        //$dropdown->addChild('Option 1', array('uri' => '#'));
        //$dropdown->addChild('Option 2', array('uri' => '#'));
        //$dropdown->addChild('Option 3', array('uri' => '#'));
        //$dropdown->addChild('Option 4', array('uri' => '#'));

        return $menu;
    }

}