<?php

namespace App\Http\Kalkulator\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Kalkulator\Services\KalkulatorService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class KalkulatorController extends Controller
{

    public function __construct(
        protected KalkulatorService $kalkulatorService,
    )
    {
    }

    public function przeliczTabliczkeMnozenia(Request $request): JsonResponse|string
    {

        $wymiar = $request->input('wymiar');

        try {
            $request->validate([
                'wymiar' => 'integer|required|min:1|max:1000|',
            ]);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        $wynik = $this->kalkulatorService->przeliczTabliczkeMnozenia($wymiar);

        return response()->json($wynik);
    }
}
