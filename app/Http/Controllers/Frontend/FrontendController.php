<?php

namespace App\Http\Controllers\Frontend;



use App\Models\Product;
use App\Repository\IProductRepository;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FrontendController extends Controller
{
    public function index()
    {

        $products =  $this->product->getAllProducts();
        $sliders = Slider::where('status','0')->get();
        return view('frontend.project',compact('sliders'))->with('products', $products);
    }


    public $product;

    public function __construct(IProductRepository $product) {
        $this->product = $product;
    }



    public function index10()
    {

        $products =  $this->product->getAllProducts();

        return view('product.index')->with('products', $products);

    }

    public function show($id)
    {
        // get single product

        $product = $this->product->getSingleProduct($id);
        return view('frontend.project')->with('product', $product);
    }


    public function create()
    {

        // create page
        return view('frontend.index');
    }


    public function store(Request $request)
    {

        // validate and store data
        $request->validate([
            'picture' => 'required',
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        //image upload

        $data = $request->all();

        if($image = $request->file('picture')) {
            $name = time(). '.' .$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['picture'] = "$name";
        }

        $this->product->createProduct($data);

        return redirect('/products');

    }





    public function edit($id)
    {
        $product = $this->product->editProduct($id);
        return view('product.edit')->with('product', $product);
    }


    public function update(Request $request, $id)
    {

        // validate and store data
        $request->validate([
            'picture' => 'required',
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        //image upload

        $data = $request->all();

        if($image = $request->file('picture')) {
            $name = time(). '.' .$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['picture'] = "$name";
        }

        $this->product->updateProduct($id, $data);

        return redirect('/products');

    }


    // add to cart

    public function addToCart(Product $product) {

        $cart = session()->get('cart');

        if(!$cart) {

            $cart = [

                $product->id => [
                    'name'     => $product->name,
                    'quantity' => 1,
                    'price'    => $product->price,
                    'image'    => $product->image
                ]
            ];

            session()->put('cart', $cart);
            return redirect()->route('product.cart')->with('success', 'Added to Cart');
        }

        // if there is cart

        if(isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->route('product.cart')->with('success', 'Added to Cart');
        }


        $cart[$product->id] = [
                    'name'     => $product->name,
                    'quantity' => 1,
                    'price'    => $product->price,
                    'image'    => $product->image
        ];

        session()->put('cart', $cart);
        return redirect()->route('product.cart')->with('success', 'Added to Cart');
    }





    // remove from cart

    public function deleteFromCart() {

    }















}
