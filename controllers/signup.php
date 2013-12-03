<?php
	if(isset($_POST["nominscr"]))
		{			
			$inscr = new UserModel;
			
			$inscr->userInsert($_POST['nominscr'], $_POST['mdpinscr'], $_POST['emailinscr']);

			header("location:project");
		}
	else{
		header("location:don");
	}
	
	?>
					
	