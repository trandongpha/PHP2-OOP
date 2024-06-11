<?php

namespace Trand\Lesson8OopBasic\Controllers\Admin;

use Trand\Lesson8OopBasic\Commons\Controller;
use Trand\Lesson8OopBasic\Controllers\Client\ProductController;
use Trand\Lesson8OopBasic\Models\Category;
use Trand\Lesson8OopBasic\Models\Product;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }


    
}
