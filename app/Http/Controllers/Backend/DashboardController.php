<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $contactRepository;
    public function __construct(ContactRepository $contactRepository){
        $this->contactRepository = $contactRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = count($this->contactRepository->getAll());
       
        return view('backend.dashboard', compact('contacts'));
    }


}
