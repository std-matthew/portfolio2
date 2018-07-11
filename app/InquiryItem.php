<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InquiryItem extends Model
{
    protected $guarded = [];

    public function inquiry()
    {
    	return $this->belongsTo(Inquiry::class, 'inquiry_id');
    }
}
