<?php

namespace App\Http\Controllers\Index;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Model\UsermessageModel;
use App\Model\UsermessagesModel;
use App\Model\NewsModel;
class IndexController extends Controller
{
	public function index(){
		return view('index.index');
	}
	public function usermessage(Request $request){
		date_default_timezone_set('Asia/Shanghai');
		    $message = $request->input();
		    // print_r($message['tel']);exit;
            $res1 = UsermessageModel::where('yd_tel',$message['tel'])->first();
     if(empty($res1)){
        //print_r($message);exit;
        $data = [
            'yd_name' => $message['uname'],
            'yd_tel' => $message['tel'],
	    'yd_content' => $message['ly'],
	    'picker' => $message['picker'],
	    'gm' => $message['gm'],
            'add_time' => date('Y-m-d H:i:s'),
    ];
        //print_r($data);exit;
        $res = UsermessageModel::insert($data);
        if ($res) {
            return ['code' => 1, 'msg' => '信息已提交'];
        } else {
            return ['code' => 0, 'msg' => '添加失败,请检查您的电话或姓名是否有误'];
        }
            }else{
                 return ['code' => 5, 'msg' => '您已经提交过了！！！'];
            }

	}
	public function ydservice(){
		return view('index.ydservice');
	}

	public function ydcooperation(){
		return view('index.ydcooperation');
    }
    public function xw(){
		return view('index.xw');
    }
    public function ss(){
		return view('index.ss');
	}
    public function kms(){
        return view('index.kms');
    }

	public function usermessages(Request $request){
		date_default_timezone_set('Asia/Shanghai');
		    $message = $request->input();
		    // print_r($message['tel']);exit;
            $res1 = UsermessagesModel
            ::where('yd_tel',$message['tel'])->first();
     if(empty($res1)){
        //print_r($message);exit;
        $data = [
            'yd_name' => $message['uname'],
            'yd_sex' => $message['sex'],
            'yd_tel' => $message['tel'],
            'yd_email' => $message['email'],
            'yd_time' =>$message['time'],
            'yd_content' => $message['ly'],
            'add_time' => date('Y-m-d H:i:s'),
    ];
        //print_r($data);exit;
        $res = UsermessagesModel::insert($data);
        if ($res) {
            return ['code' => 1, 'msg' => '信息已提交'];
        } else {
            return ['code' => 0, 'msg' => '添加失败,请检查您的电话或姓名是否有误'];
        }
            }else{
                 return ['code' => 5, 'msg' => '您已经提交过了！！！'];
            }
	}
	public function ydabout(){
		return view('index.ydabout');
	}
	public function ydnews(){
		$res=NewsModel::orderBy('news_id','desc')->get();
		$list=[
			'data' => $res
		];
		return view('index.ydnews',$list);
	}
	public function ydnewsxq(Request $request){
		$id=$request->input('id');
          $prev = NewsModel::where('news_id','<',$id)->max('news_id');
          $next = NewsModel::where('news_id','>',$id)->min('news_id');
          $shang=NewsModel::where('news_id',$prev)->first();
          $xia=NewsModel::where('news_id',$next)->first();
          $res=NewsModel::where('news_id',$id)->first();

         $list = [
            'content' => $res,
            'prev' => $shang,
            'next' => $xia,
            'shang' => $prev,
            'xia' => $next
         ];
        return view('index.ydnewsxq',$list);
	}
	public function ydcourse(){
		return view('index.ydcourse');
	}

	public function newsaddlist(){
		return view('index.newsaddlist');
	}
}
