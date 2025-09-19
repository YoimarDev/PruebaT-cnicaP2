<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Devuelve la lista de productos en JSON.
     * Soporta paginación opcional: ?per_page=20&page=2
     */
    public function index(Request $request): JsonResponse
    {
        $perPage = (int) $request->query('per_page', 0);

        if ($perPage > 0) {
            $productos = Producto::select('id', 'nombre', 'precio', 'stock')
                ->orderBy('id')
                ->paginate($perPage);
            return response()->json([
                'data' => $productos->items(),
                'meta' => [
                    'current_page' => $productos->currentPage(),
                    'per_page' => $productos->perPage(),
                    'total' => $productos->total(),
                    'last_page' => $productos->lastPage(),
                ],
            ]);
        }

        $productos = Producto::select('id', 'nombre', 'precio', 'stock')->orderBy('id')->get();
        return response()->json(['data' => $productos]);
    }
}
