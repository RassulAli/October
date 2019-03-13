<?php namespace Rasul\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return[
            'Rasul\Movies\Components\ActorsComponent' => 'actors',
            'Rasul\Movies\Components\ActorFormComponent' => 'actorform'
        ];

    }


    public function registerFormWidgets()
    {
        return [
          'Rasul\Movies\Formwidgets\TestFormWidget' => [
              'label' => 'TestFormWidget field',
              'code' => 'testformwidget'
          ]
        ];
    }


    public function registerSettings()
    {
    }
}
