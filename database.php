<?php
class database{
    private $servername="172.31.22.43";
    private $username ="Aryan200520468";
    private $password="qR_BRXrnic";
    private $database="Aryan200520468";
    public $con;

    public function __construct(){
        $this->con= new mysqli($this->servername,$this->username,$this->password,$this->database);
        if(mysqli_connect_error()){
            trigger_error("Failed to connect: " . mysqli_connect_error());
        }else{
            return $this->con;
        }
    }
    //Insert Function
  public function insertData($post){
    $name = $this->con->real_escape_string($_POST['name']);
    $email = $this->con->real_escape_string($_POST['email']);
    $age = $this->con->real_escape_string($_POST['age']);
    $phone = $this->con->real_escape_string($_POST['phone']);
    $bio = $this->con->real_escape_string($_POST['bio']);
    $query="INSERT INTO info(name,email,age,phone,bio) VALUES ('$name','$email','$age','$phone','$bio')";
    $sql =$this->con->query($query);
    if($sql == true){
        header("Location:index.php?msg1=insert");
    }else{
        echo "Record could not be added";
    }
  }  
  public function displayData(){
    $query ="SELECT * FROM info";
    $result=$this->con->query($query);
    if($result->num_rows>0){
        $data=array();
        while($row=$result->fetch_assoc()){
            $data[]=$row;
        }
        return $data;
  }else{
    echo"No records found";
      }
    }
    public function displayRecordById($id){
        $query="SELECT * FROM info WHERE id='$id'";
        $result=$this->con->query($query);
        if($result->num_rows>0){
            $row=$result->fetch_assoc();
        }else{
            echo"No record found";
        }
    }
    //update function
    public function updateRecord($postData){
        $name=$this->con->real_escape_string($_POST['uname']);
        $email=$this->con->real_escape_string($_POST['uemail']);
        $age=$this->con->real_escape_string($_POST['uage']);
        $phone=$this->con->real_escape_string($_POST['uphone']);
        $bio=$this->con->real_escape_string($_POST['ubio']);

        $id=$this->con->real_escape_string($_POST['id']);
        if(!empty($id) && !empty($postData)){
            $query="UPDATE info SET name='$name',email='$email',age='$age',phone='$phone', bio='$bio'  WHERE id='$id'";
            $sql= $this->con->query($query);
            if(($sql==true)){
                header("Location:index.php?msg2=update");
            }else{
                echo "Could not update the record";
            }
        }
    }
//Delete Function 
public function deleteRecord($id){
    $query="DELETE FROM info WHERE id='$id'";
    $sql=$this->con->query($query);
    if($sql==true){
        header("Location:index.php?msg3=delete");
    }else{
        echo "Could not delete the record";
    }
}
    
}

?>