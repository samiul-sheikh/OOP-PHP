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

		    		class Student{

                        public $name;
                        public $dept;
                        public $id;


                        public function __construct($userName, $userDept){
                            $this->name = $userName;
                            $this->dept = $userDept;
                        }


                        public function studentDetails(){
                            echo "Student Name : {$this->name} & Student Department : {$this->dept}";
                        }


                        public function setId($userId){
                            $this->id = $userId;
                        }


                        public function __destruct(){
                            if(! empty($this->id)){
                                echo "Saving person";
                            }
                        }   
                    }

                        $studentOne = new Student("Sami", "SE");
                        $studentOne->studentDetails();
                        $studentOne->setId("20");
                        // unset($studentOne);

    			?>

    		</section>


        	<section class="footer">

                <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>

        	</section>


    	</div>


    </body>

</html>