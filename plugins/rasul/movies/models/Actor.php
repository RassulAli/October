<?php namespace Rasul\Movies\Models;

use Model;

/**
 * Model
 */
class Actor extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'rasul_movies_actors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'moviea' => [
            'Rasul\Movies\Models\Movie',

            'table' => 'rasul_movies_actors_movies',

            'order' => 'name'

        ]
    ];

    public function getFullNameAttribute(){
        return $this->name. " ". $this->lastname;

    }
}




