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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass('DashedRoute');


Router::scope('/auth', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Auth', 'action' => 'login'], ['_name' => 'auth.login']);
    $routes->connect('/logout', ['controller' => 'Auth', 'action' => 'logout', ], [ '_name' => 'auth.logout']);
});

Router::scope('/petition', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Petition', 'action' => 'index'], ['_name' => 'petition.index']);
    $routes->connect('/form', ['controller' => 'Petition', 'action' => 'add'], ['_name' => 'petition.add']);
    $routes->connect('/thank-you', ['controller' => 'Petition', 'action' => 'thank'], ['_name' => 'petition.thank']);
    $routes->connect('/map-points', ['controller' => 'Petition', 'action' => 'mapPoints'], ['_name' => 'petition.map_point', '_ext' => ['json']]);
});

Router::scope('/admin', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'posts', 'action' => 'index']);
    $routes->connect('/posts', ['controller' => 'posts', 'action' => 'index']);
    $routes->connect('/signatures', ['controller' => 'signatures', 'action' => 'index']);
    $routes->connect('/signatures/:action/*', ['controller' => 'signatures']);
    $routes->connect('/users', ['controller' => 'users', 'action' => 'index']);
    $routes->connect('/users/:action/*', ['controller' => 'users']);
    $routes->connect('/posts/:action/*', ['controller' => 'posts']);
});

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Blog', 'action' => 'index']);
    $routes->connect('/blog/:slug/', ['controller' => 'Blog', 'action' => 'view'], ['pass' => ['slug'], 'slug' => '[a-z\-]+']);
    $routes->connect('/feed', ['controller' => 'Blog', 'action' => 'rss'], ['_name' => 'feed', '_ext' => ['rss']]);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks('DashedRoute');
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
