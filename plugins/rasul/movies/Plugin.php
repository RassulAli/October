<?php namespace Rasul\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
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
