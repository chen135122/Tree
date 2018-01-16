<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Hello, World!';
});


Route::prefix('admin')->namespace('Admin')->group(function() {

    Route::get('/', 'HomeController@index');
    Route::get('/login', 'HomeController@getLogin');
    Route::post('/login', 'HomeController@login');
    Route::get('/test', 'HomeController@test');
    Route::get('/forgetPassword','HomeController@forgetPassword');
    Route::post('/forgetPassword','HomeController@forgetPasswordPost');
    Route::get('/resetPassword/{email}/{token}','HomeController@resetPassword');
    Route::post('/resetPassword','HomeController@reset');
//    Route::get('/logout',function (){
//        \Illuminate\Support\Facades\Auth::logout();
//    });
    Route::get('/d3',function (){
//
        $data = file_get_contents('./common/data.erp');
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
                $link = "{source:".$key[trim($pre[0],' ')].",target:".$key[trim($next[0],' ')]."},";
//                $node->name = $name;
//                $node->title = trim($pre[0],' ');
//                $node->info = trim($next[2],' ').'转账'.trim($next[1],' ');
                $node = "{name:\"".$name."\",title:'".trim($pre[0],' ')."',info:'".trim($next[2],' ')."转账".trim($next[1],' ')."'},";
                $nodes = $nodes.$node;
                $links = $links.$link;
//                array_push($links,$link);
//                array_push($nodes,$node);
            }
//            dd(trim($re[0],' '));
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
        return view('d3.index',compact('dataset'));

//        dd($array);
//        dd($links);
//        dd($results);
//        dd($key);
//        dd($dataset);
//        dd($nodes);
//        dd($matches);
//dd($matches);
//    dd($data);
//        $array =


    });
    // 权限管理
    Route::resource('guards', 'GuardController');

});
