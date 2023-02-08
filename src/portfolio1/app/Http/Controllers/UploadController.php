<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Song;
use App\Http\Requests\UploadRequest;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload(UploadRequest $request)
    {
        $new_song = new Song();
        $uploaded_song = $new_song->create([
            'song_name' => $request->input('uploaded_music_name'),
            'user_id' => Auth::id(),
            'highlight' => $request->input('uploaded_music_highlight'),
        ]);
        $uploaded_song->genre_masters()->sync($request->genreMaster);

        $request->file('uploaded_music')->storeAs('public/music', $uploaded_song->id.'.mp3');

        return redirect('/upload')->with('status', 'アップロードが完了しました．');
    }
}
