<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-09 23:09:21 --- ERROR: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/controller/backend.php [ 10 ]
2011-11-09 23:09:21 --- STRACE: ErrorException [ 1 ]: Class 'A1' not found ~ APPPATH/classes/controller/backend.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-09 23:15:58 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'A1' at 'MODPATH/a1' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2011-11-09 23:15:58 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'A1' at 'MODPATH/a1' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /home/www/kohana1/application/bootstrap.php(110): Kohana_Core::modules(Array)
#1 /home/www/kohana1/index.php(102): require('/home/www/kohan...')
#2 {main}
2011-11-09 23:16:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method A1_ORM::logged_ind() ~ APPPATH/classes/controller/backend.php [ 11 ]
2011-11-09 23:16:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method A1_ORM::logged_ind() ~ APPPATH/classes/controller/backend.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-09 23:17:11 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-11-09 23:17:11 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/www/kohana1/system/classes/kohana/view.php(137): Kohana_View->set_filename('index')
#1 /home/www/kohana1/system/classes/kohana/view.php(30): Kohana_View->__construct('index', NULL)
#2 /home/www/kohana1/application/classes/controller/backend.php(23): Kohana_View::factory('index')
#3 [internal function]: Controller_Backend->action_index()
#4 /home/www/kohana1/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend))
#5 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana1/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-09 23:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-09 23:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/www/kohana1/index.php(109): Kohana_Request->execute()
#3 {main}