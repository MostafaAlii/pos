<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class City extends Model {
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = ['id', 'name', 'state_id', 'status'];
    public $timestamps = false;

    public function state(): BelongsTo {
        return $this->belongsTo(State::class);
    }

    public function status() {
        return $this->status ? 'Active' : 'Inactive';
    }
}
