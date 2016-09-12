<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 12/09/2016
     * Time: 10:51
     */

    namespace App\Http\Controllers;

    use App\Repositories\PostRepository;
    use Illuminate\Support\Facades\Redirect;

    class PostsController extends Controller
    {
        private $post;

        public function __construuct(PostRepository $post)
        {
            $this->post = $post;
        }

        public function index($post_id)
        {
            $posts = $this->post->getPostById($post_id);
            dd($posts);

            return Redirect::route('posts');
        }

        public function createView()
        {
            return view('posts');
        }

        public function serviceNewPost(Request $request)
        {
            $this->validate(
                $request, [
//          TODO: Request builder or ORM for postsList
                        ]
            );
        }
    }