<?php namespace Rasul\Movies\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Rasul\Movies\Models\Actor;
use Flash;

class ActorFormComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Actor Form',
            'description' => 'Enter actors'
        ];
    }

    public function onSave()
    {

        $actor = new Actor();

        $actor->name = Input::get('name');
        $actor->lastname = Input::get('lastname');
        $actor->actorimage = Input::file('actorimage');
        $actor->save();

        Flash::success('Actor addded!');
        return Redirect::back();

    }

    public function defineProperties()
    {
        return [];
    }
}
