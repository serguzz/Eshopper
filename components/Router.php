<?php

/**
 *
 */
class Router
{
    private $routes;

    public function __construct()
    {
      $routesPath = ROOT.'/config/routes.php';
      $this->routes = include($routesPath);
    }

    /**
    * Returns request string
    */
    private function getURI()
    {
      if (!empty($_SERVER['REQUEST_URI'])) {
        return trim($_SERVER['REQUEST_URI'], '/');
      }

    }


    public function run()
    {
      // Получить строку запроса
      $uri = $this->getURI();
    // echo $uri.'</br><br>';

      // Проверить наличие такого запроса в routes.php
      foreach ($this->routes as $uriPattern => $path) {

        // Сравниваем $uriPattern и $uri
          if (preg_match("~$uriPattern~", $uri)) {

          //  echo "<br>Где ищем: ".$uri;
          //  echo "<br>Что ищем: ".$uriPattern;
          //  echo "<br>Кто обрабатывает: ".$path;

            // Определяем внутренний путь из внешнего соглано правилу

            $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

            //echo "<br>Нужно сформировать: ".$internalRoute;

            // Определить какой контроллер, action
            // и параметры
            $segments = explode('/', $internalRoute);
            //echo "<br>Segments: "; print_r($segments);

            $controllerName = array_shift($segments).'Controller';
            $controllerName = ucfirst($controllerName);

            $actionName = 'action'.ucfirst(array_shift($segments));

            //  echo '<br>Controller Name:  '.$controllerName;
          //  echo '<br>Action Name:  '.$actionName;

            $parameters = $segments;

      //      echo '<pre>';
      //      print_r($parameters);
      //      echo '</pre>';

            // Подключить файл класса контроллера
            $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

            if (file_exists($controllerFile)) {
              include_once($controllerFile);
            }

            // Создать объект, вызвать метод (т.е., action)
            $controllerObject = new $controllerName;
            $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
            if ($result != null) {
              break;
            }

          }
      }



    }

}
