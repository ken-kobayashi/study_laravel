<?php

namespace App\Http\Controllers;

use App\Models\Frameworks;

class SampleController extends Controller
{
	public function model()
       	{
		// Frameworksモデルのインスタンス化
		$md = new Frameworks();
		// データ取得
		$data = $md->getData();
                var_dump($data);
		// ビューを返す
		return view('sample.model',['data' => $data]);
	}
}
