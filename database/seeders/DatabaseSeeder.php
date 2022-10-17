<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Group;
use App\Models\Image;
use App\Models\Level;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // 创建分类
        Category::factory(1)->create(['name'=>'PHP']);
        Category::factory(1)->create(['name'=>'GO']);
        Category::factory(1)->create(['name'=>'Vue']);
        Category::factory(1)->create(['name'=>'Docker']);

        // 创建用户组
        Group::factory()->createMany([
            ['name' => 'TX'],
            ['name' => 'JD'],
            ['name' => 'BD'],
            ['name' => 'DD'],
        ]);

        // 用户级别
        Level::factory()->createMany([
            ['name' => 'primary'],
            ['name' => 'unior'],
            ['name' => 'high'],
        ]);

        // 创建用户
        User::factory(10)->create()->each(function ($user) {
            // 创建用户对应的资料
            $profile = $user->profile()->save(Profile::factory()->make());

            // 用户与所属用户组中间表
            $user->groups()->attach($this->getRandNumber(rand(1, 4)));

            // 一个用户有一个头像
            $user->image()->save(Image::factory()->make());
        });

        // 创建标签
        Tag::factory(12)->create();

        // 创建文章
        Post::factory(100)->create()->each(function ($post) {
            // 文章评论
            $numberComment = rand(1, 50);
            for ($i = 0; $i < $numberComment; $i++) {
                $post->comments()->save(Comment::factory()->make());
            }

            // 一篇文章有一个封面图片
            $post->image()->save(Image::factory()->make());

            // 为文章添加标签
            $post->tags()->attach($this->getRandNumber(rand(1, 12)));
        });
        // 创建视频
        Video::factory(50)->create()->each(function ($video) {
            // 视频评论
            $numberComment = rand(1, 30);
            for ($i = 0; $i < $numberComment; $i++) {
                $video->comments()->save(Comment::factory()->make());
            }

            // 一个视频章有一个封面图片
            $video->image()->save(Image::factory()->make());

            // 为视频添加标签
            $video->tags()->attach($this->getRandNumber(rand(1, 12)));
        });
    }

    public function getRandNumber($number)
    {
        $values = [];

        for ($i = 1; $i < $number; $i++) {
            $values[] = $i;
        }

        return $values;
    }
}
