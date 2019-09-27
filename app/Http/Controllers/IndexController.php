<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class IndexController extends Controller
{
	public function index()
	{
		dump('caonima');
	}
	public function create()
	{
		return view('ajax');
	}
	public function add(Request $request)
	{
		$name=$_POST['uname'];
//		echo $name;//111
		$a=$request->input('uname');
		$b=$request->input('pwd');
		echo $a;
		$name=$request->input('name','xiaoming');
		dump($name,$b);//xiaoming
		//文件上传
		$request->hasFile('files');//判断文件有没有上传
		$path=$request->file('files')->store(date('Y-m-d'));
		dump($path);
	}
	
	public function session()
	{
		session(['name'=>'嘻嘻']);
	    echo session('name');
	}
	public function show()
	{
		return view('show',['name'=>'小明','age'=>18]);
	}
	
}
?>