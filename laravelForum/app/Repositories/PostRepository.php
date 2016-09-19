<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 13/09/2016
     * Time: 16:17
     */

    namespace App\Repositories;


    use App\Post;
    use Bosnadev\Repositories\Eloquent\Repository;
    use Illuminate\Support\Facades\DB;

    class PostRepository extends Repository
    {
        public function model()
        {
            return 'App\Post';
        }

        public function ViewPostById($id)
        {
//            ORM
//            return Post::find($id);

//            QueryBuilder (Jointure)
            return DB::table('posts')
                     ->join('users', 'users.id', '=', 'posts.user_id')
                     ->where('posts.id', $id)
                     ->select('posts.*', 'users.name')
                     ->get();

//            return $this->find($id);

        }
    }