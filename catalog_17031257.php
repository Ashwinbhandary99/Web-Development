<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cw2";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	} else{
        echo "Succefully connected ";
    }
    $comp_sql = "SELECT * FROM C_info";
		$result_comp = $conn->query($comp_sql);

		$emp_sql = "SELECT * FROM employees";
		$result_emp = $conn->query($emp_sql);
    $xml=new DomDocument('1.0');
		$xml->formatOutput=true;


		while($row = mysqli_fetch_assoc($result_comp)){

			$company=$xml->createElement("Company");
			$c_info=$xml->createElement("C_info");
			$ceo=$xml->createElement("CEO");
			$departments=$xml->createElement("Departments");
			$research_development=$xml->createElement("Research_Development");
			$marketing=$xml->createElement("Marketing");
			$hr_department=$xml->createElement("Hr_Department");
			$projectManager=$xml->createElement("Project_Manager");
			$mobileDepartment=$xml->createElement("Mobile_Department");
			$webDepartment=$xml->createElement("Web_Department");
			$post=$xml->createElement("Post","Team Leader");
			
			
			$xml->appendChild($company);

			$company->appendchild($c_info);
			$company->appendChild($ceo);
			$ceo->appendchild($departments);
			$departments->appendChild($research_development);
			$departments->appendChild($marketing);
			$departments->appendChild($hr_department);
			$departments->appendChild($projectManager);
			$projectManager->appendChild($mobileDepartment);
			$projectManager->appendChild($webDepartment);
			$mobileDepartment->appendChild($post);
			$webDepartment->appendChild($post);
			

		

			$comp_name=$xml->createElement("name",$row["name"]);
			$comp_add=$xml->createElement("address",$row["address"]);
			$comp_num=$xml->createElement("telephone_number",$row["telephone_number"]);
			$comp_web=$xml->createElement("website",$row["website"]);
			$logo=$xml->createElement("logo");
			
			$c_info->appendChild($comp_name);
			$c_info->appendChild($comp_add);
			$c_info->appendChild($comp_num);
			$c_info->appendChild($comp_web);
			$c_info->appendChild($logo);
			
			
			


		}
		while($row = mysqli_fetch_assoc($result_emp)){
			if($row["Id"]=="44" || $row["Id"]=="102"){
				$employees=$xml->createElement("Employees");
				
				
				$e_fn=$xml->createElement("fname",$row["fname"]);
				$e_fn->setattribute("Title",$row["Title"]);
				$employees->setattribute("Id",$row["Id"]);
				$employees->setattribute("Emp_Type",$row["Emp_Type"]);
				
				$l_name=$xml->createElement("lname",$row["lname"]);
				$Address=$xml->createElement("Address",$row["address"]);
				$email=$xml->createElement("email",$row["email"]);
				$salary=$xml->createElement("salary",$row["salary"]);
				
				$employees->appendChild($e_fn);
				$employees->appendChild($l_name);
				$employees->appendChild($Address);
				$employees->appendChild($email);
				$employees->appendChild($salary);
				$research_development->appendChild($employees);
				
			}	
				
			
			if($row["Id"]=="25" || $row["Id"]=="101"){
			
				$employees=$xml->createElement("Employees");
				
				
				$e_fn=$xml->createElement("fname",$row["fname"]);
				$e_fn->setattribute("Title",$row["Title"]);
				$employees->setattribute("Id",$row["Id"]);
				$employees->setattribute("Emp_Type",$row["Emp_Type"]);
				
				$l_name=$xml->createElement("lname",$row["lname"]);
				$Address=$xml->createElement("Address",$row["address"]);
				$email=$xml->createElement("email",$row["email"]);
				$salary=$xml->createElement("salary",$row["salary"]);
				
				$employees->appendChild($e_fn);
				$employees->appendChild($l_name);
				$employees->appendChild($Address);
				$employees->appendChild($email);
				$employees->appendChild($salary);
				
				$marketing->appendChild($employees);
			}
			
			if($row["Id"]=="123" || $row["Id"]=="1244"){
			
				$employees=$xml->createElement("Employees");
				
				
				$e_fn=$xml->createElement("fname",$row["fname"]);
				$e_fn->setattribute("Title",$row["Title"]);
				$employees->setattribute("Id",$row["Id"]);
				$employees->setattribute("Emp_Type",$row["Emp_Type"]);
				
				$l_name=$xml->createElement("lname",$row["lname"]);
				$Address=$xml->createElement("Address",$row["address"]);
				$email=$xml->createElement("email",$row["email"]);
				$salary=$xml->createElement("salary",$row["salary"]);
				
				$employees->appendChild($e_fn);
				$employees->appendChild($l_name);
				$employees->appendChild($Address);
				$employees->appendChild($email);
				$employees->appendChild($salary);
				
				$hr_department->appendChild($employees);
			}
			if($row["Id"]=="26" || $row["Id"]=="102"){
			
				$employees=$xml->createElement("Employees");
				
				
				$e_fn=$xml->createElement("fname",$row["fname"]);
				$e_fn->setattribute("Title",$row["Title"]);
				$employees->setattribute("Id",$row["Id"]);
				$employees->setattribute("Emp_Type",$row["Emp_Type"]);
				
				$l_name=$xml->createElement("lname",$row["lname"]);
				$Address=$xml->createElement("Address",$row["address"]);
				$email=$xml->createElement("email",$row["email"]);
				$salary=$xml->createElement("salary",$row["salary"]);
				
				$employees->appendChild($e_fn);
				$employees->appendChild($l_name);
				$employees->appendChild($Address);
				$employees->appendChild($email);
				$employees->appendChild($salary);
				$mobileDepartment->appendChild($employees);
			}
			if($row["Id"]=="23" || $row["Id"]=="104"){
			
				$employees=$xml->createElement("Employees");
				
				
				$e_fn=$xml->createElement("fname",$row["fname"]);
				$e_fn->setattribute("Title",$row["Title"]);
				$employees->setattribute("Id",$row["Id"]);
				$employees->setattribute("Emp_Type",$row["Emp_Type"]);
				
				$l_name=$xml->createElement("lname",$row["lname"]);
				$Address=$xml->createElement("Address",$row["address"]);
				$email=$xml->createElement("email",$row["email"]);
				$salary=$xml->createElement("salary",$row["salary"]);
				
				$employees->appendChild($e_fn);
				$employees->appendChild($l_name);
				$employees->appendChild($Address);
				$employees->appendChild($email);
				$employees->appendChild($salary);
				$webDepartment->appendChild($employees);
			}
		}	
		echo "<xmp>".$xml->saveXML()."</xmp>";
		$xml->save('coursework2.xml');
	
?>