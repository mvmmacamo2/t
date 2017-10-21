<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escola;
use App\VisitagEscola;

class VisitaGEscolaController extends Controller
{
    public function index()
    {

//       $escola = Escola::where('nome', 'Secundaria de Laulane')->get()->first();
//        echo $escola->nome;
        //  return view('visitasg.escola');


        //  $escola =Escola::all();

        $visita = VisitagEscola::all();
        foreach ($visita as $v) {
//            echo  $v->escola_id;
            $escola = Escola::where('id', $v->escola_id)->get();

            foreach ($escola as $escolas) {
                $visitas = $escolas->pedidos()->get();

                return view('visitasg.escola', compact('escola', 'visitas'));
//                 foreach ($visitas as $visita2){
////                     echo $escolas->nome."   ".$visita2->data."   ".$visita2->hora."  ".$escolas->email."<br>";
//
////
//          }

//                return view('visitasg.escola', compact('escola', 'visitas'));
            }
        }

//        $escola =Escola::where('id','')->get();
//
//        foreach ($escola as $escolas){
//            $visitas = $escolas->pedidos()->get();
//        }


//        foreach ($escola as $escolas){
//            echo $escolas->nome;
//            //        posso aimentar where
//            $visitas = $escolas->pedidos()->get();
//            foreach ($visitas as $v) {
//                echo "<hr>{$v->descricao}'     Data: '{$v->data}<br><br><br>";
//            }
//        }
        //  return view('visitasg.escola', compact('escola', 'visitas'));


    }
}
