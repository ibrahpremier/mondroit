<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategorieArticle;
use Illuminate\Http\Request;

class CategorieArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $articles = Article::where('categorie_article_id',$request->id)->get();
    //     return view("blog",$articles);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieArticle  $categorieArticle
     * @return \Illuminate\Http\Response
     */
    public function show($categorieArticle)
    {
        // $articles = Article::where('categorie_article_id',$categorieArticle)->get();
        // return view("blog",$articles);
        return view("blog");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieArticle  $categorieArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieArticle $categorieArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategorieArticle  $categorieArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategorieArticle $categorieArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieArticle  $categorieArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieArticle $categorieArticle)
    {
        //
    }
}
