<?php

namespace App\Http\Kalkulator\Services;

class KalkulatorService
{
    public function przeliczTabliczkeMnozenia(int $wymiar)
    {
        $tablica = [];

        for ($i = 0; $i < $wymiar; $i++) {
            $wewnetrzna_tablica = [];

            for ($j = 0; $j < $wymiar; $j++) {
                $wewnetrzna_tablica[] = ($j + 1) * ($i + 1);
            }
            $tablica[] = $wewnetrzna_tablica;
        }

        return ($tablica);
    }
}
