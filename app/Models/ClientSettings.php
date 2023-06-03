<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
class ClientSettings extends Model
{
    use HasFactory;

    protected $table = 'client_settings';

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function data(): Attribute {
        return Attribute::make(
            get: fn ($value) => json_decode($value)
        );
    }
}
