<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 12/09/2016
     * Time: 10:51
     */

    namespace App\Http\Controllers;

    use App\Post;
    use App\Http\Controllers\Auth\AuthController;
    use App\Repositories\PostRepository;
    use Illuminate\Support\Facades\Input;
    use Illuminate\Support\Facades\Redirect;


    class PostsController extends Controller
    {
        private $post;

        public function __construct(PostRepository $post)
        {
            $this->post = $post;
        }

        public function postList()
        {
            $postList = Post::all();

            return view('postList', ['postList' => $postList]);
        }


        public function viewPost($id)
        {
            $postList  = Post::all();
            $post_view = $this->post->ViewPostById($id);

//            dd($post_view);

            return view('post', ['post' => $post_view[0], 'postList' => $postList]);
        }


        public function serviceNewPost()
        {
//            $user_id = Auth::user()->id;
//            $postList  = Post::all();


            $post          = new Post();
            $post->user_id = Input::get('name');


            return Redirect::route('new_post');

        }

    }