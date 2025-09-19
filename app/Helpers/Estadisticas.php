<?php
declare(strict_types=1);

namespace App\Helpers;

/**
 * Helper mínimo para cálculo de max, min y promedio.
 */
final class Estadisticas
{
    /**
     * @param array<int|float> $numeros
     * @return array{max: float|null, min: float|null, promedio: float|null}
     */
    public static function calcular(array $numeros): array
    {
        $limpio = array_values(array_filter($numeros, fn($v) => is_numeric($v)));

        if (count($limpio) === 0) {
            return ['max' => null, 'min' => null, 'promedio' => null];
        }

        $floats = array_map(fn($v) => (float)$v, $limpio);

        $max = max($floats);
        $min = min($floats);
        $suma = array_sum($floats);
        $promedio = $suma / count($floats);

        return ['max' => $max, 'min' => $min, 'promedio' => $promedio];
    }
}
