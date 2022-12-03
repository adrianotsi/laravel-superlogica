<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsuarioController extends Controller
{
    public function index()
    {

        // SELECT CONCAT(usuario.nome, ' - ', info.genero) AS usuário,
        //     CASE
        //         WHEN TIMESTAMPDIFF(YEAR, CONCAT(info.ano_nascimento, '-01-01'), CURDATE()) > 50 THEN "SIM"
        //         ELSE "NÃO"
        //     END AS maior_50_anos
        // FROM usuario
        // LEFT JOIN info ON usuario.id = info.id
        $usuarios = DB::table("usuario")
        ->leftJoin("info", function($join){
            $join->on("usuario.id", "=", "info.id");
        })
        ->select(DB::raw("concat(usuario.nome, ' - ', info.genero) as `usuário`"))
        ->addSelect(DB::raw("case when timestampdiff(year, concat(info.ano_nascimento, '-01-01'), curdate()) > 50 then 'sim' else 'não' end as `maior_50_anos`"))
        ->get();

        return json_encode($usuarios);

    }
}
