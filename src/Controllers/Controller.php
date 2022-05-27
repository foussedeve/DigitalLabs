<?php 
namespace Digital\Controllers;

use Digital\Models\FormManager;
use ImageUpload;

class Controller{





  /**
   * show first page of site
   * @return void
   */
  public function showIndex(){
     $this->load("index.php");

   }
   /**
    * show entreprise introduction
    *@return void
    */
    public function showIntro(){
      $this->load("agency.php");
    }
    /**
     * show web developpemnt services
     * @return void
     * 
     */
    public function showDevServices(){

      $this->load("dev_services.php");
    }
      /**
     * show web developpemnt services
     * @return void
     * 
     */
    public function showMarketServices(){

      $this->load("market.php");
    }
      /**
     * show web developpemnt services
     * @return void
     * 
     */
    public function showContact(){

      $this->load("contact.php");
    }
    /**
     * shox adminer
     * @return void
     */
    public function showAdminer(){
      $this->load("Dashbord/adminer.php");
    }
    /**
     * set devis data in database
     * @return void
     */
     public function insertDevisData(){
        $data= $this->validData($_POST);
        //dump($data);
        //exit();
        if (is_array($data)) {
        $formManager=new FormManager();
        $result=$formManager->setData("projets", $data);
        if (is_null($result)) {
          $_SESSION["message"]="Echec de l'envoie de données, Veuillez reessayez s'ils vous plaît !";
        }
        $_SESSION["message"]=" Votre demande a bien été reçu. Nous contacterons dans moins de 24 heures !";
        }else{
          $_SESSION["message"]="Merci de bien vouloir remplir tous les champs !";
         
        }
        header("Location:".$_SERVER["HTTP_REFERER"]); 
     }
      /**
     * set message data in database
     * @return void
     */
    public function insertMessage(){
      $data= $this->validData($_POST);
      if (is_array($data)) {
      $formManager=new FormManager();
      $result=$formManager->setData("messages", $data);
      if (is_null($result)) {
        $_SESSION["message"]="Echec de l'envoie de données, Veuillez reessayez s'ils vous plaît !";
      }
      $_SESSION["message"]=" Votre demande a bien été reçu. Nous contacterons dans moins de 24 heures !";
      }else{
        $_SESSION["message"]="Merci de bien vouloir remplir tous les champs !";
      }
      header("Location:".$_SERVER["HTTP_REFERER"]); 
       
   }
   /**
    * load pagge with data
    *@param $file string file to load athp
    *@param $data mixed
    *@return void 
    */
    public function load($file,...$data){
        require VIEW_PATH.$file;
    }
    /**
     * upload images
     * @return void
     */
     public function uploader(){
       if (isset($_FILES['images']) AND !empty($_FILES['images']["tmp_name"][0])) {
       //dump($_FILES['images'],count($_FILES['images']["tmp_name"]));
       $image=new ImageUpload("img/works_images");
       $result=$image->uploadMany($_FILES['images']["tmp_name"],"png",400);
      //dump($result);
      if ($result) {
        echo "image enregistrez ";
      }else{
        echo " veuillez choisir des images svp";
      }
         
       }else{
         echo " veuillez choisir des images";
       }
       //("Location:".$_SERVER["HTTP_REFERER"]); 
     }
   /**
 * verify if data exist
 * @param post array
 * @return array
 */
public function validData($post){
  $data =array();
  foreach($post as $key=>$value){
    if (isset($value) AND !empty($value)) {
      $data[$key]=$value;
    }else{
      return null;
    }
  }
  return $data;
}


}
