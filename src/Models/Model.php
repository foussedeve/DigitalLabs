<?php 
namespace Digital\Models;
use PDO;
class Model{


   protected $db_connexion;
   /**
    * use pdo to connect in database and return one instance of po
    * @return $db_connexion instance of pdo 
    */
       protected function getPdo(){
          if($this->db_connexion==null){
              $this->db_connexion=new PDO(DNS,DB_USER,DB_PASSWORD,OPTIONS);
          }
          return $this->db_connexion;
       }
       /**
        * prepare and execute requete 
        *@param $params params use to execute requet
        * @param $sql requete sql
        *@return $req pdostadment or null
        * 
        */
       public function executeReq($sql,$params=null){
           $pdo=$this->getPdo();
           $req=$pdo->prepare($sql);
           if($req->execute($params)){
            //$this->db_connexion=null; 
            return $req;
           }
           return null;
       }

        /**
       * select all in the table $table
       * @param $limit string
       * @param $table string
       * @return array of stdclass or null
       */
      public function getAll($table,$limit=null){
        $sql=" SELECT * FROM ".$table;
         if ($limit) {
            $sql.=" LIMIT".$limit;
         }
         $sql .=" ORDER BY id DESC";
         $req=$this->executeReq($sql);
         if ($req) {
           $req->setFetchMode(PDO::FETCH_OBJ);
           return $req->fetchAll();
         }
         return null;

     }

      /**
       * select one by $id in table $table 
       * @param $id int
       * @param $table string
       * @return  object of stdclass
       */
      public function getById($id,$table){
        $sql="SELECT * FROM $table WHERE  $table.id=:id";
        $params=array(
           "id"=>$id
        );
        $req=$this->executeReq($sql,$params);
        if ($req) {
           $req->setFetchMode(PDO::FETCH_OBJ);
           return $req->fetch();
         }
         return null;

     }
     /**
      * set data in database
      *@param
      */

}