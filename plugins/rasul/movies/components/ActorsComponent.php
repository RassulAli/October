<?php namespace Rasul\Movies\Components;

use Cms\Classes\ComponentBase;
use Rasul\Movies\Models\Actor;

class ActorsComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Actor List',
            'description' => 'List of Actors'
        ];
    }

    public function onRun(){


        $this->actors = $this->loadActors();
    }

    public  $actors;

    protected function loadActors(){

        $query = Actor::all();

        if ($this->property('sortOrder') == 'name asc'){
            $query = $query->sortBy('name');
        }

        if ($this->property('sortOrder') == 'name desc'){
            $query = $query->sortByDesc('name');
        }

        if ($this->property('results')>0){
            $query = $query->take($this->property('results'));
        }

        return $query;
    }

    public function getSortOrderOptions(){
        return[
           'name asc' => 'Name (ascending)',
           'name desc' => 'Name (descending'
        ];
    }

    public function defineProperties()
    {
        return [
            'results' => [
                'title' => 'Number of Actors',
                'description' => 'How many actors do you wanna display?',
                'default' => 0,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Only numbers allowed'
            ],

            'sortOrder' => [
                'title' => 'Sort Actors',
                'description' => 'Sort those actors',
                'type' => 'dropdown',
                'default' => 'name asc'
            ]
        ];
    }
}
