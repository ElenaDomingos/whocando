<?php include('header.php'); ?>
<script src="styles/jquery-1.11.1.min.js"></script>
<script src="styles/jquery.fs.selecter.min.js"></script>
<link rel="stylesheet" href="styles/jquery.fs.selecter.1.css" />
<script>
		$(document).ready(function() {
            $("#businesstype").selecter({
				customClass: 'select-reg_1',
				label: "TYPE OF SERVICE LINE *"
			 
				 
				
			});

            $("#category").selecter({
				customClass: 'select-reg_1',
				label: "BUSINESS CATEGORIES *"
			 
				 
				
			});

             $("#horas").selecter({
				customClass: 'time',
				label: "6 am"
			 
				 
				
			});

            $("#horas1").selecter({
				customClass: 'time',
				label: "6 am"
			 
				 
				
			});
            $("#horas2").selecter({
				customClass: 'time',
				label: "6 am"
			 
				 
				
			});
            $("#horas3").selecter({
				customClass: 'time',
				label: "6 am"
			 
				 
				
			});

            $("#horas5").selecter({
				customClass: 'time',
				label: "6 am"
			 
				 
				
			});

            $("#horas6").selecter({
				customClass: 'time',
				label: "6 am"
			 
				 
				
            });
            
            $("#horas7").selecter({
				customClass: 'time',
				label: "6 am"
			 
				 
				
            });
            
            $("#horas8").selecter({
				customClass: 'time',
				label: "6 am"
			 
				 
				
            });
            
            $("#horas9").selecter({
				customClass: 'time',
				label: "6 am"
			 
				 
				
            });
            
            $("#horas10").selecter({
				customClass: 'time',
				label: "6 am"
			 
				 
				
			});

            $("#country").selecter({
				customClass: 'select-reg',
				label : "Province"
			 
				 
				
			});

			$("#city").selecter({
				customClass: 'select-reg',
				label: "City"
			 
				 
				
			});

            $("#payment").selecter({
				customClass: 'select-reg',
				label: "PAYMENT MODE"
			 
				 
				
			});
            
            $("#lang").selecter({
				customClass: 'select-reg',
				label: "LANGUAGE"
			 
				 
				
			});


       });


        </script>
<div class="banner1">
<h3>Create your ads free</h3>
<p id="bannerp">Make it easier for more customers to find you</p>

</div>

