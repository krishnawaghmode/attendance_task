<?php
      include 'db_config.php';

class Main {
	
// Total Employee
public function total_employee()
{
	global $pdo;
	$sql="SELECT * FROM employee";
	$stmt=$pdo->prepare($sql);

	$stmt->execute();
    return $stmt->rowCount();
 }



// absent = 3 ,late = 4, present = 5
public function Check_employee_Leave($status)
{
	global $pdo,$TodayDate;
	$sql="SELECT * FROM `leaves` WHERE from_leave_date =:TodayDate AND status =:status";
	$stmt=$pdo->prepare($sql);

	$stmt->execute(["TodayDate"=>$TodayDate,"status"=>$status]);
    return $stmt->rowCount();
 }


 //Department Wise Employee on leave
public function DepartmentWiseLeave()
{
	global $pdo;
$sql="SELECT employee.department,COUNT(employee.department) as 'total_department' FROM leaves INNER JOIN employee ON leaves.employee_id = employee.id WHERE leaves.status = 1 GROUP BY employee.department";
	$stmt=$pdo->prepare($sql);

	$stmt->execute();
    if($stmt->rowCount()>0){
       return $stmt->fetchAll();
	}
 }


 //Department Wise no. of Employees
public function DepartmentWiseNo_Employee()
{
	global $pdo;
$sql="SELECT department,COUNT(id) as 'departmentwise_no_employee' FROM employee GROUP BY department";
	$stmt=$pdo->prepare($sql);

	$stmt->execute();
    if($stmt->rowCount()>0){
       return $stmt->fetchAll();
	}
 }


  //Designation Wise no. of employees
public function DesignationWiseNo_Employee()
{
	global $pdo;
$sql="SELECT designation,COUNT(id) as 'designationwise_no_employee' FROM employee GROUP BY designation";
	$stmt=$pdo->prepare($sql);

	$stmt->execute();
    if($stmt->rowCount()>0){
       return $stmt->fetchAll();
	}
 }


//List of Approved Leaves
public function GetApprovedLeaves()
{
	global $pdo;
	$query="SELECT * FROM leaves INNER JOIN employee ON leaves.employee_id = employee.id WHERE leaves.status=1";
    $stmt4=$pdo->prepare($query);

	$stmt4->execute();
    if($stmt4->rowCount()>0){
       return $result5=$stmt4->fetchAll();
	}
}

//Employees list
public function EmployeesLists()
{
	global $pdo;
	$query="SELECT * FROM employee";
    $stmt4=$pdo->prepare($query);

	$stmt4->execute();
    if($stmt4->rowCount()>0){
       return $result5=$stmt4->fetchAll();
	}
}

}
?>