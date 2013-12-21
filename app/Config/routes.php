<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/Home', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/AboutUs', array('controller' => 'pages', 'action' => 'display', 'aboutus'));
	Router::connect('/Products', array('controller' => 'pages', 'action' => 'display', 'products'));
    Router::connect('/ContactUs', array('controller' => 'pages', 'action' => 'display', 'contactus'));
    Router::connect('/Product1', array('controller' => 'pages', 'action' => 'display', 'product1'));
    Router::connect('/Product2', array('controller' => 'pages', 'action' => 'display', 'product2'));
    Router::connect('/Product3', array('controller' => 'pages', 'action' => 'display', 'product3'));
    Router::connect('/Product4', array('controller' => 'pages', 'action' => 'display', 'product4'));
    Router::connect('/Product5', array('controller' => 'pages', 'action' => 'display', 'product5'));
    Router::connect('/Product6', array('controller' => 'pages', 'action' => 'display', 'product6'));
    Router::connect('/Product7', array('controller' => 'pages', 'action' => 'display', 'product7'));
    Router::connect('/Product8', array('controller' => 'pages', 'action' => 'display', 'product8'));
    Router::connect('/ProductsSub', array('controller' => 'pages', 'action' => 'display', 'productssub'));
    Router::connect('/InstantFood', array('controller' => 'pages', 'action' => 'display', 'instantfood'));
    Router::connect('/If1', array('controller' => 'pages', 'action' => 'display', 'if1'));

    Router::connect('/Order', array('controller' => 'orders', 'action' => 'order'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
    Router::connect('/SubmitAOrder', array('controller' => 'orders', 'action' => 'submitaorder'));
    Router::connect('/Success', array('controller' => 'orders', 'action' => 'success'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
