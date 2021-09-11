<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;
use Illuminate\Pagination\LengthAwarePaginator;
use Mail;

class HomeController extends Controller
{
    public function __construct()
    {
    	
    }

    public function index(Request $request)
    {
        $AdminModel = new AdminModel();	
		$condition = array('flag' => 'N');
		$posts = $AdminModel->get_selected_data('posts',$condition);
        // print_r($posts);


        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($posts);
        $perPage = 5;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url()); 
        return view('index')->with('posts',$paginatedItems);

    }

    

    
}
