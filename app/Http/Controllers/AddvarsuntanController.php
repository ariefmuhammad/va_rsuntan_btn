<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Va;
use Auth;
use GuzzleHttp\Client;

class AddvarsuntanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function formAddvarsuntan()
    {
        return view('addvarsuntan');
    }

    public function tambahAddvarsuntan(Request $request)
    {

        $nextId = Va::max('id') + 1;

        $addvarsuntan = Va::create([
            'user_id' => Auth::user()->id,
            'ref' => $request->input('id', $nextId),
            'va' => $request->va,
            'nama' => $request->nama,
            'layanan' => $request->layanan,
            'kodelayanan' => $request->kodelayanan,
            'jenisbayar' => $request->jenisbayar,
            'kodejenisbyr' => $request->kodejenisbyr,
            'noid' => $request->kodejenisbyr,
            'tagihan' => $request->tagihan,
            'flag' => $request->flag,
            'expired' => $request->expired,
            'reserve' => $request->reserve,
            'description' => $request->reserve,
            'status_inquiry' => '0',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        // $client = new Client();
        // $response = $client->post('url', [
        //     GuzzleHttp\RequestOptions::JSON => ['foo' => 'bar']
        // ]);


        \Session::flash('Berhasil', 'Data Virtual Account berhasil ditambahkan');

        return back();
    }

}