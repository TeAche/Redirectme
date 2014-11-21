<?php
class ProductController extends Controller
{
    public function indexAction ()
    {
        $rows=array();
        $head = array("id", "title");
        $products = Product::all();
        foreach ($products as $product)
        {
            $rows[] = $product['id'];
            $rows[] = $product['title'];
        }

        return View::make("product/index", array(
            "products"    => $products,
            "head"      => $head,
            "rows"      => $rows
        ));
    }
}