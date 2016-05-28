<?php
/**
 * Created by PhpStorm.
 * User: oneal
 * Date: 28/05/16
 * Time: 12:54
 */
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use \Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class MenuBuilder implements  ContainerAwareInterface {

    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttributes(array('class'=>'nav navbar-nav'));

        $menu->addChild("home", array(
            'route' => 'homepage',
            'rootClass'=>'nav navbar-nav'
        ));

        $em = $this->container->get('doctrine')->getManager();
        $categories = $em->getRepository("AppBundle:Category")->findAll();

        foreach($categories as $category){
            $menu->addChild($category->getName(), array(
                'route' => 'entriesCategory',
                'routeParameters' => array(
                    'id' => $category->getId(),
                    'category' => $category->getName()
                )
            ));
        }

        return $menu;
    }
}