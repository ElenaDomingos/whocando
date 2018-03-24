<?php include('header.php'); ?>
<script src="styles/jquery-1.11.1.min.js"></script>
<script src="styles/jquery.fs.selecter.min.js"></script>
<link rel="stylesheet" href="styles/jquery.fs.selecter.css" />

<script>


		$(document).ready(function(){
			$("#location").selecter({
				customClass: 'select_4',
				label: 'LOCATION'
				
			});

            $("#category").selecter({
				customClass: 'select_4',
				label: 'CATEGORY'
				
			});

			
        });

</script>

<?php 

$category = $_POST['keyword'];
$city = $_POST['city'];
$count = 4;
$img = "img/foto.jpg";
$countstar  = 2;

if($countstar == 1) {
    $stars = "img/1estrela.png";
}
else if($countstar == 2){
    $stars = "img/2estrelas.png";
}
else if($countstar == 3){
    $stars = "img/3estrelas.png";
}else if($countstar == 4) {
    $stars = "img/4estrelas.png";
}
else {
    $stars = "img/5estrelas.png";
}

$status = "Person";

$title_of_offer = "title of offer";

$description = "Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. Donec sit uat sapien. 
Praesent eget tincidunt lectus. Aenean quis quam nibh,
 a at libero vitae fauci bus p raesent eget tincidunt
  lectus. Aenean quis quam nibh, a at libero vitae fau
 cibu scons ectetur adipiscing elit."
?>

<body>
<section> 
    <div class="topsearch" >
        <?php 
        include('search.php');
        
        ?>
    </div>

    <div class="showresultsinfo" style=""> 

        <span id="found">Found <?php echo $count ?> results for </span><span id="keywordcategory"><?php echo $category ?> </span><span id="cityof">in the city of  <?php echo $city ?></span>
    </div>

    <div class="selectmore" >
       <span style="color:#1E8273;font-size:14px;position:relative;top:2px; ">ORDER BY: </span>
       <div class="dopsearch"  >
           <form action="#" method="post">
               <select name="location" id="location" >
                   <option value="Montreal">Montreal</option>
                   <option valur="Toronto">Toronto</option>
               </select>

               <select name="location" id="category">
                   <option value="Montreal">Plumber</option>
                   <option valur="Toronto">Electricion</option>
               </select>
           </form>
       </div>
    </div> <!--selectmore -->
</section>
<div class="maincontent"  >

    
    <div class="resultadosdapesquisa">  
    <div class="result">
            <div class="imagem">
                <img src=<?php echo $img ?>  width="273" height="180"/>
                <div class="rating">
                    <span style="color:#ccc;font-weight:bold;"><?php echo $countstar; ?>/5 </span> 
                    <img src=<?php echo $stars ?> width="70px" style="margin-left:10px;"/>
                    <span style="float:right;color:#fff;text-transform:uppercase;position:relative;right:10px;font-weight:bold;"><?php echo $status; ?></span>

                </div> <!--reiting-->
            </div> <!--imagem-->

                <div class="contentofresult">
                    <h2><?php echo $title_of_offer ?></h2>
                    <p class="description"><?php echo $description ?></p>

                            <div class="bottomresult">
                                <div class="splitbottom">
                                <img src="img/letter.png" style="position:relative;top:2px;" width="18"/>
                                <span>DETAIL</span></div>

                                <div class="splitbottom">
                                <img src="img/tel.png" style="position:relative;top:4px;" width="16"/>
                                <span>TELEPHON</span></div>

                                <div class="splitbottom">
                                <img src="img/www.png" style="position:relative;top:4px;" width="20"/>
                                <span>WEBSITE</span></div>

                                <div class="splitbottom">
                                <img src="img/como.png" style="position:relative;top:5px;" width="16"/>
                                <span style="position:relative;  ">HOW TO GET</span> 
                                </div>
                            </div><!--bottomresult-->
