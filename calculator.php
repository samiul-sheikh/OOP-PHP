<!docttype html>
<html>
    <head>
        
        <title> OOP _ PHP </title>

        <style>

            body{font-family:verdana}

            .phpcoding{width:900px; margin: 0 auto; background:aliceblue;}

            .header, .footer{background:deepskyblue; color:white; text-align:center; padding:20px;}

            .header h2, .footer h2{margin:0}

            .maincontent{min-height:400px; padding:20px;}

            p{margin: 0}

        </style>

    </head>


    <body> 

    	<div class ="phpcoding">


    		<section class="header">

    			<h2> <?php echo "OOP - PHP" ?> </h2>

    		</section>


    		<section class="maincontent">


                <form action = "" method = "post">
                    <table>


                        <tr>
                            <td> Enter the first number : </td>
                            <td> <input type = "number" name = "number1"/> </td>
                        </tr>


                        <tr>
                            <td> Enter the second number : </td>
                            <td> <input type = "number" name = "number2"/> </td>
                        </tr>


                        <tr>
                            <td> </td>
                            <td> <input type = "submit" name = "Calculation" value = "calculate"> </td>
                        </tr>

                    </table>
                    
                </form>

                

		    	<?php

                    if(isset($_POST['Calculation'])){

                        $numOne = $_POST['number1'];
                        $numTwo = $_POST['number2'];

                        if(empty($numOne) or empty($numTwo)){
                            echo "<span style =color:red> Field must not be empty </span>";
                        }
                        else{

                            echo "First number is : ".$numOne."<br/>";
                            echo "Second number is : ".$numTwo."<br/>"."<br/>";

                            $cal = new Calculator();
                            $cal->add($numOne, $numTwo);
                            $cal->sub($numOne, $numTwo);
                            $cal->mul($numOne, $numTwo);
                            $cal->div($numOne, $numTwo);
                        }

                    }


    			?>


                <?php

                    class Calculator{

                        function add($a, $b){
                            echo "Summation is : ".($a+$b)."<br/>";
                        }


                        function sub($a, $b){
                            echo "Subtraction is : ".($a-$b)."<br/>";
                        }


                        function mul($a, $b){
                            echo "Multiplication is : ".($a*$b)."<br/>";
                        }


                        function div($a, $b){
                            echo "Division is : ".($a/$b)."<br/>";
                        }
                    }


                ?>

    		</section>


        	<section class="footer">

                <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>

        	</section>


    	</div>


    </body>

</html>