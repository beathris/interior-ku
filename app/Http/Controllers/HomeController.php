<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Category;
use App\Models\DetailProduct;
use App\Models\Product;
use App\Models\StepCustom;
use Illuminate\Http\Request;
/**
 * @OA\Tag(
 *   name="Home",
 *   description="Banner controller",
 * )
 */
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @OA\Get(
     *     path="/",
     *     tags={"Home"},
     *     security={
     *          {"passport": {}},
     *      },
     *     @OA\Response(response="200", description="An example resource")
     * )
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['banner'] = Banner::all();
        $data['aboutUs'] = AboutUs::first();
        $data['category'] = Category::all();
        $data['stepCustom'] = StepCustom::all();
        $data['detail_product'] = DetailProduct::with('product')->get();
//        return response($data);
        return view('LandingPage', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
