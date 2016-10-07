<?php

namespace App\Repositories;

use App\Models\Persona;
use InfyOm\Generator\Common\BaseRepository;

class PersonaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rut',
        'full_name',
        'gender',
        'birthday',
        'occupation',
        'address',
        'phone',
        'email',
        'description',
        'facebook',
        'twitter',
        'users_id',
        'is_leader',
        'iglesias_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Persona::class;
    }
}
