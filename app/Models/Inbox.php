<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use HasFactory;

    protected $table = 'inboxes';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'subject', 'email', 'message'];

    public function getInboxes ($filter = null) {
        return Inbox::select('*')->get();
    }
}
