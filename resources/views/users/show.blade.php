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
            <div class="card-header">
                <div class="row">
                    <div class="col-12 my-3 pt-3 shadow">
                        <img src="{{ $user->image->url }}" class="float-start rounded-circle mr-5" width="100" alt="">
                        <h4>姓名：{{ $user->name }}</h4>
                        <h4>邮件：{{ $user->email }}</h4>
                        <hr>
                        <p>
                            <h5>用户级别：
                                <span class="text-orange">
                                    @if ($user->level)
                                        <a href="#">{{ $user->level->name }}</a>
                                    @else
                                        暂无
                                @endif
                                </span>
                            </h5>
                        </p>
                        <p>
                            <h5>其他信息</h5>
                            <strong>网址：</strong> {{$user->profile->url}}<br>
                            <strong>身高：</strong> {{$user->profile->height}} cm<br>
                            <strong>性别：</strong> {{$user->profile->gender}}<br>
                        </p>
                        <hr>
                        <p>
                            <h5>用户组:
                                @forelse($user->groups as $group)
                                    <span class="text-primary">{{ $group->name }}</span>
                                @empty
                                    <em>no groups</em>
                                @endforelse
                            </h5>

                        </p>
                    </div>
                </div>
            </div>
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
                                                所欲分类：{{ $post->category->name }} |
                                                评论总数：{{ $post->comments_count }}
                                            </h6>
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
                                                分类：{{ $video->category->name }} |
                                                评论总数：{{ $video->comments_count }}

                                            </h6>
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
