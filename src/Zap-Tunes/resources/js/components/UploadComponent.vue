<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">
                        楽曲のアップロード
                    </div>
                    
                    <div class="card-body">
                        <div>
                            <form method="POST" action="/upload" enctype="multipart/form-data">
                                <input type="hidden" name="_token" :value="csrf">

                                <div class="row mb-3">
                                    <label for="uploaded_music" class="col-md-4 text-end">
                                        アップロードするファイル(.mp3)
                                    </label>
                                    <div class="col-md-6">
                                        <input type="file" id="uploaded_music" name="uploaded_music" class="form-control" accept=".mp3" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="uploaded_music_name" class="col-md-4 text-end">
                                        曲名
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="uploaded_music_name" name="uploaded_music_name" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="uploaded_music_highlight" class="col-md-4 text-end">
                                        ハイライト開始位置
                                    </label>
                                    <div class="col-md-2">
                                        <input type="number" id="uploaded_music_highlight" name="uploaded_music_highlight" class="form-control" value="0" min="0" required>
                                    </div>
                                    秒
                                </div>

                                <!-- ジャンル入力のチェックボックス -->
                                <div class="row mb-3">
                                    <div class="col-md-4 text-end">
                                        ジャンル
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-check" v-for="genreMaster in allGenreMasters" :key="genreMaster.id">
                                            <input class="form-check-input" type="checkbox" name="genreMaster[]" :id="genreMaster.id" :value="genreMaster.id">
                                            <label class="form-check-label" :for="genreMaster.id">
                                                {{ genreMaster.genre_name }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center mb-3">
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-primary">アップロード</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            {{ errors }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import { nextTick } from 'vue';

    export default {
        data(){
            return{
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                allGenreMasters: [],
            }
        },
        
        mounted(){
            this.getAllGenreMasters();
        },

        props:{
            errors: Object
        },

        methods:{
            //genre_mastersテーブルから，全てのジャンル名とそのidを取得する
            //TODO:ExampleComponentと重複していることを解決する
            getAllGenreMasters(){
                axios.get('/get_all_genre_masters')
                    .then(
                        response => {
                            this.allGenreMasters = response.data;
                            //console.log(this.allGenreMasters); //デバッグ用
                        }
                    );
            },
        },
    }
</script>
