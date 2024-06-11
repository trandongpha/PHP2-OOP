<?php 

namespace Trand\Lesson8OopBasic\Controllers\Client;

use Trand\Lesson8OopBasic\Commons\Controller;
use Trand\Lesson8OopBasic\Models\Product;

class ProductController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function detail($id) {
        $product = $this->product->findByID($id);

        $this->renderViewClient('product-detail', [
            'product' => $product
        ]);
    }

    
}