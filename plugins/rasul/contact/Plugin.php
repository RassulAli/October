<?php namespace Rasul\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Rasul\Contact\Components\ContactFormComponent' => 'contactform',
        ];
    }

    public function registerSettings()
    {
    }
}
