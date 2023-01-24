<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "software");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM ticket";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>sno</th>  
                         <th>date</th>  
                         <th>institute</th>  
                         <th>name</th>
                         <th>ticketno</th>
                         <th>category</th>
                         <th>model</th>
                         <th>assetserialno</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>' . $row ["sno"] . '</td>
                         <td>' . $row ["date"] . '</td>
                         <td>' . $row ["institute"] . '</td>							    
                         <td>' . $row ["name"] . '</td>                                                    
                         <td>' . $row ["ticketno"] . '</td>
                         <td>' . $row ["category"] . '</td>
                         <td>' . $row ["model"] . '</td>
                         <td>' . $row ["assetserialno"] . '</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
