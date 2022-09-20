<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RacipGenesis extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'racip_genesis';

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false) {
            $query
                ->where('species_name','like','%' . request('search') . '%' )
                ->orWhere('secondary_gene','like','%' . request('search') . '%' )
                ->orWhere('dominant_gene','like','%' . request('search') . '%' )
                ->orWhere('special_gene','like','%' . request('search') . '%' )
                ->orWhere('habitat','like','%' . request('search') . '%' )
                ->orWhere('geographical_place','like','%' . request('search') . '%' )
                ->orWhere('description','like','%' . request('search') . '%' )
                ->orWhere('dietary','like','%' . request('search') . '%' )
                ->orWhere('class','like','%' . request('search') . '%' )
                ->orWhere('series','like','%' . request('search') . '%' )
                ->orWhere('name','like','%' . request('search') . '%' )
                ->orWhere('dominant_color','like','%' . request('search') . '%' )
                ->orWhere('art_style','like','%' . request('search') . '%' )
                ->orWhere('pattern','like','%' . request('search') . '%' )
                ;
        }
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
