<?php
declare(strict_types=1);

namespace Tests\Unit;

use App\Helpers\Estadisticas;
use PHPUnit\Framework\TestCase;

final class EstadisticasTest extends TestCase
{
    public function test_calcular_arreglo_vacio(): void
    {
        $res = Estadisticas::calcular([]);
        $this->assertNull($res['max']);
        $this->assertNull($res['min']);
        $this->assertNull($res['promedio']);
    }

    public function test_calcular_valores(): void
    {
        $res = Estadisticas::calcular([10, 5, 15]);
        $this->assertEquals(15.0, $res['max']);
        $this->assertEquals(5.0, $res['min']);
        $this->assertEquals((10.0 + 5.0 + 15.0) / 3.0, $res['promedio']);
    }
}
