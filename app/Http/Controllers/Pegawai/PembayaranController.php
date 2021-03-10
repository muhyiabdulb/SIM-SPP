<?php

namespace App\Http\Controllers\Pegawai;

use DB;
use Auth;
use Validator;
use Alert;
use App\{Pembayaran, DetailPembayaran, Siswa, ViaTransfer, JenisPembayaran};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function history()
    {
        $history = Pembayaran::latest()->get();
        // return $history;
        return view('pegawai.pembayaran.history', compact('history'));
    }

    public function bayar()
    {
        $siswas = Siswa::latest()->get();
        $viaTransfer = ViaTransfer::latest()->get();
        $jenisPembayaran = JenisPembayaran::latest()->get();
        // return $siswas;
        return view('pegawai.pembayaran.bayar', compact('siswas', 'viaTransfer', 'jenisPembayaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
        ]);

        $input = $request->all();
        // return $input['transactions'];
        DB::beginTransaction();
        try {
            // return $input['siswa_id'];
            $pembayaran = Pembayaran::create([
                'user_id' => Auth::user()->id,
                'siswa_id' => $input['siswa_id'],
                'tanggal_bayar' => date('Y-m-d'),
                'total_nominal' => 0,
            ]);
            // dd($pembayaran); 
            $total_nominal = 0;
            // return $total_nominal;
            foreach($input['transactions'] as $detail) {
                $total_nominal += $detail['sub_bayar'];

                DetailPembayaran::create([
                    'user_id' => Auth::user()->id,
                    'transaksi_id' => $pembayaran->id,
                    'via_transfer_id' => $detail['via_transfer_id'],
                    'jenis_pembayaran_id' => $detail['jenis_pembayaran_id'],
                    'tanggal_transfer' => $detail['tanggal_transfer'],
                    'bayar' => $detail['bayar'],
                    'nominal' => $detail['nominal'],
                    'sisa_pembayaran' => $detail['sisa_pembayaran'],
                    'sub_bayar' => $detail['sub_bayar'],
                    'status' => $detail['status'],
                ]);
            }

            // return $total_nominal;
            // Update Total
            $pembayaran->update(['total_nominal' => $total_nominal]);

            DB::commit();
            Alert::success('Pemberitahun!', 'Pembayaran Berhasil :)');
            return redirect()->route('pegawai.pembayaran.history');
        } catch(\Exception $e) {

            DB::rollback();
            Alert::error('Pemberitahun!', 'Pembayaran Gagal!!! ):');
            return redirect()->back();
        }
    }

    public function detail($id)
    {
        $detail = Pembayaran::with('detailPembayaran')->find($id);
        // return $detail;
        return view('pegawai.pembayaran.detail', compact('detail'));
    }
}