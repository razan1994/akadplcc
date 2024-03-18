<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'research';

    // ===================================================================================================================
    // ============================================ Accessors And Modiffires ===========================================
    // ===================================================================================================================
    public function getFileTypeAttribute()
    {
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    public function getFileNameAttribute()
    {
        return pathinfo($this->file, PATHINFO_FILENAME);
    }
}
