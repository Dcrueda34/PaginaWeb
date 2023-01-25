<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate();

        return view('welcome', compact('productos'));
    }
}