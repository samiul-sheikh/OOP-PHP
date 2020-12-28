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
                

		    	<?php

                    /*

		    		class Person{

                        public $name = "Samiul Sheikh";
                        public $age;

                        public function personName(){

                        }

                        public function personAge(){

                        }
                    }

                    $personOne = new Person;
                    echo $personOne->name;

                    */

                    class Person{

                        public $name;
                        public $age;

                        public function personName(){
                            echo "person name is : ".$this->name."<br/>";

                        }

                        public function personAge($value){
                            echo "person age is : ".$this->age=$value;

                        }
                    }


                    $personOne = new Person;
                    $personOne -> name = "samiul sheikh";
                    $personOne -> personName();

                    $personOne->personAge("18");

    			?>

    		</section>


        	<section class="footer">

                <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>

        	</section>


    	</div>


    </body>

</html>