<?php

namespace App\Http\Controllers\Ortu;

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
        $history = Pembayaran::where('siswa_id', auth()->user()->siswa_id)->latest()->get();
        // return $history;
        return view('ortu.pembayaran.history', compact('history'));
    }

    public function bayar()
    {
        $siswas = Siswa::where('id', auth()->user()->siswa_id)->first();
        $viaTransfer = ViaTransfer::latest()->get();
        $jenisPembayaran = JenisPembayaran::latest()->get();
        // return $siswas;
        return view('ortu.pembayaran.bayar', compact('siswas', 'viaTransfer', 'jenisPembayaran'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        // return $input['transactions'];
        DB::beginTransaction();
        try {
            $pembayaran = Pembayaran::create([
                'user_id' => Auth::user()->id,
                'siswa_id' => Auth::user()->siswa_id,
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
                    'siswa_id' => Auth::user()->siswa_id,
                    'transaksi_id' => $pembayaran->id,
                    'via_transfer_id' => $detail['via_transfer_id'],
                    'jenis_pembayaran_id' => $detail['jenis_pembayaran_id'],
                    'tanggal_transfer' => $detail['tanggal_transfer'],
                    'bulan' => $detail['bulan'],
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
            return redirect()->route('ortu.pembayaran.history');
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
        return view('ortu.pembayaran.detail', compact('detail'));
    }
    public function umum()
    {
        $umum = Pembayaran::where('siswa_id', auth()->user()->siswa_id)->latest()->get();
      
        // return $umum;
        return view('ortu.umum', compact('umum'));
    }
    public function spp()
    {
        $spp = Pembayaran::where('siswa_id', auth()->user()->siswa_id)->latest()->get();
      
        // return $umum;
        return view('ortu.spp', compact('spp'));
    }
}
