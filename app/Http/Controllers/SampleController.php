<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
class SampleController extends Controller
{
    public function create() {        
        return view('index');
    } 
    public function store(Request $request){
            
                
                #dump($request->name);
                #変数表示　処理続ける　関数
                #dump($request->hurigana);
                #dump($request->email);
                #dump($request->tel);
                #dd($request->message);
                    #変数表示　処理止める　関数
                $content = new Content();
                $content->name = $request->name;
                $content-> furigana= $request->hurigana;
                $content->email = $request->email;
                $content->tel = $request->tel;
                $content->messages = $request->message;
                $content->save();
                return redirect('/index');


}
    public function index(Request $request){
     $contents = Content::get();
      #dd($contents);
      return view('show', compact('contents'));
    }
    public function edit(Content $content) {
        return view('edit', compact('content'));
    }
    public function update(Request $request,Content $content) {
        $content->name = $request->name;
        $content->furigana = $request->hurigana;
        $content->email = $request->email;
        $content->tel = $request->tel;
        $content->messages = $request->message;
        $content->save();
        return redirect('/index');
    }
    public function destroy(Request $request, Content $content) {
        $content->delete();
        return redirect('/index');
    }
}
