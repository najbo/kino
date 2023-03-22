<?php namespace DigArt\Kino;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{


    public function registerSettings()
    {
        return [
            'config' => [
                'label'       => 'Kino',
                'icon'        => 'oc-icon-film',
                'description' => 'Settings of Kino Plugin',
                'keywords'    => 'Kino movies menus',
                'class'       => 'DigArt\Kino\Models\Settings',
                'permissions' => ['digart.kino.manage_plugins'],
                'size' => 'adaptive',
                'order'       => 700
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'DigArt\Kino\Components\ShowsIndex' => 'showsIndex',
            'DigArt\Kino\Components\ShowDetail' => 'showDetail',
            'DigArt\Kino\Components\UserLogin' => 'userProfile',
            'DigArt\Kino\Components\UserRegister' => 'userRegister',
            'DigArt\Kino\Components\Dashboard' => 'dashboard',
        ];
    }
}
