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

		    		class userData{

                        public $userName;
                        public $userId;
                        const NAME = "Nayeem Sheikh";


                        public function __construct($username, $userid){
                            $this->userName = $username;
                            $this->userId   = $userid;

                            echo "Username is : {$this->userName} & Userid is : {$this->userId}";
                        }


                        public function display(){
                            echo "Full Name is : ".userData::NAME;
                        }


                        public function __destruct(){
                            unset($this->userName);
                            unset($this->userId);
                        }
                    }
                    

                    $usrname = "Nayeem";
                    $usrid   = "15-30491-3";

                    $user = new userData($usrname, $usrid);
                    echo "<br>";
                    $user->display();

    			?>

    		</section>


        	<section class="footer">

                <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>

        	</section>


    	</div>


    </body>

</html>