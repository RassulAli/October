<?php namespace Rasul\Contact\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class ContactFormComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }

    public function onSend(){

        $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];

        Mail::send('rasul.contact::mail.message', $vars, function($message) {

            $message->to('admin@domain.tld', 'Admin Person');
            $message->subject('You have a new message');

        });

    }

    public function defineProperties()
    {
        return [];
    }
}
