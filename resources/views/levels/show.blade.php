<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>用户文章</title>
    <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row shadow">
        <div class="card">
            <h1>级别： {{ $level->name }}</h1>
            <hr>
            <div class="card-body">
                <h3>用户文章</h3>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ $post->image->url }}" class="card-img" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <h6 class="card-subtitle text-munted">
                                                <strong>所欲分类：</strong>{{ $post->category->name }}<br>
                                                <strong>评论总数：</strong>{{ $post->comments_count }}
                                            </h6>
                                            <p class="card-text">
                                                <strong>文章标签：</strong>
                                                @foreach($post->tags as $tag)
                                                    <span>
                                                        {{ $tag->name }}
                                                    </span>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <h3 class="mt-5">用户视频</h3>
                <div class="row">
                    @foreach($videos as $video)
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ $video->image->url }}" class="card-img" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $video->title }}</h5>
                                            <h6 class="card-subtitle text-munted">
                                                <strong> 分类：</strong>{{ $video->category->name }}<br>
                                                <strong>评论总数：</strong>{{ $video->comments_count }}
                                            </h6>
                                            <p class="card-text">
                                                <strong>视频标签：</strong>
                                                @foreach($video->tags as $tag)
                                                    <span>
                                                        {{ $tag->name }}
                                                    </span>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer">底部</div>
        </div>
    </div>
</div>
</body>
</html>
