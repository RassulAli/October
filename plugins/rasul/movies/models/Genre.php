<?php namespace Rasul\Movies\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'rasul_movies_genres';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'movies' => [
            'Rasul\Movies\Models\Movie',

            'table' => 'rasul_movies_movies_genres',

            'order' => 'name'

        ]
    ];
}
