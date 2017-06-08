<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Session;
use Image;
use DB;
use Illuminate\Support\Str;

class NewsController extends Controller
{

    public function __construct() {

        $this->middleware('auth', ['except' => ['index', 'getMostRecentNews']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('news')->orderBy('id', 'desc')->paginate(5);;

        return view('pages.news')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation

        $this->validate($request, array(

            'title'         => 'required|max:255',
            'slug'          => 'unique:news,slug',
            'body'          => 'required',
            'postedBy'   => 'required'
        ));

        // insertion

        $news = new News;

        $news->title = $request->title;
        $news->slug = Str::slug($news->title, '-') . '-' . time();
        $news->body = $request->body;
        $news->postedBy = $request->postedBy;

        //Save image

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploaded-images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $news->image = $filename;
        }

        $news->save();

        Session::flash('success', 'The news article was successfully saved!');

        //redirection

        return redirect()->route('news.show', $news->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();

        return view('news.show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('news.edit')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        Session::flash('success', 'This news article was successfully deleted!');

        return redirect()->route('news.index');
    }

    public function getMostRecentNews() {
        $news = DB::table('news')->orderBy('id', 'desc')->limit(3)->get();

        return view('pages.home')->with('news', $news);
    }
}
