<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** @property int $id @property string $nombre @property float $precio @property int $stock */
class Producto extends Model
{
    protected $fillable = ['nombre', 'precio', 'stock'];

    protected $casts = [
        'precio' => 'decimal:2',
        'stock' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function ventas(): HasMany
    {
        return $this->hasMany(Venta::class);
    }
}
