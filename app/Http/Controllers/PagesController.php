<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\Carousel;
use App\Models\Dashboard;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class PagesController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();

        $datas = Dashboard::latest()->paginate(10);
        $carousels = DB::table('carousels')->get();

        return view('animol.index', ['datas' => $datas, 'carousels' => $carousels])
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;

    		// mengambil data dari table pegawai sesuai pencarian data
		$datas = DB::table('dashboards')
		->where('title','like',"%".$search."%")
        ->paginate(5);
        $carousels = DB::table('carousels')->get();

    		// mengirim data pegawai ke view index
		return view('animol.index',['datas' => $datas, 'carousels' => $carousels]);

	}

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function contact()
    {
        return view('animol.contact');
    }

    public function contactPost(Request $request)
    {
        $contacts = new Contact;
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->subject = $request->subject;
        $contacts->description = $request->description;
        $contacts->save();
        toastr()->success('We will contact you soon!', 'Success');
        return view('animol.contact');
    }

    //     /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Dashboard  $data
    //  * @return \Illuminate\Http\Response
    //  */
    public function detail($id)//Dashboard $data)
    {
        $data = Dashboard::findOrFail($id);
        $comment = DB::table('comments')->get();

        return view('animol.anime-details',['data' => $data, 'comments' => $comment]);


    }

    public function commentPost(Request $request,Dashboard $id){
        $comments = new Comment;
        $comments->name = $request->name;
        $comments->comment = $request->comment;
        $comments->save();
        toastr()->success('Your comment successfully added!', 'Success');
        return back();
    }

    public function genre_fantasy(Request $request)
    {
        // mengambil data dari table pegawai sesuai pencarian data
    $genres = DB::table('dashboards')
    ->where('genre','Fantasy')
    ->paginate(10);
    $carousels = DB::table('carousels')->get();

        // mengirim data pegawai ke view index
    return view('animol.genre-fantasy',['genres' => $genres, 'carousels' => $carousels]);
    }

    public function genre_romance(Request $request)
    {
        $genres = DB::table('dashboards')->where('genre', 'Romance')->paginate(10);
        $carousels = DB::table('carousels')->get();

        return view('animol.genre-romance', ['genres' => $genres, 'carousels' => $carousels]);
    }

    public function genre_action(Request $request)
    {
        $genres = DB::table('dashboards')->where('genre', 'Action')->paginate(10);
        $carousels = DB::table('carousels')->get();

        return view('animol.genre-action', ['genres' => $genres, 'carousels' => $carousels]);
    }
}
