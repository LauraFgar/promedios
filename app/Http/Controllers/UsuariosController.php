<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UsuariosController extends Controller
{
    public function index()
    {
        return view('usuarios');
    }

    public function listar(Request $request)
    {
        $columns = array(
            0 => 'nombre',
            1 => 'parcial_1',
            2 => 'parcial_2',
            3 => 'parcial_3'
        );
        
        $limit = $request->length??10;
        $start = $request->start??0;
        $order = $columns[$request->order["0"]["column"]] ?? "id";
        $dir   = $request->order["0"]["dir"] ?? "DESC";

        $data = Usuarios::getUsuarios($limit, $start, $order, $dir);

        $result = [
            "draw"            => intval($_GET['draw']),
            "recordsTotal"    => intval(1),
            "recordsFiltered" => intval(1),
            "data"            => $data
        ];

        return response()->json($result);

    }

    public function registrar(Request $request)
    {
        try {
            $validator =  Validator::make($request->all(), [
                'nombre' => 'required|string|min:3|max:45|regex:/^[\pL\s\-]+$/u',
                'parcial_1' => 'required|numeric|min:1|max:5',
                'parcial_2' => 'required|numeric|min:1|max:5',
                'parcial_3' => 'required|numeric|min:1|max:5'
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => 'error', 'message' => $validator->errors()]);
            }

            
            $data = [
                'nombre' => trim($request->nombre),
                'parcial_1' => $request->parcial_1,
                'parcial_2' => $request->parcial_2,
                'parcial_3' => $request->parcial_3
            ];
    
            Usuarios::create($data);

            return response()->json(["status" => "success", "final" => round(($request->parcial_1 + $request->parcial_2 + $request->parcial_3) / 3, 2)]);
        } catch (\Throwable $th) {
            return response()->json(["status" => "error", "message" => $th->getMessage()]);
        }
        
    }
    public function eliminar(Request $request)
    {
        try {
            Usuarios::destroy($request->id);
            return response()->json(["status" => "success", "message" => "¡Usuario eliminado exitosamente!"]);
        } catch (\Throwable $th) {
            return response()->json(["status" => "error", "message" => $th->getMessage()]);
        }
        
    }
}