</div>
                 
             
    </div><!--result-->


    <div class="result">
            <div class="imagem">
                <img src=<?php echo $img  ?>  width="273" height="180"/>
                <div class="rating">
                    <span style="color:#ccc;font-weight:bold;"><?php echo $countstar=3; ?>/5 </span> 
                    <img src=<?php   echo $stars = "img/3estrelas.png" ?> width="70px"  style="margin-left:10px;"/>
                    <span style="float:right;color:#fff;text-transform:uppercase;position:relative;right:10px;font-weight:bold;"><?php echo $status="business"; ?></span>

                </div> <!--reiting-->
            </div> <!--imagem-->

                <div class="contentofresult">
                    <h2><?php echo $title_of_offer ?></h2>
                    <p class="description"><?php echo $description ?></p>

                            <div class="bottomresult">
                                <div class="splitbottom">
                                <img src="img/letter.png" style="position:relative;top:2px;" width="18"/>
                                <span>DETAIL</span></div>

                                <div class="splitbottom">
                                <img src="img/tel.png" style="position:relative;top:4px;" width="16"/>
                                <span>TELEPHON</span></div>

                                <div class="splitbottom">
                                <img src="img/www.png" style="position:relative;top:4px;" width="20"/>
                                <span>WEBSITE</span></div>

                                <div class="splitbottom">
                                <img src="img/como.png" style="position:relative;top:5px;" width="16"/>
                                <span style="position:relative;  ">HOW TO GET</span> 
                                </div>
                            </div><!--bottomresult-->
</div>
                 
             
    </div><!--result-->


    <div class="result">
            <div class="imagem">
                <img src=<?php echo $img ?>  width="273" height="180"/>
                <div class="rating">
                    <span style="color:#ccc;font-weight:bold;"><?php echo $countstar; ?>/5 </span> 
                    <img src=<?php echo $stars ?> width="70px" style="margin-left:10px;"/>
                    <span style="float:right;color:#fff;text-transform:uppercase;position:relative;right:10px;font-weight:bold;"><?php echo $status="business"; ?></span>

                </div> <!--reiting-->
            </div> <!--imagem-->

                <div class="contentofresult">
                    <h2><?php echo $title_of_offer ?></h2>
                    <p class="description"><?php echo $description ?></p>

                            <div class="bottomresult">
                                <div class="splitbottom">
                                <img src="img/letter.png" style="position:relative;top:2px;" width="18"/>
                                <span>DETAIL</span></div>

                                <div class="splitbottom">
                                <img src="img/tel.png" style="position:relative;top:4px;" width="16"/>
                                <span>TELEPHON</span></div>

                                <div class="splitbottom">
                                <img src="img/www.png" style="position:relative;top:4px;" width="20"/>
                                <span>WEBSITE</span></div>

                                <div class="splitbottom">
                                <img src="img/como.png" style="position:relative;top:5px;" width="16"/>
                                <span style="position:relative;  ">HOW TO GET</span> 
                                </div>
                            </div><!--bottomresult-->
</div>
                 
             
    </div><!--result-->


    <div class="result">
            <div class="imagem">
                <img src=<?php echo $img ?>  width="273" height="180"/>
                <div class="rating">
                    <span style="color:#ccc;font-weight:bold;"><?php echo $countstar; ?>/5 </span> 
                    <img src=<?php echo $stars ?> width="70px" style="margin-left:10px;"/>
                    <span style="float:right;color:#fff;text-transform:uppercase;position:relative;right:10px;font-weight:bold;"><?php echo $status; ?></span>

                </div> <!--reiting-->
            </div> <!--imagem-->

                <div class="contentofresult">
                    <h2><?php echo $title_of_offer ?></h2>
                    <p class="description"><?php echo $description ?></p>

                            <div class="bottomresult">
                                <div class="splitbottom">
                                <img src="img/letter.png" style="position:relative;top:2px;" width="18"/>
                                <span>DETAIL</span></div>

                                <div class="splitbottom">
                                <img src="img/tel.png" style="position:relative;top:4px;" width="16"/>
                                <span>TELEPHON</span></div>

                                <div class="splitbottom">
                                <img src="img/www.png" style="position:relative;top:4px;" width="20"/>
                                <span>WEBSITE</span></div>

                                <div class="splitbottom">
                                <img src="img/como.png" style="position:relative;top:5px;" width="16"/>
                                <span style="position:relative;  ">HOW TO GET</span> 
                                </div>
                            </div><!--bottomresult-->
</div>
             
             
    </div><!--result-->
</div><!--resultadosdapesquisa-->

 
</div> <!--maincontent-->





<?php include('menuverde.php'); ?>

<script>
		function Advancedsearch() {
           document.getElementById('topsearch').style.height='500px';
		   document.getElementById('desctop-home').style.display='flex';
		}
	</script>
<?php include('footer.php'); ?>