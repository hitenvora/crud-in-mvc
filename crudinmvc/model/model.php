<?php 
class model 
{
    public $connection="";
    public function __construct()
    {
        try 
        {
        $this->connection=new mysqli("localhost","root","","mvccrud");
      // echo "conntection succesfully";
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->connection));
            echo "conntection failed";
        }

    }   

//insert all data
public function insartalldata($data,$table)
{
    $column=array_keys($data);
    $column1=implode(",",$column);

    $value=array_values($data);
    $value1=implode("','",$value);


  $insert="insert into $table($column1) values('$value1')"; 
    $exe=mysqli_query($this->connection,$insert);
    return $exe;
    
}
  // fetch all data create a member functions
  public function selectalldata($table)
  {
   $select="select * from $table"; 
      $exe=mysqli_query($this->connection,$select);
      while($fetch=mysqli_fetch_array($exe))
      {
          $arr[]=$fetch;
      }
      return $arr;
  }

//delete data
public function deletedata($table,$id)
{
  $column=array_keys($id);
  $column1=implode(",",$column);

$value=array_values($id);
$value1=implode("','",$value);

$delete="delete from $table where $column1='$value1'"; 
$exe=mysqli_query($this->connection,$delete);
return $exe;


}

public function updatedata($tabel,$nm,$em,$ph,$column,$id)
{
  $update="update $tabel set name='$nm',email='$em',phone='$ph' where $column='$id'";
  $exe=mysqli_query($this->connection,$update);
  return $exe;
}





public function showdata($table,$column,$id)
{
 $select="select * from $table where $column='$id'"; 
  $exe=mysqli_query($this->connection,$select);
  while($fetch=mysqli_fetch_array($exe))
  {
    $arr[]=$fetch;

  }
  return $arr;
}



}
?>



