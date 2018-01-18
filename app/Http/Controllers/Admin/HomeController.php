<?php

namespace App\Http\Controllers\Admin;


use App\Mail\ForgetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }

    public function welcome()
    {
        return view('admin.home.welcome');
    }




    public function test(){
        return Hash::make('123456');
    }








    public function circle($name){
        $data = file_get_contents('./storage/files/'.$name);
        preg_match_all('/\{(\s*[\d\D]+\s*)\}/U', $data, $matches,true );
//        dd($matches);
        $matches = $matches[1];
//        dd($matches);
        $key = array();
        $links = "";
        $nodes = "";
        $results = array();
//        $dataset = (object)array();
        $name = 0;
        $i = 0;
        foreach ($matches as &$match) {
            $match = trim($match, "\r\n{\n");
            $array = preg_split('/\r\n/',$match);
////            dd($array);
            if(!array_key_exists(trim($array[0],' '),$key)){
                $key[trim($array[0],' ')] = $i;
                $i++;
            }
            for($j=0;$j<count($array);$j++){
                array_push($results,$array[$j]);
            }
////            dd($results);
            foreach ($array as $result){
                $strs = preg_split('/\|/',$result);
                if(!array_key_exists(trim($strs[0],' '),$key)){
                    $key[trim($strs[0],' ')] = $i;
                    $i++;
                }
//            dd($strs);
            }
//            dd($match);
//            dd($key);
//            dd($array);
        }
        foreach ($matches as $item){
//            $item = trim($item, "\r\n{\n");
            $array = preg_split('/\r\n/',$item);
            for($k=0;$k<count($array)-1;$k++){
                $name++;
                $pre = preg_split('/\|/',$array[$k]);
                $next = preg_split('/\|/',$array[$k+1]);
                $link = "{source:".$key[trim($pre[0],' ')].",target:".$key[trim($next[0],' ')].",info:'".trim($next[2],' ')."交易".trim($next[1],' ')."',name:\"".($key[trim($pre[0],' ')]+1)."\"},";
//                $node->name = $name;
//                $node->title = trim($pre[0],' ');
//                $node->info = trim($next[2],' ').'转账'.trim($next[1],' ');
//
                $links = $links.$link;
//                array_push($links,$link);
//                array_push($nodes,$node);
            }
//            dd(trim($re[0],' '));
        }
//        dd($key);
        foreach ($key as $k => $v){
            $node = "{name:\"".($v+1)."\",title:'".$k."',},";
            $nodes = $nodes.$node;
//            dd($v);
        }
//        dd($links);
//        dd($nodes);
        $dataset = "{links:[".$links."],nodes:[".$nodes."],circuit:".count($matches).",account:".count($key).",transaction:".$name."}";
//        $dataset->links = $links;
//        $dataset->nodes = $nodes;
//        $dataset->circuit = count($matches);
//        $dataset->account = count($key);
//        $dataset->transaction = $name;
//        $dataset = json_encode($dataset);
//        dd($dataset);
//        print_r($dataset);
//        return $dataset;
        return view('common.d3.index',compact('dataset'));
    }

    public function upload(Request $request){
        $file = $request->file('upload');
//        dd($file->getClientOriginalName());
        $result = Storage::exists('./files/'.$file->getClientOriginalName());
        if($result){
            echo '<script>alert("该文件已经存在！")</script>';
            return redirect()->back();
        }else{
            $request->file('upload')->storeAs('files',$file->getClientOriginalName());
            return redirect()->to('/admin/upload');
        }
//        dd($result);
//
//        dd($request->all());
    }

    public function file(){
        $files = Storage::allfiles('./files');
        foreach ($files as $key => $value){
            $files[$key] = explode('/',$value)[1];
//            dd($file);
        }
        return view('common.d3.upload',compact('files'));
//        dd($files);
    }
}
