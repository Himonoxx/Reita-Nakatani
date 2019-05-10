<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

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
        $portfolio->title=$request->title;
        $portfolio->comment=$request->comment;
        $portfolio->siteurl=$request->siteurl;
        if($request->file != null){
                
            $originalImg=$request->file;
            $path = $request->file->store('reitasportfolio','s3');
        
            dd($path);
            
            
            return redirect('portfolios.index')->with('success','保存しました。');

        }else{
            return back()
            ->withErrors(['file'=>'画像がアップロードされていないか不正なデータです。']);
        }
        
        $portfolio->save();
        
        return view('portfolios.portfolios');
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
        
        return redirect('portfolios.portfolios');
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
    
    public function portfolios()
    {
        return view('portfolios.portfolios');
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
