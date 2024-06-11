<?php

namespace Trand\Lesson8OopBasic\Controllers\Client;

use Rakit\Validation\Helper;
use Trand\Lesson8OopBasic\Commons\Controller;
use Trand\Lesson8OopBasic\Models\Product;

class HomeController extends Controller
{


    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    public function index()
    {
        $name = 'Phatdph32717';
        $products = $this->product->all();
        
        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
            
        ]);
    }
}
