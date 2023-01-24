<?php 
                              include 'database.php'; 
                                                         
                           $dash_ticket_query = "SELECT * from tickets";
                           $dash_ticket_query_run = mysqli_query($conn, $dash_ticket_query);
                           if($ticket_total = mysqli_num_rows($dash_ticket_query_run))
                           {
                            echo '<h4 class="mb-0"> '.$ticket_total.' </h4>';
                           }
                           else
                           {
                            echo '<h4 class="mb-0"> No Data </h4>';                      
                           }
                           ?>