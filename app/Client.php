<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    /**
     * Get the user that owns the Client.
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get all of the client member's person.
     */
    public function people(){
        return $this->morphMany('App\Person','personable');
    }
    /**
     * Get all of the client member's address.
     */
    public function addresses(){
        return $this->morphMany('App\Address','addressable');
    }

    public function rentalAgreement(){
        return $this->hasMany('App\RentalAgreement');
    }
}
