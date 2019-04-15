
<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "db");  
	  $output1 = '';
      $output = '';  
	  $query1 = "  
           SELECT  Date, DO, PH, Temperature,Turbidity,WL FROM users  
           WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
	  
      $query = "  
           SELECT  avg(DO) as DO, avg(PH) as PH,avg(Temperature) as Temperature,avg(Turbidity) as Turbidity,avg(WL) as WL FROM users  
           WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      
	  
	  ////////////////Normal Filter start
	  
	  $result1 = mysqli_query($connect, $query1);  
      $output1 .= '  
           <table class="table table-bordered">  
                <tr>  
							   <th width="10%">Date</th>  
							    <th width="15%">Dissolved Oxygen(Mg/L)</th> 
                               <th width="10%">PH</th>  
                               <th width="10%">Temperature(°C)</th> 
							   <th width="10%">Turbidity(NTU)</th> 
								 <th width="10%">Water Level(%)</th> 
                </tr>  
      ';  
      if(mysqli_num_rows($result1) > 0)  
      {  
           while($row = mysqli_fetch_array($result1))  
           {  
                $output1 .= '  
                     <tr>  
					 
							   <td>'. $row["Date"] .'</td>  
                               <td>'. $row["DO"] .'</td>  
							   <td>'. $row["PH"] .'</td>
                               <td>'. $row["Temperature"] .'</td>
							   <td>'. $row["Turbidity"] .'</td> 
							   <td>'. $row["WL"] .'</td>
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output1 .= '  
                <tr>  
                     <td colspan="6">No Data Found</td>  
                </tr>  
           ';  
      }  
      $output1 .= '</table>';  
      echo $output1;  
	  
	  /////////////////Normal Filter end
	  
	  
	  
	  
	  
	  $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
							   
							    <th width="15%">Average Dissolved Oxygen(Mg/L)</th> 
                               <th width="10%">Average PH</th>  
                               <th width="10%">Average Temperature(°C)</th> 
							   <th width="10%">Average Turbidity(NTU)</th> 
								 <th width="12%">Average Water Level(%)</th> 
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
					 
							    
                               <td>'. $row["DO"] .'</td>  
							   <td>'. $row["PH"] .'</td>
                               <td>'. $row["Temperature"] .'</td>
							   <td>'. $row["Turbidity"] .'</td> 
							   <td>'. $row["WL"] .'</td>
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="6">No Data Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>
 

  
