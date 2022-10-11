<?php 
include ("nav.html");

//$con = mysqli_connect("localhost","root","","Live_stock");



//echo "$row1[0]";
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Home</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords"
        content="OP Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- //Meta tags -->
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link href="css/style.css" rel='stylesheet' type='text/css' />

    <!-- //Stylesheet -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
    <!--//fonts-->
</head>

<body>

    <!--background-->
    <h3 class="sub-heading-agileits">LIVE STOCK</h3>
    <div id="content">
        <div class="content-1">
            <div class="register-form-w3layouts">
                <!-- Form starts here -->
                <form action="#" method="post" enctype="multipart/form-data">
                    <h3 class="sub-heading-agileits">Cost</h3>
                    <div class="main-flex-w3ls-sectns">
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="main-flex-w3ls-sectns">
                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <label> Animal Names</label>
                            <select class="form-control" name="Animal">
                                <option>Select Animal</option>
                                <option>Cow</option>
                                <option>Goat</option>
                                <option>Camel</option>
                            </select>
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <label> Animal Id</label>
                            <select class="form-control" name="Animal">
                                <option>Select ID</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                    </div>
                    <div class="main-flex-w3ls-sectns">
                        <div class="field-agileinfo-spc form-w3-agile-text1">
                            <input class="field" name="Tag" required="required" type="text"
                                placeholder="Purchase Price" />
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text1">
                            <input class="field" name="Tag" required="required" type="text"
                                placeholder="Purchase Transportation" />
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text1">
                            <input class="field" name="Tag" required="required" type="text"
                                placeholder="Purchase Commission" />
                        </div>



                    </div>
                    <div class="main-flex-w3ls-sectns">
                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <label> Sale Commission </label><br>
                            <input class="field" name="Age" required="required" type="number"
                                placeholder="Sale Commission " />
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text1">
                            <label> Medicine Cost </label><br>
                            <input class="field" name="Tag" required="required" type="text"
                                placeholder="Medicine Cost " />
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text1">
                            <label> Misc Cost</label><br>
                            <input class="field" name="Tag" required="required" type="text" placeholder="Misc Cost" />
                        </div>



                    </div>

                    <div class="main-flex-w3ls-sectns">
                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <label> Total Feed </label><br>
                            <input class="field" name="Age" required="required" type="number"
                                placeholder="Total Feed " />
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <label> Other</label><br>
                            <input class="field" name="Age" required="required" type="number" placeholder="Other" />
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text1">
                            <label> Total Cost</label><br>
                            <input class="field" name="Tag" required="required" type="text" placeholder="Total Cost" />
                        </div>



                    </div>

                    <input type="submit" value="Submit" name="submit" />

                    <div class="clear"></div>
                </form>
                <!--// Form starts here -->


            </div>
        </div>
    </div>
    <!--copyright-->

    <!--//copyright-->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <!-- Calendar Js -->
    <script src="js/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
    });
    </script>
    <!-- //Calendar Js -->


    <table class="table table-bordered">

        <?php  
                /*$query = "SELECT * FROM soft";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="upload/'.($row['image'] ).'" height="200" width="200" class="img-thumnail" />  
                                    <embed src="upload/'.($row['image'] ).'" height="200" width="200" class="img-thumnail" />
                                    
                               </td>  
                          </tr>  
                     ';  
                }  */
                ?>
    </table>



</body>

</html>
<script>
$(document).ready(function() {
    $('#insert').click(function() {
        var image_name = $('#image').val();
        if (image_name == '') {
            alert("Please Select Image");
            return false;
        } else {
            var extension = $('#image').val().split('.').pop().toLowerCase();
            if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg', 'wmv', 'mp4']) == -1) {
                alert('Invalid Image File');
                $('#image').val('');
                return false;
            }
        }
    });
});
</script>