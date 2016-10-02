<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Persona",
 *      required={"rut"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="rut",
 *          description="rut",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="full_name",
 *          description="full_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="gender",
 *          description="gender",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="birthday",
 *          description="birthday",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="occupation",
 *          description="occupation",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="address",
 *          description="address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="phone",
 *          description="phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="description",
 *          description="description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="facebook",
 *          description="facebook",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="twitter",
 *          description="twitter",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Persona extends Model
{
    use SoftDeletes;

    public $table = 'personas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
        'twitter'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rut' => 'string',
        'full_name' => 'string',
        'gender' => 'integer',
        'birthday' => 'date',
        'occupation' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'description' => 'string',
        'facebook' => 'string',
        'twitter' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rut' => 'required',
    ];
    
    public function Activity() {
        return $this->belongsToMany('App\Models\Activity', 'user_activities')->withPivot('order', 'is_registered');
    }
}
