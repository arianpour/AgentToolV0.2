<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['bankName','accountNo'];

    /**
     * Get the Owner that owns the BankDetail.
     */
    public function owners()
    {
        return $this->belongsTo('App\Owner');
    }

}
