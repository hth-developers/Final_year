<?php

class Controller
{
    protected static $FORMAT_MAP = array(

        'txt'  => 'text/plain',
        'html' => 'text/html',
        'css'  => 'text/css',
        'xml'  => 'text/xml',
        'js'   => 'application/javascript',
        'json' => 'application/json',
    );

    // Fields

    private $services;

    // Methods

    public static function viewExists($path)
    {
        return file_exists(realpath(ROOT_DIR . '/../views/' . $path));
    }

    public function setServiceContainer($container)
    {
        $this->services = $container;
    }

    public function get($serviceId)
    {
        return $this->services->get($serviceId);
    }

    public function render($path, $vars = array(), $format = 'html', $headers = array(), $code = 200)
    {
        $contentType = (isset(self::$FORMAT_MAP[$format]) ? self::$FORMAT_MAP[$format] : $format) . ';charset=utf-8';

        // Create and return the response

        ob_start();

        $app = $this->get('template_interface');

        include realpath(ROOT_DIR . '/../views/' . $path);

        unset($app);

        $content = ob_get_clean();

        return new Response($content, array_merge(array(array('Content-type', $contentType)), $headers), $code);
    }

    public function text($content)
    {
        return new Response($content, array(array('Content-type', 'text/plain;charset=utf-8')));
    }

    public function json($array, $forceTextType = false)
    {
        return new Response(json_encode($array), array(array('Content-type', ($forceTextType ? 'text/plain' : 'application/json') . ';charset=utf-8')));
    }

    public function redirect($route)
    {
        $path = '?' . $this->get('router')->getRoute($route);

        return new Response('', array(array('Location', $path)), 303);
    }
}

?>
