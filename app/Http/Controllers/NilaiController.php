<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Log;

class NilaiController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getNilaiRT()
    {
        $nilai = DB::select("
        SELECT nama, nisn, nama_pelajaran, skor
        FROM nilai
        WHERE materi_uji_id = 7 AND nama_pelajaran != 'Pelajaran Khusus'
        ");

        $result = [];

        foreach ($nilai as $item) {
            if (!isset($result[$item->nisn])) {
                $result[$item->nisn] = [
                    'nama' => $item->nama,
                    'nisn' => $item->nisn,
                    'nilaiRt' => []
                ];
            }
            $result[$item->nisn]['nilaiRt'][strtolower($item->nama_pelajaran)] = round((float) $item->skor, 2);
        }

        return response()->json(array_values($result));
    }

    public function getNilaiST()
    {
        $nilai = DB::select("
            SELECT nama, nisn, nama_pelajaran,
            CASE
                WHEN pelajaran_id = 44 THEN skor * 41.67
                WHEN pelajaran_id = 45 THEN skor * 29.67
                WHEN pelajaran_id = 46 THEN skor * 100.00
                WHEN pelajaran_id = 47 THEN skor * 23.81
                ELSE skor
            END AS skor_terhitung
            FROM nilai
            WHERE materi_uji_id = 4
        ");

        Log::debug($nilai);

        $result = [];

        foreach ($nilai as $item) {
            if (!isset($result[$item->nisn])) {
                $result[$item->nisn] = [
                    'listNilai' => [],
                    'nama' => $item->nama,
                    'nisn' => $item->nisn,
                    'total' => 0.0
                ];
            }

            $skorTerhitung = round((float) $item->skor_terhitung, 2);

            $result[$item->nisn]['listNilai'][strtolower($item->nama_pelajaran)] = $skorTerhitung;

            $result[$item->nisn]['total'] = round($result[$item->nisn]['total'] + $skorTerhitung, 2);
        }

        usort($result, function ($a, $b) {
            return $b['total'] <=> $a['total'];
        });

        return response()->json(array_values($result));
    }
}
