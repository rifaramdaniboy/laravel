<?php
use App\Crud;
use Iluminate\Database\Seeder;
use illuminate\support\Str;

class Crudseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $no=2;
        for ($i=0 ; $i < $no ; $i++){
        $crud = new Crud();
        $crud->judul ='Beternak Lele seri ke -'. $i;
        $crud->slug = Str::slug($crud->judul,'-');
        $crud->deskripsi ="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $crud->sinopsis =Str::limit($crud->deskripsi,50);
        $crud->save();
        }
    }
}
