<?php

    namespace App\Http\Controllers;

    use App\Repositories\PaintingRepository;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Redirect;

    class PaintingsController extends Controller
    {
        private $painting;

        public function __construct(PaintingRepository $painting)
        {
            $this->painting = $painting;
        }

        public function index()
        {
            $paintings = $this->painting->getPaintingById(2);
            dd($paintings);

            //  dd = var_dump+die

            return Redirect::route('cherryPop');

//            return Redirect::to('newRoute');
//            die();
        }

        public function createView()
        {
            return view('form');
        }

        public function serviceNewPainting(Request $request)
        {
            $this->validate(
                $request, [
                            'email'   => 'required|unique:posts|max:255',
                            'comment' => 'required',
                        ]
            );
        }

        public function where()
        {
            return Redirect::route('rand',['id'=>3]);
//            equivalent
//            return redirect()->route('rand', ['id'=>3]);
        }
    }
