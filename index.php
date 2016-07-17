
        <?php
        // put your code here
   
        
        
        function num_to_words($num){ 
    
            if (!is_numeric($num)){

                echo false;

                
            }

            if (is_numeric($num)){
    
// split the number and store it in an array
   
                $arraynumber=  str_split($num);
// find the count of digits on the number
    
                $lengthofnumber=  strlen((string)$num);
  // loop to convert every digit in the number

  
                for ($i = 0; $i < $lengthofnumber; $i++){
        
                 // check every number and convert to respective word
   
                    switch ($arraynumber[$i]){
    
                        case 0:
       
                            echo "Zero ";
        
                            break;
    
                        case 1:
       
                            echo "0ne ";
       
                            break;
    
                        case 2: 
       
                            echo "Two ";
       
                            break;
   
                        case 3:
        
                            echo "Three ";
       
                            break;
    
                        case 4:
   
                            echo "Four ";
     
                            break;
   
                        case 5:
     
                            echo "Five ";
       
                            break;
    
                        case 6:
      
                            echo "Six ";
      
                            break;
    
                        case 7:
     
                            echo "Seven ";
      
                            break;
    
                        echo "Eight ";
      
                        break;
    
                    case 9:
       
                        echo "Nine ";
    
                        break;
            
        
  
                    }
   


    
                    
                    }
   
       

                    
                    }

  
                    }
   
   
        ?>
