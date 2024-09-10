<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'caller_id',
        'receiver_id',
        'call_type',
        'started_at',
        'ended_at',
    ];

    /**
     * Relation avec l'utilisateur qui a initié l'appel.
     */
    public function caller()
    {
        return $this->belongsTo(User::class, 'caller_id');
    }

    /**
     * Relation avec l'utilisateur qui a reçu l'appel.
     */
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
