<?php

namespace App\Composers;


class SidebarViewComposer
{
    public function compose($view)
    {
        $action = app('request')->route()->getAction();
        $controller = class_basename($action['controller']);
        list($controller, $action) = explode('@', $controller);
        $menu = null;
        $submenu = null;

        switch ($controller) {
            case 'UserController':
                $menu = 'users';
                break;
            case 'QuestionController':
                $menu = 'questions';
                break;
            case 'TestController':
                $menu = 'test';
                break;
            case 'WebsiteController':
                $menu = 'website';
                break;
        }
        $view->with(compact('menu', 'controller'));
    }

}
