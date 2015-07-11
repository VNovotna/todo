<?php

class RouterFactory {

    /**
     * @return Nette\Application\IRouter
     */
    public static function createRouter() {
        $router = new \Nette\Application\Routers\RouteList();
        //$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
        $router[] = new \Nette\Application\Routers\SimpleRouter('Homepage:default');
        return $router;
    }

}
