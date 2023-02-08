@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    アプリケーションの説明
                </div>
                <div class="card-body">
                    「Zap Tunes」は，自作の楽曲を誰かに聞いてほしい人・自分の知らない楽曲を聞きたい人のためのWebアプリケーションです．
                    アップロードされた楽曲を，簡単な操作で次々と聞くことができます．
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    利用方法
                </div>
                
                <div class="card-body">
                    <ul>
                        <li>
                            画面右上の<a href={{ route('login') }}>Login</a>をクリックし，登録済みアカウントでログインしてください(ゲスト用アカウントもあります)．
                        </li>
                        <li>
                            画面左上の<a href={{ route('player') }}>Player</a>から，アップロードされた楽曲を聞くことができます．
                        </li>
                        <li>
                            画面左上の<a href={{ route('upload') }}>Upload</a>から，楽曲をアップロードすることができます．
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    GitHub
                </div>
                
                <div class="card-body">
                    <a href="">ここにリンク</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    使用技術等
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <i class="fab fa-laravel fa-8x"></i>
                            <div>
                                Laravel
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                            <i class="fab fa-vuejs fa-8x"></i>
                            <div>
                                Vue.js
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                            <img src="mysql.png" class="img-fluid">
                            <div>
                                MySQL
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                            <i class="fab fa-docker fa-8x"></i>
                            <div>
                                Docker
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                            <i class="fab fa-github fa-8x"></i>
                            <div>
                                GitHub
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                            <i class="fab fa-centos fa-8x"></i>
                            <div>
                                CentOS7
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                            <i class="fab fa-bootstrap fa-8x"></i>
                            <div>
                                Bootstrap
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    データベース
                </div>
                
                <div class="card-body">
                    <img src="DB.jpeg" class="img-fluid">
                    補足
                    <ul>
                        <li>
                            「ジャンルタイプマスタ」には，ジャンルを大別するタイプ(etc:音楽ジャンル・楽器・雰囲気)には何が存在するかを格納します．
                        </li>
                        <li>
                            「ジャンルマスタ」には，どのようなジャンル(etc:ロック・楽しい)が存在するかを格納します．
                        </li>
                        <li>
                            「ジャンル」には，各楽曲はどのジャンル(etc:ロック・楽しい)に属するかを格納します．1つの楽曲にたいしてジャンルは複数選択可能です．
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    クレジット表記
                </div>
                
                <div class="card-body">
                    サンプル用のデータとして，BGMer様(<a href="https://bgmer.net/">https://bgmer.net/</a>)の楽曲を利用しています．
                </div>
            </div>
        </div>
    </div>

</div>


@endsection