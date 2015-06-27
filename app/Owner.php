<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model {

    /**
     * Get the user that owns the Owner.
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the owners record associated with the user.
     */
    public function properties()
    {
        return $this->hasMany('App\Property');
    }
    /**
     * Get the owners record associated with the user.
     */
    public function bank_details()
    {
        return $this->hasMany('App\BankDetail');
    }

    /**
     * Get all of the owner member's customer.
     */

    public function people(){
        return $this->morphMany('App\Person','personable');
    }
    /**
     * Get all of the owner member's address.
     */
    public function addresses(){
        return $this->morphMany('App\Address','addressable');
    }

    public function rentalAgreement(){
        return $this->hasMany('App\RentalAgreement');
    }
}
