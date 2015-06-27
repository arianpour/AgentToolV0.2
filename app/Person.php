<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['firstName','lastName','email','phoneNo'];


    /**
     * Get all of the owning personable models.
     */
    public function personable()
    {
        return $this->morphTo();
    }

}
