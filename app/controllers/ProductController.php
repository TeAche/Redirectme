<?php
class ProductController extends Controller
{
    public function indexAction ()
    {
        return View::make("product/index");
    }
    public function productAction ()
    {
        $rows=array();
        $head = array("id", "title");
        $products = Product::all();
        foreach ($products as $product)
        {
            $rows[] = $product['id'];
            $rows[] = $product['title'];
        }

        return View::make("product/product", array(
            "products"    => $products,
            "head"      => $head,
            "rows"      => $rows
        ));
    }

    public function addProductAction ()
    {
        $form = new ProductForm();

        if($form->isPosted())
        {
            if($form->isValidForAdd())
            {
                Product::create(array(
                    "title" => Input::get("title")
                ));

                return Redirect::route("product/product");
            }

            return Redirect::route("product/add_product")->withInput(array(
                "title"      => Input::get("title"),
                "errors"    => $form->getErrors()
            ));
        }

        return View::make("product/add_product", array(
            "form" => $form
        ));
    }

    public function editProductAction()
    {
        $form = new ProductForm();

        $product = Product::findOrFail(Input::get("id"));
        $url = URL::full();

        if($form->isPosted())
        {
            if($form->isValidForEdit())
            {
                $product->title = Input::get("title");
                $product->save();

                //$product->users()->sync(Input::get("user_id", []));
                //$product->resources()->sync(Input::get("resource_id", []));

                return Redirect::route("product/product");
            }

            return Redirect::to($url)->withInput(array(
                "title"      => Input::get("title"),
                "errors"    => $form->getErrors(),
                "url"       => $url
            ));
        }

        return View::make("product/edit_product", array(
            "form"      => $form,
            "product"     => $product,
        ));
    }

    public function deleteProductAction()
    {
        $form = new ProductForm();

        if($form->isValidForDelete())
        {
            $product = Product::findOrFail(Input::get("id"));
            $product->delete();
        }

        return Redirect::route("product/product");
    }
}