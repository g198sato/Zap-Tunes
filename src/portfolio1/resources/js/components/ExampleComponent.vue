<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card mb-3">
                    <div class="card-header">
                        Player
                    </div>

                    <div class="card-body bg-info">
                        <div>曲名：{{ nextMusic.song_name }}</div>
                        <div>作曲者：{{ nextMusic.name }}</div>
                        <div>リンク：<a href="{{ nextMusic.link }}">{{ nextMusic.link }}</a></div>
                    </div>
                    
                    <div class="card-body">
                        <div class="row justify-content-center">
                                <div class="col-md-7">
                                    <!-- ジャンル絞り込み用のラジオボタン -->
                                    <div>
                                        次に再生するジャンル：
                                        <div class="form-check" v-for="genreMaster in allGenreMasters" :key="genreMaster.id">
                                            <input class="form-check-input" type="radio" name="radio2" :id="genreMaster.id" v-model="selectedGenreMasterId" :value="genreMaster.id" @change="next">
                                            <label class="form-check-label" :for="genreMaster.id">
                                                {{ genreMaster.genre_name }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <button @click="playPause" class="btn btn-primary" id="play">
                                                <i class="fas fa-pause fa-6x" v-if="isPlay"></i>
                                                <i class="fas fa-play fa-6x" v-else></i>
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <button @click="next"  class="btn btn-primary">
                                                <i class="fas fa-fast-forward fa-6x"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- ハイライト再生用のチェックボックス -->
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="true" v-model="onlyHighlight" id="flexCheckDefault" @change="next">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    ハイライト箇所のみ再生する
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <button v-if="played.length >= 2" @click="resetHistory" class="btn btn-success">再生履歴を消去する</button>
                                            <button v-else class="btn btn-secondary disabled">再生履歴を消去する</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { remove } from '@vue/shared';
import { nextTick } from 'vue';

    export default {
        data(){
            return{
                nextMusic: [],
                isPlay: false,
                music: new Audio(),
                selectedGenreMasterId: 1,
                allGenreMasters: [],
                onlyHighlight: true, //ハイライト位置のみ再生するならtrue
                currentTime: 0,
                highlight: 0,
                played: [0],
            } 
        },

        watch: {
            currentTime: function() {
                //デバッグ用
                //console.log('「'+this.nextMusic.id+'currentTime:'+this.currentTime);
                //console.log(this.nextMusic.id+'highlight:'+this.highlight);
                if(this.onlyHighlight &&
                   this.currentTime - this.highlight > 15){ //TODO:ハードコーディングの解消

                    //console.log('currentTime-highlightが15秒を超えました」'); デバッグ用
                    this.currentTime = 0;
                    this.highlight = 0;
                    this.next();
                }
            }
        },

        mounted() {
            axios.get('/mounted')
                .then(
                    response => {
                        this.nextMusic = response.data;
                        this.highlight = this.nextMusic.highlight;
                        this.music.src = `/storage/music/${this.nextMusic.id}.mp3`;
                        this.played.push(response.data.id);

                        //ハイライト開始位置から再生する
                        if(this.onlyHighlight){
                            this.music.currentTime = this.nextMusic.highlight;
                        }

                        //ジャンル選択のラジオボタンの初期位置を，最も再生数の少ない曲のものに合わせる
                        this.selectedGenreMasterId = this.nextMusic.genre_master_id;
                    }
                );

            this.getAllGenreMasters();

            //現在の再生時間を取得する
                this.music.addEventListener('timeupdate', () => {
                this.currentTime = this.music.currentTime.toFixed(0);
            });

            //曲が最後まで再生された場合，次の曲を再生する
            this.music.addEventListener('ended', () => {
                //console.log('曲が最後まで再生されました'); //デバッグ用
                this.currentTime = 0;
                this.highlight = 0;
                this.next();
            });
        },

        destroyed(){
            this.music.removeEventListener('ended', this.next());
        },

        methods:{
            //曲の再生
            play(){
                this.music.play();
                this.isPlay = true;
            },

            //曲の一時停止
            pause(){
                this.music.pause();

                this.isPlay = false;
            },

            //playPauseボタンを押した時の処理
            playPause(){
                if(this.isPlay){
                    this.pause();
                }
                else{
                    this.play();
                }
            },

            //nextボタンを押した時の処理
            next(){
                //console.log('next()');
                axios.get('/next', {
                    params: {
                        selected_genre_id: this.selectedGenreMasterId,
                        except: this.played,
                    }
                })
                    .then(
                        response => {
                            //console.log(response);

                            this.setNextMusic(response);
                            this.played.push(this.nextMusic.id);
                            //console.log(this.played);
                            //曲の読み込みが終わったらそれを再生
                            this.music.addEventListener('loadeddata', () =>{
                                //console.log('曲のロードが終わりました');
                                this.play();
                            }, {once: true});
                        }
                    )
                    .catch(error => {
                        //console.log(error);
                    });
            },

            //axiosで取得した次の曲を再生できるようにaudioオブジェクトのソースを書き換える
            setNextMusic(response){
                if(response.data != ""){
                    this.nextMusic = response.data;
                }
                else{
                    //該当する曲が存在しない場合，その旨を伝える音声を再生する
                    this.nextMusic = {
                        user_id: 0,
                        song_name : "該当曲なし",
                        plays: 0,
                        name: "",
                        link:"",
                        id: 0,
                        highlight: 0,
                        genre_master_id: 0,
                    };
                }
                //console.log(this.nextMusic);
                this.music.src = `/storage/music/${this.nextMusic.id}.mp3`;
                
                //ハイライト開始位置から再生する
                if(this.onlyHighlight){
                    this.highlight = this.nextMusic.highlight;
                    this.music.currentTime = this.nextMusic.highlight;
                    this.currentTime = this.music.currentTime.toFixed(0);
                }else{
                    this.music.currentTime = 0;
                    this.currentTime = 0;
                }
            },

            //genre_mastersテーブルから，全てのジャンル名とそのidを取得する
            getAllGenreMasters(){
                axios.get('/get_all_genre_masters')
                    .then(
                        response => {
                            this.allGenreMasters = response.data;
                        }
                    );
            },

            //再生履歴の消去
            resetHistory(){
                this.played = [0];
            },
        }
    }
</script>
