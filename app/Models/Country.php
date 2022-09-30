<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Country extends Model {
    use HasFactory;
    protected $table = 'countries';
    protected $fillable = ['id', 'name', 'iso3', 'status'];
    public $timestamps = false;

    public function states(): HasMany {
        return $this->hasMany(State::class);
    }

    public function status() {
        return $this->status ? 'Active' : 'Inactive';
    }
}
