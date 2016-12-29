<?php
	/*
	*Class renders HTML output
	*/
	
	class HTMLrender{
    	
    	//public $var = 'a default value';
    	/*
		* <head> tag
    	*/
		public function openHTML(){
			include 'head.php';
		}

		/*
		* Nav and header text
		*/
		public function header(){
			include 'pagehead.php';
		}

		/*
		* Nav and header text
		*/
		public function openMain(){
			echo ' <main>

	<hr width="80%">
	
        <!--Main layout-->
        <div class="container">
            <div class="row">

                <!--Main column-->
                <div class="col-lg-8">';
		}

		/*
		* Main left close
		*/
		public function mainlClose(){
			echo '
				                </div><!--main left closing-->';
		}

		/*
		* Sidebar Open
		*/
		public function sbopen(){
			echo '
				<!-- right open -->
                <!--Sidebar-->
                <div class="col-lg-4">';
		}

		/*
		* Login widget for sidebar
		*/
		public function loginwidget(){
			include 'login.php';
		}

		/*
		* Updates and news widget
		*/
		public function tickerwidget(){
			include 'ticker.php';
		}

		/*
		* Quicklinks with closing tag for 
		*/
		public function quicklinks(){
			include 'quicklinks.php';
		}
		/*
		*Closing sidebar and main section
		*/
		public function sideclose(){
			echo '
                </div>
                <!--/.Sidebar-->
            </div>
        </div>
        <!--/.Main layout-->

    </main>
';
		}


		/*
		* Footer html output
		*/
		public function footer(){
			include 'foot.php';
		}


    	/*
    	*function to get breakline in only mobile devices
    	*@var $nobr no of breaklines required
    	*/
    	public function MobBreakline($nobr){

			$output= "<span id='breakline' style='display: none'>";
			for($i=0;$i<$nobr;$i++) $output.="<br>";
			$output.="</span>";
		echo $output; 
		
		}
	}
	 
?>