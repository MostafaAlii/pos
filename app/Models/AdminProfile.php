<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class AdminProfile extends Model {
    use HasFactory;
    protected $table = 'admin_profiles';
    protected $primaryKey = 'admin_id';
    protected $guarded = [];
    public function admin(): BelongsTo {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }
}
