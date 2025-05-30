<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index',[
            'title' => 'Kantah Banjar',
        ]);
    }

    public function getDataPemohonan()
    {
        $dt_permohonan = Permohonan::with(['pelayanan'])->orderBy('id','DESC')->get();
        return datatables()->of($dt_permohonan)
                        ->addColumn('action', function($data){
                            if($data->pelayanan_id == 1){
                                $herf = route('redirectPeralihanHak',$data->id);
                            }elseif($data->pelayanan_id == 2){
                                $herf = route('redirectPemecahanPemisahan',$data->id);
                            }elseif($data->pelayanan_id == 3){
                                $herf = route('redirectPengukuranUlang',$data->id);
                            }elseif($data->pelayanan_id == 4){
                                $herf = route('redirectPtp',$data->id);
                            }elseif($data->pelayanan_id == 5){
                                $herf = route('redirectPeningkatan',$data->id);
                            }elseif($data->pelayanan_id == 6){
                                $herf = route('redirectRoya',$data->id);
                            }elseif($data->pelayanan_id == 7){
                                $herf = route('redirectPertamakali',$data->id);
                            }
                            else{
                                $herf = '';
                            }
                            $button = '<a href="'.$herf.'"  class="btn btn-primary btn-sm" ><i class="bi bi-printer"></i> Print</a>';
                            return $button;
                        })
                        ->addColumn('search', function($data){
                            return '<small style="font-size: 0.1px">'
                            .$data->pelayanan->nm_pelayanan.
                            '</small>';
                        })
                        ->addColumn('waktu', function($data){   
                            return date("d-M-Y", strtotime($data->created_at));
                        })
                        ->rawColumns(['action','waktu','search'])                        
                        ->addIndexColumn()
                        ->make(true);
    }
}
