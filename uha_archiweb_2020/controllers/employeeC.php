<?php
require MODELS.DS.'employeeM.php';

require CLASSES.DS.'view.php';
class EmployeeController {

    public function construct(){

    }

    public function liste(){
        $model=new EmployeeModel();
        $lesEmployees=$model->liste();
        $v=new View();
        $v->render('employesList',$lesEmployees);
    //   $this->renderview('employesList',$lesEmployees);

    }

    public function listOne($id)
    {

        $model = new EmployeeModel();
        $Employee=$model->listOne($id);
        //$data=$Employee->fetch(PDO::FETCH_OBJ);
        //return $Employee;
        $v=new View();

        $v->render('listOne',$Employee);
    }
    public function addEmployee()
    {

        $this->renderview('addEmployee','');
    }
    public function EditEmploye($id)
    {
        $model = new EmployeeModel();
        $Employee=$model->listOne($id);
        $v=new View();
        $v->render('editEmployee',$Employee);

    }

    public function UpdateEmployee()
    {
        $model = new EmployeeModel();
        if(isset( $_POST['EmployeeId'])) {
            $EmployeeId = $_POST['EmployeeId'];
            $NationalIDNumber = $_POST['NationalIDNumber'];
            $ContactID = $_POST['ContactID'];
            $LoginID = $_POST['LoginID'];
            $Title = $_POST['Title'];

            $model->UpdateEmployee($EmployeeId, $NationalIDNumber, $ContactID, $LoginID, $Title);
        }

    }

    public function InsertEmployee()
    {
        $EmployeeId = $_POST['EmployeeId'];
        $NationalIDNumber = $_POST['NationalIDNumber'];
        $ContactID = $_POST['ContactID'];
        $LoginID = $_POST['LoginID'];
        $Title = $_POST['Title'];
        $BirthDate = $_POST['BirthDate'];
        $MaritalStatus = $_POST['MaritalStatus'];
        $Gender = $_POST['Gender'];
        $HireDate = $_POST['HireDate'];
        $SalariedFlag = ($_POST['SalariedFlag']);
        $VacationHours = $_POST['VacationHours'];
        $SickLeaveHours = $_POST['SickLeaveHours'];
        $CurrentFlag = ($_POST['CurrentFlag']);
        $rowguid = $_POST['rowguid'];
        $ModifiedDate = $_POST['ModifiedDate'];
        $model=new EmployeeModel();
        $model->NewEmployee($EmployeeId,$NationalIDNumber,$ContactID,$LoginID,$Title,$BirthDate,$MaritalStatus,$Gender,$HireDate,$SalariedFlag,$VacationHours,$SickLeaveHours,$CurrentFlag,$rowguid,$ModifiedDate);

    }
    public function deleteEmployee($id)
    {
        $model = new EmployeeModel();
        $model->deleteEmployee($id);
        $this->liste();
    }
}
?>