<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class C_absensi extends Controller
{
    function index(Request  $request)
    {
        $kelas_id  = $request->input('kelas_id');

        $data = Siswa::where('kelas_id', $kelas_id )->get();

        $html = '';
        foreach ($data as $key => $value) {
            $html .= "<tr>
                        <td>{$value->nama}</td>
                        <td><input class='form-check-input' type='checkbox'  id='{$value->id}_hadir'  onchange='' name='hadir[]' value='{$value->id}_hadir'></td>
                        <td><input class='form-check-input' type='checkbox'  id='{$value->id}_alpha'  name='alpha[]' value='{$value->id}_alpha'></td>
                        <td><input class='form-check-input' type='checkbox'  id='{$value->id}_izin'   name='izin[]' value='{$value->id}_izin'></td>
                        <td><input class='form-check-input' type='checkbox'  id='{$value->id}_sakit'  name='sakit[]' value='{$value->id}_sakit'></td>
                     </tr>";
        }

        return response()->json(['message' => 'Guru berhasil diedit','data' => $html], 200);

    }
}
