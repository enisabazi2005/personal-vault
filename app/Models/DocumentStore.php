<?php

namespace App\Models;

use App\Models\VaultUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentStore extends Model
{
    use HasFactory;

    protected $table = 'new_document_stores';

    protected $fillable = [
        'user_id',
        'title',
        'documents_path',
    ];

    public function user()
    {
        return $this->belongsTo(VaultUser::class, 'user_id');
    }
}
