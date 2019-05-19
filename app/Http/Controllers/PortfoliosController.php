<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use Carbon\Carbon;
use \Auth;
use Storage;

class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfolio=New Portfolio;
        
        return View('portfolios.create',['portfolio'=>$portfolio]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $portfolio=new Portfolio;
        $request->user()->portfolios()->create([
            'title'=>$request->title,
            'comment'=>$request->comment,
            'siteurl'=>$request->siteurl,
            'user_id'=>$request->id
            
        ]);
        
        return view('users.index');
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
        $portfolio=Portfolio::find($id);
        
        return view('portfolios.edit',[
            'portfolio'=>$portfolio,
        ]);
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
        $portfolio=Portfolio::find($id);
        
        $portfolio->title=$request->title;
        $portfolio->comment=$request->comment;
        $portfolio->siteurl=$request->siteurl;
        
        $portfolio->save();
        
        return redirect('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio=Portfolio::find($id);
        if(Auth::user()->id == $portfolio->user_id) 
        {
            $portfolio->delete();
            
        }
        
        return view('users.index');
    }
    
    public function portfolios()
    {
        $portfolios=Portfolio::all();
        
        return view('portfolios.portfolios',['portfolios'=>$portfolios]);
    }
    
    public function imageStore(Request $request)
    {
        
       if($request->file != null){
                
            $file = $request->file('file');
            $path = Storage::disk('s3')->putFile('/reitasportfolio', $file, 'public');
        
            dd($path);
            
            
            return redirect('users.index')->with('success','保存しました。');

        }else{
            return back()
            ->withErrors(['file'=>'画像がアップロードされていないか不正なデータです。']);
        }
        
        
        
    }
    
}
