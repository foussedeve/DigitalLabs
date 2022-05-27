<?php 
namespace Digital\Models;
class  FormManager extends Model{





     /**
      * set data in database
      *@param $table string table to insert data
      *@param $data to insert in database
      *@return pdostatement or null
      */

     public function setData($table,$data){
         if($table=="projets"){
         $sql="INSERT INTO projets (company_name, company_location, company_activity,company_projet, company_number, company_email,company_ceo_name,company_ceo_lastname) VALUES(:company_name,:company_location, :company_activity,:company_projet, :company_number, :company_email,:company_ceo_name,:company_ceo_lastname)";
         }else{
             $sql="INSERT INTO messages (username, email, message) VALUES(:username, :email, :message)";
         }
      $req=$this->executeReq($sql,$data);
     }






}