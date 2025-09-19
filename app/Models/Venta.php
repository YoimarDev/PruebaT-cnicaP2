<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/** @property int $id @property int $producto_id @property int $cantidad @property float $total */
class Venta extends Model
{
    protected $fillable = ['producto_id', 'cantidad', 'total', 'vendido_en'];

    protected $casts = [
        'cantidad' => 'integer',
        'total' => 'decimal:2',
        'vendido_en' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}
