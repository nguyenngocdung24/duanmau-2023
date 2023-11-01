<main class="catalog  mb ">  
            <div class="boxleft">
            <div class="mb">    
                <div class="box_title">SẢN PHẨM <br><strong><?=$tendm ?></strong></div>
                <div class="box_content items">
                    <?php 
                            $i = 0;
                            foreach ($dssp as $sp) {
                                extract($sp);
                                $hinh =$img_path.$img;
                                $linksp ="index.php?act=sanphamct&idsp=".$id;
                                if($i==2 || $i==5 || $i==8 || $i==11){
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
            </div>
            <div class="boxright">
                    <?php
                        include "boxright.php";
                    ?>
            </div>         
        </main>
         <!-- BANNER 2 -->
        
    
    </div>