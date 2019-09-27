<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TryControllers extends Controller
{
    public function select()
    {
   		$res=\DB::select('select * from tests_table');
//		$res=\DB:table('tests_table')->select()->get();
//		\DB::table('tests_table')->first() 查询第一条       
		dump($res);
    	return view('select',['res'=>$res]);
    }
	//增
	public function add()
	{
		return view('add');
	}
	public function insert(Request $request)
	{
		$name=$request->input('uname');
		$sex=$request->input('sex');
		$address=$request->input('address');
		$resins=\DB::table('tests_table')->insert(['username'=>$name,'gender'=>$sex,'address'=>$address]);
		if($resins!= 0)
		{
			echo "添加成功";
		}
		return redirect('sql/sel');
		return view('insert');
	}
}
