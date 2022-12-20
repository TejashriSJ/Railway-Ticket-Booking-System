<?php
$conn  = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"railway_reservation_system");
$query = "SELECT * FROM train";
$result = mysqli_query($conn,$query)  or die("fail to query database");
$row= mysqli_fetch_array($result);

$i=1;
$j=1;
$trains[0]='';
$dates[0]='';
do
{
  if(!($row['sourse']== $trains[$i-1]))
  {
    $trains[$i]=$row['sourse'];
    
    $i++;
  }
  
  if(!($row['date']== $dates[$j-1]))
  {
    $dates[$j]=$row['date'];
    $j++;
  }
}while($row=$result->fetch_assoc());
$html ='<form action="User-Book_ticket_2.php" method="post">
<p>
    <label>From city</label>
    <select name="source">
    <option value="null">select source</option>';
    $j=1;
    $size=count($trains)-1;

    while($size--)
    {
      $html .= '<option value="'.$trains[$j].'">'.$trains[$j].'</option>';
      $j++;

    }
    
    $html .=' </select>  </p>
    <p>
    <label>To city</label>
    <select name="destination">
    <option value="none">select destination</option>';
    $k=1;
    $size=count($trains)-1;
    while($size--)
    {
      $html .= '<option value="'.$trains[$k].'">'.$trains[$k].'</option>';
      $k++;
    }
    $html .=' </select>
    </p>
    <p>
        <label>Date:</label>
        <select name="date">
          <option value="none">select date</option>';
    $l=1;
    $size=count($dates)-1;
    while($size--)
    {
      $html .= '<option value="'.$dates[$l].'">'.$dates[$l].'</option>';
      $l++;
    }      
    $html .=' </select>
        <p>
            <label>No_of passengers:</label>
            <input type="number" name="passengers">
            <input type="radio" name="type" value="ac">AC</input>
            <input type="radio" name="type" value="sl">SL</input>
            <input type="radio" name="type" value="general">General</input>
        </p>
        <input type="submit" value="submit" />
</form>';
echo $html;      
?>






    
        
       
        

























