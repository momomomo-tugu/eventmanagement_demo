<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    // indexを表示
    public function index(Request $request)
    {
        $events = Event::orderBy('fin_date')->get();

        $user = Auth::user();
        $sort = $request->sort;

        $param = ['user' => $user, 'events' => $events];

        return view('board.index', $param);
    }

    // イベント追加画面を表示
    public function add(Request $request)
    {
        return view('board.add');
    }

    // イベントをデータベースに登録
    public function create(Request $request)
    {
        $this->validate($request, Event::$rules);
        $event = new Event;

        $file_name = $request->event_image->getClientOriginalName();
        $dir = 'public/assets/images';
        $request->event_image->storeAs($dir, $file_name);

        $event_image_path = '/storage/assets/images/' . $request->event_image->getClientOriginalName();

        $event->event_title = $request->event_title;
        $event->event_image = $event_image_path;
        $event->start_date = $request->start_date;
        $event->fin_date   = $request->fin_date;
        $event->event_memo = $request->event_memo;

        $event->save();
        return redirect('/');
    }

    // 詳細画面を表示
    public function detail(Request $request)
    {
        $id = $request->id;
        $target = Event::where('id', $id)->first();
        return view('board.detail', ['target' => $target]);
    }

    public function doLogout()
    {
        Auth::logout();
        $msg = '';
        return redirect('/');
    }
}
