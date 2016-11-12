@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" id="timeline">
            <div class="col-md-4">
                <form action="#" v-on:submit="postStatus">
                    <div class="form-group">
                        <textarea class="form-control" rows="10" maxlength="140" placeholder="What are you up to?" required v-model="post"></textarea>
                    </div>
                    <input type="submit" value="Post" class="form-control">

                </form>
            </div>
            <div class="col-md-8">
                <p v-if="!posts.length">No posts to see here yet. Follow someone and make it happen</p>
                <div class="post" v-if="posts.length">
                    <div class="media" v-for="post in posts" track-by="id">
                        <div class="media-left">
                            <img class="media-object">
                        </div>
                        <div class="media-body">
                            <div class="user">
                                <a href="#"><strong>@{{ post.user.username }}</strong></a>
                            </div>
                            <p>@{{ post.body }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
