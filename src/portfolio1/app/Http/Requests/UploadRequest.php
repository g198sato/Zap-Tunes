<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'uploaded_music'      => 'required|mimes:mp3|max:10000',
            'uploaded_music_name' => 'required|string|max:255',
            'uploaded_music_highlight' => 'required|integer|min:0',
            'genreMaster'         => 'required|array',
            'genreMaster.*'       => 'integer|exists:genre_masters,id',
        ];
    }

    public function messages()
    {
        return [
            'uploaded_music.required' => '音楽ファイルを選択してください．',
            'uploaded_music.mimes'    => 'mp3ファイルを選択してください．',
            'uploaded_music.max'      => 'ファイルのサイズが大きすぎます．',

            'uploaded_music_name.required' => '曲名を入力してください．',
            'uploaded_music_name.string'   => '曲名を文字列で入力してください．',
            'uploaded_music_name.max'      => '曲名は255文字以下で入力してください．',
            
            'uploaded_music_highlight.required' => 'ハイライト開始時間を入力してください．',
            'uploaded_music_highlight.integer'  => 'ハイライト開始時間を整数で入力してください．',
            'uploaded_music_highlight.min'      => 'ハイライト開始時間を0以上の値で入力してください．',

            'genreMaster.required' => 'ジャンルを1つ以上設定してください．',
            'genreMaster.array'    => 'ジャンルをチェックボックスより入力してください．',

            'genreMaster.*.integer' => 'ジャンルをチェックボックスより入力してください．',
            'genreMaster.*.exists'  => 'ジャンルをチェックボックスより入力してください．',
        ];
    }
}
