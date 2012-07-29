<?php
	
	class Archief extends AppModel {
		
			public $name = 'Archief';
			public $useDbConfig = 'dbmis';
			public $useTable = 'CUSTOMER';

			
			//public $useTable = 'customer'; //tabelname

	} 

?>
<?php
print_r (PDO :: getAvailableDrivers ());
echo ('hoi' );
?>