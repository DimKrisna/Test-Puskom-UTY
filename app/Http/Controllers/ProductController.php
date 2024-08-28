<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $filter = $request->input('brand');

        if ($filter && $filter !== 'all') {

            $products = DB::table('products')->where('brand', $filter)->get();
        } else {

            $products = DB::table('products')->get();
        }


        $response = Http::get('https://test-puskom.uty.ac.id/api/products');

        if ($response->successful()) {
            $apiProducts = $response->json();

            if ($filter && $filter !== 'all') {
                $apiProducts = array_filter($apiProducts, function ($product) use ($filter) {
                    return $product['brand'] === $filter;
                });
            }
        } else {
            $apiProducts = [];
        }

        return view('produk.indexproduk', compact('products', 'apiProducts', 'filter'));
    }

    public function show($id)
    {

        $response = Http::get("https://test-puskom.uty.ac.id/api/products/{$id}");


        if ($response->successful()) {
            $product = $response->json();
        } else {
            abort(404, 'Product not found');
        }

        return view('produk.show', compact('product'));
    }
}
