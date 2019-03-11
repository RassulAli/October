<?php namespace Rasul\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'rasul_movies_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

//    protected $jsonable = ['actors'];

//    Relation


    public $belongsToMany = [
      'genre' => [
          'Rasul\Movies\Models\Genre',

          'table' => 'rasul_movies_movies_genres',

          'order' => 'genre_title'

      ],
        'actors' => [
            'Rasul\Movies\Models\Actor',

            'table' => 'rasul_movies_actors_movies',

            'order' => 'name'

        ]
    ];

    public $attachOne = [

        'poster' => 'System\Models\File'

        ];

    public $attachMany = [
        'movie_gallery' => 'System\Models\File'
    ];

















}
