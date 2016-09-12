<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 06/09/2016
     * Time: 13:44
     */

    namespace app\Repositories;

    use App\Painting;
    use Bosnadev\Repositories\Eloquent\Repository;
    use Illuminate\Support\Facades\DB;

    class PaintingRepository extends Repository
    {
        public function model()
        {
            return 'App\Painting';
        }

        public function myRepoMethod()
        {
            echo 'ma methode pour les Repositories';
            die();
        }

        public function getPaintingById($id)
        {
            //ORM (Utilise des méthodes standards)
            return Painting::find($id);
            //Query Builder (Jointure et paramètres sont personnalisable)
            return DB::table('paintings')->join('users', 'user.id', '=', 'paintings.user.id')->where('pantings.id', $paintingid)->select('paintings.*', 'users.username')->get();

            return $this->find($id);
        }
    }