<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CuentahabienteController extends Controller
{
      /**
       * Show the profile for the given user.
       *
       * @param
       * @return View
       */
      public function index()
      {
          $users = DB::table('usuarios')
          ->select('idusuarios', 'nombre', 'no_cuenta', 'saldo')
          ->get();
          return view('index', ['usuarios' => $users]);
      }

      public function eliminar(Request $request)
      {
          \DB::table('usuarios')
                  ->where('idusuarios', '=', $request->idusuarios)
                  ->delete();
          return redirect()->back();
      }

      public function acreditar(Request $request)
      {
        $users = DB::table('usuarios')
        ->where('idusuarios', $request->idusuarios)
        ->select('idusuarios', 'nombre', 'no_cuenta', 'saldo')
        ->first();

        \DB::table('usuarios')
            ->where('idusuarios', '=', $request->idusuarios)
            ->update(['saldo' => ($users->saldo + $request->saldo) ]);

        $users = DB::table('usuarios')
        ->select('idusuarios', 'nombre', 'no_cuenta', 'saldo')
        ->get();

        return view('index', ['usuarios' => $users]);

      }

      public function debitar(Request $request)
      {
        $users = DB::table('usuarios')
        ->where('idusuarios', $request->idusuarios)
        ->select('idusuarios', 'nombre', 'no_cuenta', 'saldo')
        ->first();

        if( ($users->saldo - $request->saldo) < 0 ){
          \DB::table('usuarios')
              ->where('idusuarios', '=', $request->idusuarios)
              ->update(['saldo' => 0 ]);
        }else{
          \DB::table('usuarios')
              ->where('idusuarios', '=', $request->idusuarios)
              ->update(['saldo' => ($users->saldo - $request->saldo) ]);
        }

        $users = DB::table('usuarios')
        ->select('idusuarios', 'nombre', 'no_cuenta', 'saldo')
        ->get();

        return view('index', ['usuarios' => $users]);
      }

      public function anadir(Request $request)
      {
        \DB::table('usuarios')
          ->insert([
          'nombre' => $request->nombre,
          'no_cuenta' => $request->cuenta,
          'saldo' => $request->saldo]);

        $users = DB::table('usuarios')
        ->select('idusuarios', 'nombre', 'no_cuenta', 'saldo')
        ->get();

        return view('index', ['usuarios' => $users]);

      }

}
