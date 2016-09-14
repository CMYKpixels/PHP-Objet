<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 12/09/2016
     * Time: 10:51
     */

    namespace App\Http\Controllers;

    use App\Post;
    use App\Repositories\PostRepository;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\Route;


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
            $post_view = $this->post->ViewPostById($id);
//            dd($post_view);

            return Redirect::route('/viewPost', ['id'=>$post_view]);
        }

        
        public function serviceNewPost(Request $request)
                {
                    $this->validate(
                        $request, [
//          TODO: Request builder or ORM for posts List
                                ]
                    );
                }

    }