<main class="catalog  mb ">
          
            <div class="boxleft">
                 <div class="banner">
                    <img id="banner" src="./img/anh0.jpg" alt="">
                    <button class="pre" onclick="pre()">&#10094;</button>
                    <button class="next" onclick="next()">&#10095;</button>
                 </div>
            
            <div class="items">
            <?php
                //nội dung 
                    $i = 0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $hinh =$img_path.$img;
                        $linksp ="index.php?act=sanphamct&idsp=".$id;
                        if($i==2 || $i==5 || $i==8){
                            $mr = "";
                        }else{
                            $mr = "mr";
                        }
                        echo '<div class="box_items '.$mr.'">
                                    <div class="box_items_img">
                                    <a href="'.$linksp.'"> <img src="'.$hinh.'" > </a>
                                    </div>
                                    <a class="item_name" href="">'.$name.'</a>
                                    <p class="price">'.$price.'</p>      
                                    <a href="'.$linksp.'">ADD TO CART</a>                             
                             </div>';
                             $i+=1; 
                    }
                ?>       
             </div>
      </div>
            <div class="boxright">
                    <?php
                      include "boxright.php";
                    ?>
            </div>
           
        </main>
         <!-- BANNER 2 -->
        
        <!-- FOOTER -->
    
    </div>