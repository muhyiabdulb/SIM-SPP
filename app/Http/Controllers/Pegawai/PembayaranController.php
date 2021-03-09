<?php

namespace App\Http\Controllers\Pegawai;

use DB;
use Auth;
use Validator;
use Alert;
use App\{Transaksi, DetailTransaksi, Siswa, ViaTransfer, RencanaPembayaran};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function history()
    {
        $history = Transaksi::latest()->get();
        // return $history;
        return view('kepsek.pembayaran.history', compact('history'));
    }

    public function bayar()
    {
        $siswas = Siswa::latest()->get();
        $viaTransfer = ViaTransfer::latest()->get();
        $rencanaPembayaran = RencanaPembayaran::latest()->get();
        // return $siswas;
        return view('kepsek.pembayaran.bayar', compact('siswas', 'viaTransfer', 'rencanaPembayaran'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        // return $input['transactions'];
        DB::beginTransaction();
        try {
            // return $input['siswa_id'];
            $transaksi = Transaksi::create([
                'user_id' => Auth::user()->id,
                'siswa_id' => $input['siswa_id'],
                'tanggal_transaksi' => date('Y-m-d'),
                'total_nominal' => 0,
            ]);
            // return $transaksi; 
            $total_nominal = 0;
            // return $total_nominal;
            foreach($input['transactions'] as $detail) {
                $total_nominal += $detail['total_nominal'];

                DetailTransaksi::create([
                    'user_id' => Auth::user()->id,
                    'transaksi_id' => $transaksi->id,
                    'via_transfer_id' => $detail['via_transfer_id'],
                    'rencana_pembayaran_id' => $detail['rencana_pembayaran_id'],
                    'tanggal_transfer' => $detail['tanggal_transfer'],
                    'bayar' => $detail['bayar'],
                    'sisa_pembayaran' => $detail['sisa_pembayaran'],
                    'status' => $detail['status'],
                ]);
            }

            // return $total_nominal;
            // Update Total
            $transaksi->update(['total_nominal' => $total_nominal]);

            DB::commit();
            Alert::success('Pemberitahun!', 'Pembayaran Berhasil :)');
            return redirect()->route('pegawai.pembayaran.history');
        } catch(\Exception $e) {

            DB::rollback();
            Alert::error('Pemberitahun!', 'Pembayaran Gagal!!! ):');
            return redirect()->back();
        }
    }
}