<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{HasMany, BelongsTo};
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model {
    use HasFactory;
    protected $table = 'states';
    protected $fillable = ['id', 'name', 'country_id', 'iso2', 'status'];
    public $timestamps = false;

    public function cities(): HasMany {
        return $this->hasMany(City::class);
    }

    public function country(): BelongsTo {
        return $this->belongsTo(Country::class);
    }

    public function status() {
        return $this->status ? 'Active' : 'Inactive';
    }
}
