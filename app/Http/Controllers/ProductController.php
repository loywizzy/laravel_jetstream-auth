<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LoginResponse;

class ProductController extends Controller
{
    public function index()
    {
        $product = product::all();

        return $product;

    }

}
