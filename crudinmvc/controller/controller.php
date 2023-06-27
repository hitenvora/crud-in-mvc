<?php
require_once("model/model.php");
error_reporting(0);

class controller extends model
{
    public function __construct()
    {
        parent:: __construct();
        
        if(isset($_POST["btn"]))
        {
            $nm=$_POST["fnm"];
            $em=$_POST["email"];
            $ph=$_POST["phone"];
            $data=array("name"=>$nm,"email"=>$em,"phone"=>$ph);
            $chk=$this->insartalldata($data,'mvcofcrud');
        if($chk)
        {
        echo "<script>
            alert('thanks adding for data')
            window.location='./';
            </script>";

        }


}
// show data
$seletdata=$this->selectalldata('mvcofcrud');
// delete data
if(isset($_GET["delete"]))
{
$deldata=$_GET["delete"];
$id=array("id"=>$deldata);
$chk=$this->deletedata('mvcofcrud',$id);
if($chk)
{
    echo "<script>
    alert('data delete Successfully')
    window.location='./';
    </script>";
}
}

if(isset($_POST["upd"]))
{
    $id=$_GET["edit"];
    $nm=$_POST["fnm"];
    $em=$_POST["em"];
    $ph=$_POST["ph"];
$chk=$this->updatedata('mvcofcrud',$nm,$em,$ph,'id',$id);
if($chk)
{
    echo "<script>
    alert('Your profile updated successfully')
    window.location='./';
    </script>";
}
}

$id=$_GET["edit"];
$shwlist=$this->showdata('mvcofcrud','id',$id);


if(isset($_SERVER["PATH_INFO"]))
{
    switch ($_SERVER["PATH_INFO"])
    {
        case '/':
    require_once("index.php");
    require_once("adddata.php");
    require_once("showdata.php");


break;

case '/update':
    require_once("update.php");


    
break;


default:
require_once("index.php");
// require_once("header.php");
break;

}
}
    }
}
$obj=new controller;
?>


