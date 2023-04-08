<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $fillable = ['phone', 'whatsapp', 'email', 'address'];

    public function getContact () {
        return Contact::select('id', 'phone', 'whatsapp', 'email', 'address')
                        ->where('id', 1)
                        ->get();
    }
}
