<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news\index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $news = new News;
            $news->author = $request->input("author") ? $request->input("author") : null;
            $news->title = $request->input("title") ? $request->input("title") : null;
            $news->tags = $request->input("tags") ? $request->input("tags") : null;
            $news->description = $request->input("description") ? $request->input("description") : null;
            $news->url = $request->input("url") ? $request->input("url") : null;
            $news->published_at = $request->input("published_at") ? $request->input("published_at") : null;
            $news->likes = 0;
            $news->accesses = 0;
            $news->user_log = Auth::user()->id;
            $news->created_at = date('Y-m-d h:m:s');
            $news->save();
            return ["code" => 200, "message" => "Cadastrado com sucesso"];
        } catch (Exception $e) {
            return ["code" => 500, "message" => "Erro ao cadastrar"];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }

    public function dataTable(Request $request)
    {
        $data = News::dataTable($request->all());
        return response()->json(["data" => $data], 200);
    }
}
