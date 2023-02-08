@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

@csrf
<div id="app">
    <upload-component></upload-component>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        操作方法等
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>
                                このページから，他人に聞いてほしい自分の楽曲をアップロードできます．
                            </li>
                            <li>
                                「この部分を特に聞いてほしい」という箇所の開始位置を，ハイライト開始位置で指定してください．<br>
                                指定された秒数から15秒が，「ハイライト箇所のみ再生する」場合に再生されます．
                            </li>
                            <li>
                                アップロードする楽曲のジャンルを，1つ以上選択してください(複数選択可)．
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
