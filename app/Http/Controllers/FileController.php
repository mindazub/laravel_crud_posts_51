<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Post;

use DB;

use Excel;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::select('id', 'title', 'body', 'user_id', 'created_at')->get();
        
        Excel::create('posts', function($excel) use($posts) {
            $excel->sheet('POSTS', function($sheet) use($posts) {
                $sheet->fromArray($posts);
            });
        })->store('xls', storage_path('/'), true);



        return 'all done';
    }

    /**
     * Upload files to your app.
     */

    public function upload()
    {

        DB::table('posts')->truncate();

        $results = Excel::load('storage/posts.xls', function($reader){
        })->get();
        // var_dump($results->toArray());
        foreach ($results as $row) {
            Post::create([
                'id'=>$row->id,
                'title'=>$row->title,
                'body'=>$row->body,
                'user_id'=>$row->user_id,
                'created_at'=>$row->created_at
                ]);
        }

        return view('upload.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
