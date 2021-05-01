<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Province;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class RajaOngkirController extends Controller
{
    /**
    * getProvinces
    *
    * @param mixed $request
    * @return void
    */
    public function getProvinces()
    {
        $provinces = Province::all();

        return response()->json([
            'success' => true,
            'message' => 'List Data provinces',
            'data'    => $provinces
        ]);
    }

    /**
    * getCities
    *
    * @param mixed $request
    * @return void
    */
    public function getCities(Request $request)
    {
        $city = City::where('province_id', $request->province_id)->get();
        return response()->json([
            'success' => true,
            'message' => 'List Data Cities By Province',
            'data'    => $city
        ]);
    }

    /**
    * checkOngkir
    *
    * @param mixed $request
    * @return void
    */
    public function checkOngkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'      => 501, // ID kota/kabupaten asal, 113 adalah kode kota demak
            'destination' => $request->city_destination, // IDkota/kabupaten tujuan
            'weight'      => $request->weight, // berat barang dalam gram
            'courier'     => $request->courier // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Cost All Courir: '.$request->courier,
            'data'    => $cost
        ]);
    }
}
