<?php 


namespace App\Http\Controllers;

use Session;
use File;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\AdminModel;
use App\Http\Controllers\Controller;



class PostController extends Controller
{
    
    public function __construct()
    {
        $this->AdminModel = new AdminModel();
    	$this->middleware('auth');
    }

    public function dashboard()
    {
         return view('admin/dashboard');
    }

    public function list_blogs(Request $request)
    {       
        return view('admin/blog/list_blog');  
    }

    public function add_blog()
    {
         return view('admin/blog/add_blog');
    }

    public function upload_blogs(Request $request)
    {
       
        $this->validate($request,[
            'photo' => 'image|mimes:jpeg,png,jpg,svg|max:500',
            'title' => 'required|max:50',
            'content' => 'required'
        ]);

        $file = $request->file('photo');

        if($request->hasFile('photo'))
        {
            $destinationPath = 'uploads';
            $original_name = strtolower(trim($file->getClientOriginalName()));
            $filename = time().rand(100,999).$original_name;
            $file->move($destinationPath,$filename);
        
            $dataArray =  array(
                "image"           =>      $filename,
                "title"    =>      $request->title,
                "content"   =>      $request->content
            );
           
           
            $result= $this->AdminModel->insert_data('posts',$dataArray);

            if ($result) 
            {
                return back()->with('success', 'Record Added Successfully!!!');
            }
            else
            { 
                return back()->with('danger', 'Error !!! Please try again later.');
            }
        }
    }

    public function edit_blog($id=null){
		if(!empty($id)){
			$condition = array('id' => $id,'flag' => 'N');
			$data['details'] = $this->AdminModel->get_selected_data('posts',$condition);

			return view('admin/blog/edit_blog',$data);
		}else
		{
			return back();
		}
	}

    public function update_blog(Request $request)
    {
        // print_r($request);
        $this->validate($request,[
            'new_photo' => 'image|mimes:jpeg,png,jpg,svg|max:500',
            'title' => 'required|max:50',
            'content' => 'required'
        ]);

        if($request->hasFile('new_photo'))
        {
            $file = $request->file('new_photo');
            // $filename = $file->getClientOriginalName();
            // $realpath = $file->getRealPath();
            $destinationPath = 'uploads';
            $original_name = strtolower(trim($file->getClientOriginalName()));
            $filename = time().rand(100,999).$original_name;
            $file->move($destinationPath,$filename);
        }else{
            $filename = $request->get('photo');
        }
        
            $dataArray =  array(
                "image"           =>      $filename,
                "title"    =>      $request->title,
                "content"   =>      $request->content
            );
            // print_r($dataArray);
            $id = $request->input('id');
			$find = array('id' => $id);
                     
            $result=$this->AdminModel->update_data('posts',$find,$dataArray);

            if ($result) 
            {
                return back()->with('success', 'Record Added Successfully!!!');
            }
            else
            { 
                return back()->with('danger', 'Error !!! Please try again later.');
            }
        
    }

    public function delete_records(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');
        if($status == 1){
            $flag = 'Y';
        }else{
            $flag = 'N';
        }
        $find = array('id' => $id);
        $data = array('flag' => $flag);
        $res = $this->AdminModel->update_data('posts',$find,$data);
        
        return back()->with('success', 'Record Deleted Successfully...!!!');
    }


    public function load_table(Request $request){
        
        
		$details = $this->AdminModel->get_all_data('posts');
        // print_r($details);

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($details);
        $perPage = 10;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        // $paginatedItems->setPath('/filter-data?type='.$type.'&value='.$value);
        $paginatedItems->setPath($request->url()); 

        return view('admin/blog/load_blogs')->with('details',$paginatedItems);

    }

   

   

}
?>