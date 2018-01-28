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

    public function backIndex(){
        return view('common.d3.backIndex');
    }

    public function showNewTree($name,$trees){
        $data = file_get_contents('./storage/files/'.$name);
        preg_match_all('/Tree[\s\S]+\{[\s\S]+\}\r\n\}\r\n\}\r\n/U', $data, $pre2,true );
        $start2 = $pre2[0];
        $start2 =$start2[$trees];
//        dd($start2);
        if(isset($start2)){
//            dd(1);
            $all = (object)array();
//            $all->allGroup = count($start2);
            $all->allMoney = 0;
            $all->countsSum = 0;
            $charts = array();
//            dd($all);
            if ($v = $start2){
//                dd($v);
                $accounts = array();
                $datas = array();
                preg_match_all('/\{(\s*[\s\S]+\s*)\}/',$v,$value,true);
//                dd($value);
                $arr = explode('Node',trim($value[1][0]));
//                dd($arr);
                foreach ($arr as $n => $z){
                    if($z == ''){
                        array_splice($arr,$n,1);
                    }else{
                        preg_match_all('/\{(\s*[\s\S]+\s*)\}/',$z,$item,true);
                        array_push($datas,trim($item[0][0]));
                    }
                }
//                dd($datas);
                $chart = (object)array();
                //树形图组数
                $chart->group = count($datas);
                $chart->count = 0;
                $chart->Money = 0;
//                dd($chart);
                $tree = "";
                foreach ($datas as $list){
//                    $count = array();
//                    dd($list);
//                    preg_match_all("/\t\TO[\s\S]+\{[\s\S]+\}\r\n/U",$list,$result,PREG_PATTERN_ORDER);
//            dd($result);
//            dd($list, $result);
                    preg_match_all("/\t\TO[\s\S]+\}\r\n/U",$list,$result,PREG_PATTERN_ORDER);
//                    dd($result);
                    preg_match_all("/\t\Name[\s\S]+\r\n/U",$list,$j,true);
                    preg_match_all("/\t\Value[\s\S]+\r\n/U",$list,$l,true);
                    $k = explode('Name',$j[0][0]);
                    $m = explode('Value',$l[0][0]);
                    $all->allMoney += trim($m[1]);
                    $chart->Money += trim($m[1]);
//                    dd($m);
                    if(!in_array(trim($k[1]),$accounts)){
                        array_push($accounts,trim($k[1]));
                    }
//                    dd($chart);
                    $childrens = "";
                    $z = $result[0];
//                    dd($z);
                    foreach ($z as $a => $b){
//                dd($b);
                        preg_match_all("/\t\TO[\s\S]+\r\n/U",$b,$c,true);
//                dd($c);
//                dd($c[0][0]);
                        $h = explode('|',$c[0][0]);
                        $g = explode("TO",$h[0]);
//                dd($g);
                        if(!in_array(trim($g[1]),$accounts)){
                            array_push($accounts,trim($g[1]));
                        }
//                        if(!array_key_exists(trim($g[1]),$count)){
//                            $chart->count++;
//                            $all->allCounts++;
//                            array_push($accounts,trim($g[1]));
//                        }
//                dd($h);
                        preg_match_all("/\t\{[\s\S]+\}\r\n/U",$b,$d,true);
//                dd($d);
                        $e = explode("\r\n",trim($d[0][0]));
                        $children = "";
//                        dd($e);
                        for($i = 1;$i<count($e)-1;$i++){
                            $f = explode('|',$e[$i]);
                            if(!in_array(trim($f[0]),$accounts)){
                                array_push($accounts,trim($f[0]));
                            }
//                            if(!array_key_exists(trim($f[0]),$count)){
//                                $chart->count++;
//                                $all->allCounts++;
//                                array_push($accounts,trim($f[0]));
//                            }
//                    dd($f);
                            $child = "{name:'".trim($f[0])."',money:'".trim($f[1])."',datetime:'".trim($f[2])."'},";
                            $children = $children.$child;
//                    array_push($children,$child);
                        }
                        $node = "{name:'".trim($g[1])."',money:'".trim($h[1])."',datetime:'".trim($h[2])."',children:[".$children."]},";
                        $childrens = $childrens.$node;
//                return $node;
//                dd($e);
                    }
                    $nodes = "{name:'".trim($k[1])."',money:'".trim($m[1])."',children:[".$childrens."]},";
                    $tree = $tree.$nodes;
//            return  $nodes;


                }
                $all->countsSum += count($accounts);
                $chart->accounts = $accounts;
                $trees = "{name:'',children:[".$tree."]}";
                return view('common.d3.show',compact('trees'));
                $chart->tree = $trees;
                $chart->count = count($accounts);
//                dd($chart);
                array_push($charts,$chart);
            }
//            dd($all);
            $all->allCounts = $charts;
            return view('common.d3.table',compact('all','name'));
            dd($all);
            dd($charts);
            return 1;
        }
        return view('common.d3.show',compact('trees'));
    }

    public function page($name,$page){
        $data = file_get_contents('./storage/files/'.$name);
        preg_match_all('/group[\s\S]+\{[\s\S]+\}\r\n\r\n\}/U', $data, $pre,true );
        $start = $pre[0];
        $start = $start[$page];
//        dd($start);
//        dd(count($start));
        if(isset($start)){
            $keys = array();
            $circles = (object)array();
//            $circles->group = count($start);
            $circles->sumAccount = 0;
            $circles->sumMoney = 0;
            if ($end = $start){
                $circle = (object)array();
                $circle->sumMoney = 0;
                preg_match_all('/\{(\s*[\d\D]+\s*)\}/U', $end, $matches,true );
                $matches = $matches[1];
//                dd($matches);
                $key = array();
                $rate = array();
                $links = "";
                $nodes = "";
                $results = array();
                $sumAccount = array();
//        $dataset = (object)array();
                $name = 0;
                $i = 0;
//                dd($matches);
                foreach ($matches as &$match) {
//                    dd($match);
                    $match = trim($match, "\r\n{\n");

                    $array = preg_split('/\r\n/',$match);

                    //环形图每笔转账的初始账号
                    if(!array_key_exists(trim($array[0],' '),$key)){
                        array_push($sumAccount,trim($array[0],' '));
                        $key[trim($array[0],' ')] = $i;
                        $rate[trim($array[0],' ')] = 0;
                        $i++;
                    }else{
                        $rate[trim($array[0],' ')]++;
                    }
                    for($j=0;$j<count($array);$j++){
                        array_push($results,$array[$j]);
                    }
                    //环形图 所有账号放入数组中
                    foreach ($array as $result){
                        $strs = preg_split('/\|/',$result);
//                        dd($strs);
                        if(!array_key_exists(trim($strs[0],' '),$key)){
                            array_push($sumAccount,trim($strs[0],' '));
                            $key[trim($strs[0],' ')] = $i;
                            $rate[trim($strs[0],' ')] = 0;
                            $i++;
                        }else{
                            $rate[trim($strs[0],' ')]++;
                        }

                    }

                }
//                dd($rate);
//                dd($matches);
                $circuits = "";
                $circleNodes ="";
                $sources = array();
                foreach ($key as $k => $v){
                    $sources[$k]="";
                }
//                dd($sources);
                foreach ($matches as $item){
//                    dd($item);
//            $item = trim($item, "\r\n{\n");
                    $array = preg_split('/\r\n/',$item);
//                    dd($array);
                    $account = preg_split('/\|/',$array[0]);
                    $money = preg_split('/\|/',$array[1]);
//                        dd(trim($money[1]));
                    $circle->sumMoney += trim($money[1]);
                    $circles->sumMoney += trim($money[1]);
                    $circle->account = trim($account[0]);
                    $circuit ="";
                    $circleNode ="";
//                    dd($array);
                    $source = "";
                    for($k=0;$k<count($array)-1;$k++){
                        $name++;
                        $pre = preg_split('/\|/',$array[$k]);
//                        dd($pre);
                        $next = preg_split('/\|/',$array[$k+1]);
//                        dd($next);
                        if(array_key_exists(trim($next[0],' '),$key)){
                            $source = "{name:\"".trim($pre[0],' ')."\",title:\"".trim($pre[0],' ')."\"},";
                            $sources[trim($next[0],' ')] = $sources[trim($next[0],' ')].$source;
                        }
//                        dd($next);
//                        dd(trim($next[1]));
                        $circuit = $circuit."{name:\"".trim($next[0],' ')."\",money:\"".trim($next[1],' ')."\",datetime:\"".trim($next[2],' ')."\"},";
                        $link = "{source:".$key[trim($pre[0],' ')].",target:".$key[trim($next[0],' ')].",info:'".trim($next[2],' ')."交易".trim($next[1],' ')."',name:\"".trim($pre[0],' ')."\"},";
                        $circleNode = $circleNode."{name:\"".trim($next[0],' ')."\",money:\"".trim($next[1],' ')."\",datetime:\"".trim($next[2],' ')."\"},";
//                        dd($link);
//                $node->name = $name;
//                $node->title = trim($pre[0],' ');
//                $node->info = trim($next[2],' ').'转账'.trim($next[1],' ');
//
                        $links = $links.$link;
//                array_push($links,$link);
//                array_push($nodes,$node);
                    }
//                    return $links;
//                    dd($key[trim($array[0])]);
                    $circuit = "{name:\"".trim($array[0])."\",target:[".$circuit."]},";
                    $circleNode = "{name:\"".trim($array[0])."\",title:\"".trim($array[0])."\",target:[".$circleNode."]},";
//                    return $circuit;
                    $circuits = $circuits.$circuit;
                    $circleNodes = $circleNodes.$circleNode;
//            dd(trim($re[0],' '));
                }
//                dd($sources);
//                return $circleNodes;
//                dd($key);
                foreach ($key as $k => $v){
                    $node = "{name:\"".$k."\",title:'".$k."',source:[".$sources[$k]."]},";
                    $nodes = $nodes.$node;
//            dd($v);
                }
//                return $nodes;
//        dd($links);
//        dd($nodes);
//                dd($name);
//                dd($circles);
                $dataset = "{links:[".$links."],circuit:[".$circuits."],nodes:[".$nodes."],account:".count($key).",transaction:".$name."}";
//                return $dataset;
                return view('common.d3.index',compact('dataset'));
//                dd($key);
                $circles->sumAccount += count($key);
                $circle->accounts = $key;
                $circle->sumAccounts = $sumAccount;
                $circle->sumAccount = count($key);
                $circle->circle = count($matches);
                array_push($keys,$circle);
                $circles->accounts = $keys;
            }

            return view('common.d3.circle',compact('circles','name'));
//            dd($circles);
//            dd($keys);
        }
    }

    public function circle($filename){
        $data = file_get_contents('./storage/files/'.$filename);
        preg_match_all('/group[\s\S]+\{[\s\S]+\}\r\n\r\n\}/U', $data, $pre,true );
        preg_match_all('/Tree[\s\S]+\{[\s\S]+\}\r\n\}\r\n\}\r\n/U', $data, $pre2,true );
        $start = $pre[0];
        $start2 = $pre2[0];
//        dd($start);
        //判断环形图
        if(count($start)>0){
            $keys = array();
            $circles = (object)array();
            $circles->group = count($start);
            $circles->sumAccount = 0;
            $circles->sumMoney = 0;
            foreach ($start as $end){
                $circle = (object)array();
                $circle->sumMoney = 0;
                preg_match_all('/\{(\s*[\d\D]+\s*)\}/U', $end, $matches,true );
                $matches = $matches[1];
//                dd($matches);
                $key = array();
                $rate = array();
                $links = "";
                $nodes = "";
                $results = array();
                $sumAccount = array();
//        $dataset = (object)array();
                $name = 0;
                $i = 0;
//                dd($matches);
                foreach ($matches as &$match) {
//                    dd($match);
                    $match = trim($match, "\r\n{\n");

                    $array = preg_split('/\r\n/',$match);

                    //环形图每笔转账的初始账号
                    if(!array_key_exists(trim($array[0],' '),$key)){
                        array_push($sumAccount,trim($array[0],' '));
                        $key[trim($array[0],' ')] = $i;
                        $rate[trim($array[0],' ')] = 0;
                        $i++;
                    }else{
                        $rate[trim($array[0],' ')]++;
                    }
                    for($j=0;$j<count($array);$j++){
                        array_push($results,$array[$j]);
                    }
                    //环形图 所有账号放入数组中
                    foreach ($array as $result){
                        $strs = preg_split('/\|/',$result);
//                        dd($strs);
                        if(!array_key_exists(trim($strs[0],' '),$key)){
                            array_push($sumAccount,trim($strs[0],' '));
                            $key[trim($strs[0],' ')] = $i;
                            $rate[trim($strs[0],' ')] = 0;
                            $i++;
                        }else{
                            $rate[trim($strs[0],' ')]++;
                        }

                    }

                }
//                dd($rate);
//                dd($matches);
                foreach ($matches as $item){
//            $item = trim($item, "\r\n{\n");
                    $array = preg_split('/\r\n/',$item);
//                    dd($array);
                        $account = preg_split('/\|/',$array[0]);
                        $money = preg_split('/\|/',$array[1]);
//                        dd(trim($money[1]));
                        $circle->sumMoney += trim($money[1]);
                        $circles->sumMoney += trim($money[1]);
                        $circle->account = trim($account[0]);

                    for($k=0;$k<count($array)-1;$k++){
                        $name++;
                        $pre = preg_split('/\|/',$array[$k]);
//                        dd($pre);
                        $next = preg_split('/\|/',$array[$k+1]);
//                        dd($next);
//                        dd(trim($next[1]));
                        $link = "{source:".$key[trim($pre[0],' ')].",target:".$key[trim($next[0],' ')].",info:'".trim($next[2],' ')."交易".trim($next[1],' ')."',name:\"".($key[trim($pre[0],' ')]+1)."\"},";
//                        dd($link);
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
//                dd($key);
                $circles->sumAccount += count($key);
                $circle->accounts = $key;
                $circle->sumAccounts = $sumAccount;
                $circle->sumAccount = count($key);
                $circle->circle = count($matches);
                array_push($keys,$circle);
                $circles->accounts = $keys;
            }
            return view('common.d3.circle',compact('circles','filename'));
//            dd($circles);
//            dd($keys);
        }
        //判断树形图
        if(count($start2)>0){
            $all = (object)array();
            $all->allGroup = count($start2);
            $all->allMoney = 0;
            $all->countsSum = 0;
            $charts = array();
//            dd($all);
            foreach ($start2 as $k => $v){
//                dd($v);
                $accounts = array();
                $datas = array();
                preg_match_all('/\{(\s*[\s\S]+\s*)\}/',$v,$value,true);
//                dd($value);
                $arr = explode('Node',trim($value[1][0]));
//                dd($arr);
                foreach ($arr as $n => $z){
                    if($z == ''){
                        array_splice($arr,$n,1);
                    }else{
                        preg_match_all('/\{(\s*[\s\S]+\s*)\}/',$z,$item,true);
                        array_push($datas,trim($item[0][0]));
                    }
                }
//                dd($datas);
                $chart = (object)array();
                //树形图组数
                $chart->group = count($datas);
                $chart->count = 0;
                $chart->Money = 0;
//                dd($chart);
                $tree = "";
                foreach ($datas as $list){
//                    $count = array();
//                    dd($list);
//                    preg_match_all("/\t\TO[\s\S]+\{[\s\S]+\}\r\n/U",$list,$result,PREG_PATTERN_ORDER);
//            dd($result);
//            dd($list, $result);
                    preg_match_all("/\t\TO[\s\S]+\}\r\n/U",$list,$result,PREG_PATTERN_ORDER);
//                    dd($result);
                    preg_match_all("/\t\Name[\s\S]+\r\n/U",$list,$j,true);
                    preg_match_all("/\t\Value[\s\S]+\r\n/U",$list,$l,true);
                    $k = explode('Name',$j[0][0]);
                    $m = explode('Value',$l[0][0]);
                    $all->allMoney += trim($m[1]);
                    $chart->Money += trim($m[1]);
//                    dd($m);
                    if(!in_array(trim($k[1]),$accounts)){
                        array_push($accounts,trim($k[1]));
                    }
//                    dd($chart);
                    $childrens = "";
                    $z = $result[0];
//                    dd($z);
                    foreach ($z as $a => $b){
//                dd($b);
                        preg_match_all("/\t\TO[\s\S]+\r\n/U",$b,$c,true);
//                dd($c);
//                dd($c[0][0]);
                        $h = explode('|',$c[0][0]);
                        $g = explode("TO",$h[0]);
//                dd($g);
                        if(!in_array(trim($g[1]),$accounts)){
                            array_push($accounts,trim($g[1]));
                        }
//                        if(!array_key_exists(trim($g[1]),$count)){
//                            $chart->count++;
//                            $all->allCounts++;
//                            array_push($accounts,trim($g[1]));
//                        }
//                dd($h);
                        preg_match_all("/\t\{[\s\S]+\}\r\n/U",$b,$d,true);
//                dd($d);
                        $e = explode("\r\n",trim($d[0][0]));
                        $children = "";
//                        dd($e);
                        for($i = 1;$i<count($e)-1;$i++){
                            $f = explode('|',$e[$i]);
                            if(!in_array(trim($f[0]),$accounts)){
                                array_push($accounts,trim($f[0]));
                            }
//                            if(!array_key_exists(trim($f[0]),$count)){
//                                $chart->count++;
//                                $all->allCounts++;
//                                array_push($accounts,trim($f[0]));
//                            }
//                    dd($f);
                            $child = "{name:'".trim($f[0])."',money:'".trim($f[1])."',datetime:'".trim($f[2])."'},";
                            $children = $children.$child;
//                    array_push($children,$child);
                        }
                        $node = "{name:'".trim($g[1])."',money:'".trim($h[1])."',datetime:'".trim($h[2])."',children:[".$children."]},";
                        $childrens = $childrens.$node;
//                return $node;
//                dd($e);
                    }
                    $nodes = "{name:'".trim($k[1])."',money:'".trim($m[1])."',children:[".$childrens."]},";
                    $tree = $tree.$nodes;
//            return  $nodes;


                }
                $all->countsSum += count($accounts);
                $chart->accounts = $accounts;
                $trees = "{name:'',children:[".$tree."]}";
                $chart->tree = $trees;
                $chart->count = count($accounts);
//                dd($chart);
                array_push($charts,$chart);
            }
//            dd($all);
            $all->allCounts = $charts;
            return view('common.d3.table',compact('all','filename'));
            dd($all);
            dd($charts);
            return 1;
        }
    }

    public function upload(Request $request){
//        echo (int)$request->hasFile('file');
//        exit;

//        $file = $request->file('file');

//        return $_FILES['file']['name'];
//        dd($file);
//        dd($file->getClientOriginalName());
        $result = Storage::exists('./files/'.$_FILES['file']['name']);
        if($result){
//            echo '<script>alert("该文件已经存在！")</script>';
            return redirect()->back();
        }else{
            $request->file('file')->storeAs('files',$_FILES['file']['name']);
            return redirect()->back();
        }
//        dd($result);
//
//        dd($request->all());
    }

    public function file(){
//        $files = Storage::allfiles('./files');
//        foreach ($files as $key => $value){
//            $files[$key] = explode('/',$value)[1];
////            dd($file);
//        }
        return view('common.d3.upload',compact('files'));
//        dd($files);
    }

    public function tree($page =1){
        $size = 5;
        $files = Storage::allfiles('./files');
//        foreach ($files as $key => $value){
//            $files[$key] = explode('/',$value)[1];
////            dd($file);
//        }
        $sum = count($files);
//        dd($sum);
        $data = array();
        for ($i = ($page-1)*$size;$i<($page*$size>$sum?$sum:$page*$size);$i++){
            array_push($data,explode('/',$files[$i])[1]);
        }
//        dd($data);
//        dd($page);
//        dd($files);
        return view('common.d3.tree',compact('data','page','sum'));
        if(count($data)>0){
            return view('common.d3.tree',compact('data','page','sum'));
        }else{
            abort(404);
        }

//        dd($files);
    }

    public function treePost(Request $request){
//        return $_FILES['file']['name'];
//        $file = $request->file('file');
//        dd($file->getClientOriginalName());
        $result = Storage::exists('./trees/'.$_FILES['file']['name']);
        if($result){
//            echo '<script>alert("该文件已经存在！")</script>';
            return redirect()->back();
        }else{
            $request->file('file')->storeAs('trees',$_FILES['file']['name']);
            return redirect()->back();
        }
    }

    public function delete($name){
        Storage::delete('./files/'.$name);
        return redirect()->back();
    }

    public function showTree($name){
//        return view('common.d3.show',compact('dataset'));
        $data = file_get_contents('./storage/trees/'.$name);
//        $data = str_replace("\r\n", '', $data);
        $array = explode('Tree',$data);
        $datas = array();
//        dd($array);
//dd($data);

        foreach ($array  as $k => $v){
            if($v == ""){
                array_splice($array,$k,1);
            }else{
                preg_match_all('/\{(\s*[\s\S]+\s*)\}/',$v,$value,true);
//                dd($value);
                $arr = explode('Node',trim($value[1][0]));
                foreach ($arr as $n => $z){
                    if($z == ''){
                        array_splice($arr,$n,1);
                    }else{
                        preg_match_all('/\{(\s*[\s\S]+\s*)\}/',$z,$item,true);
                        array_push($datas,trim($item[0][0]));
                    }
                }
//                dd($arr);
            }
        }
//        dd($datas);
//        \tName[\s\S]+?\n
        $tree = "";
        foreach ($datas as $list){
//            dd($list);
            preg_match_all("/\t\TO[\s\S]+\{[\s\S]+\}\r\n/U",$list,$result,PREG_PATTERN_ORDER);
//            dd($result);
//            dd($list, $result);
            preg_match_all("/\t\TO[\s\S]+\}\r\n/U",$list,$result,PREG_PATTERN_ORDER);
            preg_match_all("/\t\Name[\s\S]+\r\n/U",$list,$j,true);
            preg_match_all("/\t\Value[\s\S]+\r\n/U",$list,$l,true);
            $k = explode('Name',$j[0][0]);
            $m = explode('Value',$l[0][0]);
            $childrens = "";
            $z = $result[0];
            foreach ($z as $a => $b){
//                dd($b);
                preg_match_all("/\t\TO[\s\S]+\r\n/U",$b,$c,true);
//                dd($c);
//                dd($c[0][0]);
                $h = explode('|',$c[0][0]);
                $g = explode("TO",$h[0]);
//                dd($g);
//                dd($h);
                preg_match_all("/\t\{[\s\S]+\}\r\n/U",$b,$d,true);
//                dd($d);
                $e = explode("\r\n",trim($d[0][0]));
                $children = "";
                for($i = 1;$i<count($e)-1;$i++){
                    $f = explode('|',$e[$i]);
//                    dd($f[0]);
                    $child = "{name:'".trim($f[0])."',money:'".trim($f[1])."',datetime:'".trim($f[2])."'},";
                    $children = $children.$child;
//                    array_push($children,$child);
                }
                $node = "{name:'".trim($g[1])."',money:'".trim($h[1])."',datetime:'".trim($h[2])."',children:[".$children."]},";
                $childrens = $childrens.$node;
//                return $node;
//                dd($e);
            }
            $nodes = "{name:'".trim($k[1])."',money:'".trim($m[1])."',children:[".$childrens."]},";
            $tree = $tree.$nodes;
//            return  $nodes;

        }
        $trees = "{name:'',children:[".$tree."]}";
//        return $trees;
        return view('common.d3.show',compact('trees'));
    }

}
