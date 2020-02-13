
<!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Add Employee</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;"action="index.php?c=employee&m=InsertEmployee" method="post">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="EmployeeId">
                        <label for="materialRegisterFormFirstName">Employee ID</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="NationalIDNumber">
                        <label for="materialRegisterFormLastName">NationalIDNumber</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="ContactID">
                        <label for="materialRegisterFormFirstName">Employee ID</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="LoginID">
                        <label for="materialRegisterFormLastName">NationalIDNumber</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="Title">
                        <label for="materialRegisterFormFirstName">Title</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="datetime-local" id="materialRegisterFormLastName" class="form-control" name="BirthDate" value="local">
                        <label for="materialRegisterFormLastName">BirthDate</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="MaritalStatus">
                        <label for="materialRegisterFormFirstName">MaritalStatus</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="Gender">
                        <label for="materialRegisterFormLastName">Gender</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="datetime-local" id="materialRegisterFormFirstName" class="form-control" name="HireDate">
                        <label for="materialRegisterFormFirstName">HireDate</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="SalariedFlag" >
                        <label for="materialRegisterFormLastName">SalariedFlag</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="VacationHours">
                        <label for="materialRegisterFormFirstName">VacationHours</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="SickLeaveHours">
                        <label for="materialRegisterFormLastName">SickLeaveHours</label>
                    </div>
                </div>
            </div>
            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="text" id="materialRegisterFormEmail" class="form-control" name="CurrentFlag">
                <label >CurrentFlag</label>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="text" id="materialRegisterFormEmail" class="form-control" name="rowguid">
                <label >rowguid</label>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="datetime-local" id="materialRegisterFormFirstName" class="form-control" name="ModifiedDate">
                <label >ModifiedDate</label>
            </div>


            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Add employee</button>


        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->