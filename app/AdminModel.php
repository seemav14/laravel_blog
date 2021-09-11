<?php 
    

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    
    public function get_all_data($table)
    {
        $con = \DB::connection('mysql');       
        $data = $con->table($table)->orderBy('created_at', 'desc')->get();
        return $data;
    }
    
    public function get_filter_contacts($type,$value)
    {
        $con = \DB::connection('mysql');  
        // \DB::enableQueryLog();     
        $query = "Select * from contacts where flag='Y'";
        if($type == "name"){
            $query .= "and (first_name LIKE '%$value%' OR middle_name LIKE '%$value%' OR last_name LIKE '%$value%')";
        }

        if($type == "phone"){
            $query .= "and (mobile LIKE '%$value%' OR landline LIKE '%$value%')";
        }
        $data = $con->select($query);

        // dd(\DB::getQueryLog());
        return $data;
    }

    public function get_selected_data($table,$condition)
    {
        $con = \DB::connection('mysql');       
        $data = $con->table($table)->where($condition)->orderBy('created_at', 'desc')->get();
        return $data;
    }

     
    public function insert_data($table,$data)
    {
        $con = \DB::connection('mysql');       
        $data = $con->table($table)->insert($data);
        return true;
    }
    
    public function update_data($table,$find,$data)
    {
        $con = \DB::connection('mysql');       
        $data = $con->table($table)->where($find)->update($data);
        return $data;
    }
    
}

    
?>