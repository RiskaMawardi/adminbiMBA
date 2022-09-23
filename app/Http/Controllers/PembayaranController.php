<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index(){
        $payment = Pembayaran::get();
        return view ('admin.index')
        ->with('payment', $payment);
    }

    public function dash(){
        return view('admin.dashboard');
    }

    public function indexPayment(){
        return view('admin.payment.bimba');
    }

    public function indexReportPayment(){
        $data = Pembayaran::get();
        return view('admin.reportPayment.index')->with('data',$data);
    }

    public function create(Request $request){
        $request->validate([
            'nama' => 'required',
            'jenis_bayar' => 'required',
            'keterangan' => 'required',
            'jml_bayar' => 'required',
        ]);
      
        Pembayaran::create($request->all());
       
        return redirect()->route('indexBimba')
                        ->with('success','Payment created successfully.');
    }

    public function layouts(){
        return view('layouts.master');
    }
}
