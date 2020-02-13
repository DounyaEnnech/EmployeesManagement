
<!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong> Employee <?= $param->EmployeeID ?></strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" method="post">
            <div class="form-row">
                <div class="col">

                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="EmployeeId" value="<?= $param->EmployeeID ?>" disabled>
                        <label for="materialRegisterFormFirstName">Employee ID</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="NationalIDNumber" value="<?= $param->NationalIDNumber ?>">
                        <label for="materialRegisterFormLastName">NationalIDNumber</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="ContactID" value="<?= $param->ContactID ?>">
                        <label for="materialRegisterFormFirstName">Contact ID</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="LoginID" value="<?= $param->LoginID ?>">
                        <label for="materialRegisterFormLastName">Login id</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="Title" value="<?= $param->Title ?>">
                        <label for="materialRegisterFormFirstName">Title</label>
                    </div>
                </div>

            </div>
    </div>




    <!-- Sign up button -->
    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Edit employee</button>


    </form>
    <!-- Form -->

</div>

</div>
<!-- Material form register -->