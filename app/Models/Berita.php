<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Artis;
class Berita extends Model
{
    use HasFactory;

    protected $guarded=[''];
    public function Artis():BelongsTo{
        return $this->BelongsTo(Artis::class,'id_artis');
    }
}
