<?php
include 'app/Database.php';
class EmployeeModel{

    public function __construct(){
        require_once("app/Database.php");
      $this->pdo = new Database();
    }
    public function liste(){
try{
    $query ="select * from employee ";
    $result=$this->pdo->getPDO()->query($query);
    return $result;
    } catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
    }
    public function listOne($id)
    {
        try{$sql=" SELECT EmployeeID ,NationalIDNumber,ContactID,LoginID,Title FROM employee WHERE EmployeeID=:id ";
        $stmt= $this->pdo->getPDO()->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ)['0'];
    } catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
        //$stmt->close();
        //$stmt=null;
    }

    public function NewEmployee($EmployeeId,$NationalIDNumber,$ContactID,$LoginID,$Title,$BirthDate,$MaritalStatus,$Gender,$HireDate,$SalariedFlag,$VacationHours,$SickLeaveHours,$CurrentFlag,$rowguid,$ModifiedDate)
    {
      try{  $sql = "INSERT INTO employee(EmployeeId,NationalIDNumber,ContactID,LoginID,ManagerID,Title,BirthDate,MaritalStatus,Gender,HireDate,SalariedFlag,VacationHours,SickLeaveHours,CurrentFlag,rowguid,ModifiedDate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt= $this->pdo->getPDO()->prepare($sql);
        $stmt->execute([$EmployeeId,$NationalIDNumber,$ContactID,$LoginID,'185',$Title,$BirthDate,$MaritalStatus,$Gender,$HireDate,$SalariedFlag,$VacationHours,$SickLeaveHours,$CurrentFlag,$rowguid,$ModifiedDate]);
    } catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
    }
    public function UpdateEmployee($EmployeeId,$NationalIDNumber,$ContactID,$LoginID,$Title)
    {try{
        $sql = "UPDATE  employee SET NationalIDNumber=?,ContactID=?,LoginID=?,Title=? WHERE EmployeeID=?";
        $stmt= $this->pdo->getPDO()->prepare($sql);
        $stmt->execute([$NationalIDNumber,$ContactID,$LoginID,$Title,$EmployeeId]);

    } catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
    }
    public function deleteEmployee($EmployeeId)
    {
          try{  $sql = "DELETE FROM  employee  WHERE EmployeeID=?";
            $stmt= $this->pdo->getPDO()->prepare($sql);
            $stmt->execute([$EmployeeId]);
            echo 'well deleted ';
    } catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
    }
}
?>