 <?php
 // Filename: /module/Blog/config/module.config.php
 return array(
     // This lines opens the configuration for the RouteManager
     'router' => array(
         'routes' => array(
             'blog' => array(
                 'type' => 'literal',
                 'options' => array(
                     'route'    => '/blog',
                     'defaults' => array(
                         'controller' => 'Blog\Controller\List',
                         'action'     => 'index',
                     ),
                 ),
                 'may_terminate' => true,
                 'child_routes'  => array(
                 		
                     'detail' => array(
                         'type' => 'segment',
                         'options' => array(
                             'route'    => '/:id',
                             'defaults' => array(
                                 'action' => 'detail'
                             ),
                             'constraints' => array(
                                 'id' => '[1-9]\d*'
                             )
                         )
                     ),
                     'add' => array(
                     	'type' => 'literal',
                     	'options' => array(
                     		'route' 	=> '/add',
                     		'defaults' 	=> array(
                     			'controller' => '\Blog\Controller\Write',
                     			'action'	 => 'add'
                     		)
                     	)
                     ),
                     'edit' => array(
                     	'type' => 'segment',
                     	'options' => array(
                     		'route' => '/edit/:id',
                     		'defaults' => array(
                     			'controller' => 'Blog\Controller\Write',
                     			'action' 	 => 'edit'
                     		),
                     		'constraints'	=> array(
                     			'id' => '\d+'
                      		)
                     	)
                     ),
                     'delete' => array(
                     	'type' => 'segment',
                     	'options' => array(
                     		'route' => '/edit/:id',
                     		'defaults' => array(
                     			'controller' => 'Blog\Controller\Delete',
                     			'action' 	=> 'delete'
                     		),
                     		'constraints' => array(
                     			'id' => '\d+'
                     		)
                     	)
                     ),
                 )
             )
         )
     ),
     
     'controllers' => array(
     		'factories' => array(
     		
     				'Blog\Controller\List'  => 'Blog\Factory\ListControllerFactory',
     				'Blog\Controller\Write' => 'Blog\Factory\WriteControllerFactory',
     				'Blog\Controller\Delete'=> 'Blog\Factory\DeleteControllerFactory'
     		)
     ),
     
     'view_manager' => array(
     		'template_path_stack' => array(
     				__DIR__ . '/../view',
     	)
     ),
     
     'service_manager' => array(
         'factories' => array(
             'Blog\Mapper\PostMapperInterface'	 => 'Blog\Factory\ZendDbSqlMapperFactory',
             'Blog\Service\PostServiceInterface' => 'Blog\Factory\PostServiceFactory',
             'Zend\Db\Adapter\Adapter'			 => 'Zend\Db\Adapter\AdapterServiceFactory'
         ),
     
	     'db' => array(
	     	'driver'		=> 'Pdo',
	     	'username'		=> 'SECRET_USERNAME',
	     	'password'		=> 'SECRET_PASSWORD',
	     	'dsn'			=> 'mysql:dbname=blog;host=localhost',
	     	'driver_options'=> array(
	     		\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
     			)
     		)
     	)
     );