<div class="gradient">
    <div class="contant">
            <div class="leftone">
            <h5>Terms of services</h5>
            <p>Terms of services</p>

            <p><i class="fas fa-edit"></i><span>Terms of service</span></p>
            <p><i class="fas fa-heart"></i><span>Terms of service</span></p>
            <p><i class="fas fa-share-square"></i><span>Terms of service are mentioned here</span></p>
            </div>


            <div class="rightone1">
            <p id="regpage">WHO ARE YOU?</p>
            <input   type="radio" name="whoareyou" value="client" id="clientchecked"/><span id="left"> PERSON </span>
            <input  type="radio" name="whoareyou" value="contractor"  id="contractorchecked"  checked="checked" /><span> BUSINESS</span>
            <div id="contractor">
    </br>
            <h5 id="info">BUSINESS INFO</h5>
                        <form action='#' method='POST' style="width:610px;" enctype="multipart/form-data">
                        
                        <select id="businesstype" name="typeofindustry" required>
                                            
                                            <option value="independent">Independent</option>
                                            <option value="contractor">Contractor</option>
                                            <option value="business">Business</option>
                        </select>

                        <span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-10"  name="business_name" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-10">
						<span class="input__label-content input__label-content--hoshi">BUSINESS NAME *</span>
					</label>
            </span></br>
            <span style="color:#616161;" class="busilogo"> BUSINESS LOGO </span><span style="float:right;font-size:12px;color:#616161;position:relative;top:40px;"> JPG, GIF and PNG only.</span>

            <input type="file" name="file" class="inputfile"  />
            <label for="file"> </label></br>
            <label for="description" style="margin-top:16px;">BUSINESS DESCTRIPTION *</label>
            <textarea type="text" rows="4"   id="description" name="description" required style="margin-top:16px;" /></textarea>

            

            <select id="category" name="typeofindustry" required>
                                            
                                            <option value="independent">Independent</option>
                                            <option value="contractor">Contractor</option>
                                            <option value="business">Business</option>
                        </select>

            <span style="color:#616161;" class="busilogo"> ADD PICTURE </span><span style="float:right;font-size:12px;color:#616161;position:relative;top:40px;">Add up to six pictures and drag to rearrange them. JPG, GIF and PNG only.</span>
            <input type="file" name="file" class="inputfile" data-multiple-caption="{count} files selected" multiple  />
            <label for="file"> </label>

            <div class="in-line-2">
			<select id="payment" name="payment">
				<option value="canada">Credit Card</option>
				<option value="usa">PayPal</option>
				 
			</select>
			
			<select  id="lang" name="lang">
				<option value="independent">English</option>
				<option value="contractor">French</option>
				 
			</select>
            </div> 

            <span style="margin-right:308px;"> WORKING HOURES * </span> <input type="checkbox" name="useeveryday" /><label for="useeveryday" style="font-size:12px;">Use same time everyday</label>
                    <div class="horario">
                    <div class="days">
                        <input type="checkbox" name="Mondey" /><label for="Monday">Monday</span></br>
                        <input type="checkbox" name="Tuesday" /><label for="Tuesday">Tuesday</span></br>
                        <input type="checkbox" name="Wednesday" /><label for="Wednesday">Wednesday</span></br>
                        <input type="checkbox" name="Thursday" /><label for="Thursday">Thursday</span></br>

                    </div>

            <div class="container"  >
            <div class="houres">
            
                    <select id="horas">
                    <?php for($time=6;$time<=12;$time++){
                    echo '<option value='. $time . 'am' .'>'.$time . ' am </option>';
                    }
                    for($time=1;$time<=12;$time++){
                        echo '<option value='. $time . 'pm' .'>'.$time . ' pm </option>';
                    }
                    ?>
                    </select> 

                    <span> : </span>

                    <select id="horas1">
                    <?php for($time=6;$time<=12;$time++){
                    echo '<option value='. $time . 'am' .'>'.$time . ' am </option>';
                    }
                    for($time=1;$time<=12;$time++){
                        echo '<option value='. $time . 'pm' .'>'.$time . ' pm </option>';
                    }

                    ?>
                               
                    </select> 
   
            </div>       


            <div class="houres">
            
                <select id="horas5">
                <?php for($time=6;$time<=12;$time++){
                echo '<option value='. $time . 'am' .'>'.$time . ' am </option>';
                }
                for($time=1;$time<=12;$time++){
                    echo '<option value='. $time . 'pm' .'>'.$time . ' pm </option>';
                }
                ?>
                </select> 

                <span > : </span>

                <select id="horas6">
                <?php for($time=6;$time<=12;$time++){
                echo '<option value='. $time . 'am' .'>'.$time . ' am </option>';
                }
                for($time=1;$time<=12;$time++){
                    echo '<option value='. $time . 'pm' .'>'.$time . ' pm </option>';
                }

                ?>
                        
                </select> 

            </div>       

            <div class="houres">
            
            <select id="horas7">
            <?php for($time=6;$time<=12;$time++){
            echo '<option value='. $time . 'am' .'>'.$time . ' am </option>';
            }
            for($time=1;$time<=12;$time++){
                echo '<option value='. $time . 'pm' .'>'.$time . ' pm </option>';
            }
            ?>
            </select> 

            <span  > : </span>

            <select id="horas8">
            <?php for($time=6;$time<=12;$time++){
            echo '<option value='. $time . 'am' .'>'.$time . ' am </option>';
            }
            for($time=1;$time<=12;$time++){
                echo '<option value='. $time . 'pm' .'>'.$time . ' pm </option>';
            }

            ?>
                    
            </select> 

        </div>      

        <div class="houres">
            
            <select id="horas9">
            <?php for($time=6;$time<=12;$time++){
            echo '<option value='. $time . 'am' .'>'.$time . ' am </option>';
            }
            for($time=1;$time<=12;$time++){
                echo '<option value='. $time . 'pm' .'>'.$time . ' pm </option>';
            }
            ?>
            </select> 

            <span  > : </span>

            <select id="horas10">
            <?php for($time=6;$time<=12;$time++){
            echo '<option value='. $time . 'am' .'>'.$time . ' am </option>';
            }
            for($time=1;$time<=12;$time++){
                echo '<option value='. $time . 'pm' .'>'.$time . ' pm </option>';
            }

            ?>
                    
            </select> 

        </div>      
    </div> <!--div container-->  



                     
                    <div class="days">
                    <input type="checkbox" name="Mondey" /><label for="Monday">Friday</span></br>
                        <input type="checkbox" name="Tuesday" /><label for="Tuesday">Sarurday</span></br>
                        <input type="checkbox" name="Wednesday" /><label for="Wednesday">Sunday</span></br>
                    </div>

                    <div class="container"  >
                    <div class="houres">
                    <select id="horas2">
                    <?php for($time=6;$time<=12;$time++){
                    echo '<option value='. $time . 'am' .'>'.$time . ' am </option>';
                    }
                    for($time=1;$time<=12;$time++){
                        echo '<option value='. $time . 'pm' .'>'.$time . ' pm </option>';
                    }
                    ?>
                    </select> 
                      
                    <span style="margin-left:20px;margin-right:15px;"> : </span>

                    <select id="horas3">
                    <?php for($time=6;$time<=12;$time++){
                    echo '<option value='. $time . 'am' .'>'.$time . ' am </option>';
                    }
                    for($time=1;$time<=12;$time++){
                        echo '<option value='. $time . 'pm' .'>'.$time . ' pm </option>';
                    }
                    ?>
                    </select>   

                    </div>
                    </div> <!--div container--> 
            </div>

            <h5 id="info" style="margin-top:25px;">ADDRESS</h5>

            <div class="in-line">
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" required name="first_name" id="input-9" style="width:190px !important;" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-9">
						<span class="input__label-content input__label-content--hoshi">POSTAL CODE *</span>
					</label>
            </span>
			<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-10" name="last_name" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-10">
						<span class="input__label-content input__label-content--hoshi">BUSINESS ADDRESS *</span>
					</label>
            </span></br>
			
			</div>
            
            <div class="in-line-2">
			<select id="country" name="province">
				<option value="canada">Quebec</option>
				<option value="usa">Ontário</option>
				 
			</select>
			
			<select  id="city" name="city">
				<option value="independent">Willmington</option>
				<option value="contractor">Folcroft</option>
				<option value="business">New York</option>
			</select>
			</div> 

            <h5 id="info" style="margin-top:25px;">CONTACT INFO</h5>

                        </form>
            </div>
    </div></div>
</div>

<?php include('footer.php'); ?>