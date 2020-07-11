<?php
namespace Account;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\AccountController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'accounts' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/accounts',
                    'defaults' => [
                        'controller'    => Controller\AccountController::class,
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    // You can place additional routes that match under the
                    // route defined above here.
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'ZendSkeletonModule' => __DIR__ . '/../view',
        ],
    ],
];
