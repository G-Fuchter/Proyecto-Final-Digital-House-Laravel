<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detallesController extends Controller
{

      public function detalle($id) {
  $producto = Producto::find($id);
  $vac = compact ("producto");
  return view ("detalle", $vac); 

    }
}
