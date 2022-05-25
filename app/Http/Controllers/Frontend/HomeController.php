<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Repositories\ContactRepository;
use http\Env\Response;
use Illuminate\Http\Request;
use Mockery\Exception;

class HomeController extends Controller
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;

    }

    public function index()
    {

    }

    public function welcome(){

        return view('frontend.welcome');
    }

    public function contact(){

        return view('frontend.contact');
    }

    public function contactStore(Request $request){

        $inputs = $request->post();
        try {
            $this->contactRepository->store($inputs);
            return view('frontend.contact')->with(["status"=>"success", "message"=>"Votre message a été envoyé avec succès"]);
        }catch (Exception $e){
            //dd($e->getMessage());
            return view('frontend.contact')->with(["status"=>"failure", "message"=>"Une erreur s'est produite"]);
        }

    }


    public function aboutUs(){

    }
}
