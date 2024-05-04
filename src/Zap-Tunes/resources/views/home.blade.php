@extends('layouts.app')

@section('content')
<div id="app">
    <example-component></example-component>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    操作方法等
                </div>
                <div class="card-body">
                    <ul>
                        <li>
                            再生ボタン<span class="btn btn-primary"><i class="fas fa-play fa-1x"></i></span>をクリックすると，アップロードされた楽曲が再生されます．
                        </li>
                        <li>
                            楽曲が最後まで再生されると，自動で次の楽曲が再生されます．
                        </li>
                        <li>
                            一時停止ボタン<span class="btn btn-primary"><i class="fas fa-pause fa-1x"></i></span>をクリックすると，楽曲の再生が一時停止されます．
                        </li>
                        <li>
                            「ハイライト箇所のみ再生する」にチェックを入れると，作曲者が特に聞いてほしい15秒間だけが再生されます．
                        </li>
                        <li>
                            「次に再生するジャンル」で選択されたジャンルのうち，最も再生数の少ない楽曲が次に再生されます．
                        </li>
                        <li>
                            次の曲ボタン<span class="btn btn-primary"><i class="fas fa-fast-forward fa-1x"></i></span>をクリックすると，即座に次の楽曲が再生されます．
                        </li>
                        <li>
                            一度再生された曲が再度選曲されることはありません．再度選曲されるようにするためには，<button class="btn btn-success">再生履歴を消去する</button>をクリックしてください．
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
