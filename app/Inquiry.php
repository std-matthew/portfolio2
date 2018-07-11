<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Inquiry extends Model
{
    use Notifiable;

    protected $guarded = [];

    const MINIMAL_COLUMN = [
        'id',
        'email',
    ];

    public function inquiry_items()
    {
    	return $this->hasMany(InquiryItem::class, 'inquiry_id');
    }

    public static function findOrCreate($email)
	{
	    $obj = static::select(static::MINIMAL_COLUMN)->where('email', $email)->first();
	    $obj = $obj ?: new static;

        if (!$obj) {
            return new static;
        }

        $obj->email = $email;
        $obj->save();

        return static::select(static::MINIMAL_COLUMN)->where('email', $email)->first();
	}
}
