<?php
/**
  * Класс Router
  * Компонент для работы с маршрутами
  */
class Router
{
  /**
  * Свойство для хранения массива роутов
  * @var array
  */
    private $routes;  //array of routes (is loaded from file config/routes.php)

    /**
    * Конструктор
    */
    public function __construct()
    {
      // Путь к файлу с роутами
      $routesPath = ROOT.'/config/routes.php';
      // Получаем роуты из файла
      $this->routes = include($routesPath);
    }

    /**
     * Возвращает строку запроса Returns request string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
          return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /**
    * Метод для обработки запроса
    */
    public function run()
    {
      // Получить строку запроса
      $uri = $this->getURI();

      // Проверить наличие такого запроса в routes.php
      foreach ($this->routes as $uriPattern => $path) {

        // Сравниваем $uriPattern и $uri
          if (preg_match("~$uriPattern~", $uri)) {

            // Определяем внутренний путь из внешнего соглано правилу
            $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

            // Определить какой контроллер, action
            // и параметры
            $segments = explode('/', $internalRoute);

            $controllerName = array_shift($segments).'Controller';
            $controllerName = ucfirst($controllerName);

            $actionName = 'action'.ucfirst(array_shift($segments));

            $parameters = $segments;

            // Подключить файл класса контроллера
            $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

            if (file_exists($controllerFile)) {
              include_once($controllerFile);
            }

            // Создать объект, вызвать метод (т.е., action)
            $controllerObject = new $controllerName;

            /* Вызываем необходимый метод ($actionName) у определенного
            * класса ($controllerObject) с заданными ($parameters) параметрами
            */
            $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
            // Если метод контроллера успешно вызван, завершаем работу роутера
            if ($result != null) {
              break;
            }
          }
      }
    }
}
