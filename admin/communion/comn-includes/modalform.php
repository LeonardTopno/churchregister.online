
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">New Registration</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 </div>

                            <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="" name="fname" id="fname" placeholder="First Name Here" autofocus required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Middle Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="mname" id="mname" value="" placeholder="Middle Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="lname" id="lname" value="" placeholder="Last Name Here" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-3">Gender</label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" value="Male" required>
                                            <label class="custom-control-label" for="customControlValidation1">Male</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" value="Female" required>
                                            <label class="custom-control-label" for="customControlValidation2">Female</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div>
                                        <div class="form-group row">
                                        <label for="date" class="col-sm-3 text-left control-label col-form-label">Date of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control mydatepicker" id="dob" name="dob" max="2020-09-31">
                                        </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="form-group row">
                                        <label for="date" class="col-sm-3 text-left control-label col-form-label">Date of Baptism</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control mydatepicker" id="dobaptism" name="dobaptism">
                                        </div>
                                    </div>
 
                                    <div class="form-group row">
                                    <label class="col-md-3">Upload Photo(Optional)</label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input" id="validatedCustomFile" >
                                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="minister" class="col-sm-3 text-left control-label col-form-label">Clergyman Officiating</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="bby" id="bby" value="" placeholder="Minister's Name here">
                                        </div>
                                    </div>

                                    <!--Parents'  Details Section-->
                                    <h5 class="card-title"><b>Parents' and Sponsors' Details</b></h5>
                                                                    
                                    <div class="border-top"></div><br>

                                    <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-left control-label col-form-label">Father's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="fathername" id="fathername" value="" placeholder="Father's Name Here" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Father's Surname</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="fathersname" id="fathersname"  value="" placeholder="Father's Surname Here" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Father's Occupation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="foccupation" id="foccupation" value="" placeholder="Occupation">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fdomicile" class="col-sm-3 text-left control-label col-form-label">Father's Domicile</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="domicile" id="domicile" style="width: 100%; height:36px;">
                                            <option selected="" disabled=""> Select Domilcile State </option>
                                            <?php  
                                                $stateDomicileData="SELECT id, name from states where country_id=101";
                                                $result=mysqli_query($conn,$stateDomicileData);
                                                if(mysqli_num_rows($result)>0)
                                                    {
                                                        while($arr=mysqli_fetch_assoc($result))
                                                            {
                                                                ?>

                                                <option value="<?php echo $arr['id']; ?>"><?php echo $arr['name']; ?></option>
                                                <?php }} ?>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">Mother's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="mothername" id="mothername"  value="" placeholder="Mother's Name Here" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Mother's Surname</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="mothersname" id="mothersname"  value="" placeholder="Mother's Surname Here" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Mother's Occupation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="moccupation" id="moccupation" value="" placeholder="Occupation">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">1st Sponsor's Name(M)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="GFname" id="GFname" value="" placeholder="God Father Name" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">1st Sponsor's Domicile</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="GFdomicile" id="GFdomicile" style="width: 100%; height:36px;">
                                            <option selected="" disabled=""> Select Domilcile State </option>
                                            <?php  
                                                $stateDomicileData="SELECT id, name from states where country_id=101";
                                                $result=mysqli_query($conn,$stateDomicileData);
                                                if(mysqli_num_rows($result)>0)
                                                    {
                                                        while($arr=mysqli_fetch_assoc($result))
                                                            {
                                                                ?>

                                                <option value="<?php echo $arr['id']; ?>"><?php echo $arr['name']; ?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">2nd Sponsor's Name(F)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="GMname" id="GMname" value="" placeholder="Write Here" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">2nd Sponsor's Domicile</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="GMdomicile" id="GMdomicile" style="width: 100%; height:36px;">
                                            <option selected="" disabled=""> Select Domilcile State </option>
                                            <?php  
                                                $stateDomicileData="SELECT id, name from states where country_id=101";
                                                $result=mysqli_query($conn,$stateDomicileData);
                                                if(mysqli_num_rows($result)>0)
                                                    {
                                                        while($arr=mysqli_fetch_assoc($result))
                                                            {
                                                                ?>

                                                <option value="<?php echo $arr['id']; ?>"><?php echo $arr['name']; ?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Contact Details Section-->
                                    <h5 class="card-title"><b>Contact Details</b></h5>
                                                                    
                                    <div class="border-top"></div><br>

                                    
                                    <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Permanent Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="padd" id="padd"  placeholder="Write Permanent Address here" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Current Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="cadd" id="cadd"  placeholder="Write Current Address here" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Mobile Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control phone-inputmask" name="mobile" id="phone-mask" value="" placeholder="10 Digit Mob. No." autocomplete="off" Maxlength="10">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">E-Mail ID</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" id="email" value="" placeholder="E Mail" autocomplete="off">
                                        </div>
                                    </div>

                                    <!--Home Parish Section Details Section-->
                                    <h5 class="card-title"><b>Home Parish/Diocese Details</b></h5>
                                                                    
                                    <div class="border-top"></div><br>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Country</label>
                                        <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" name="country" id="country" style="width: 100%; height:36px;">
                                            <option selected="" disabled=""> Select Country </option>
                                            <?php  
                                                $contryData="SELECT id, name from countries";
                                                $result=mysqli_query($conn,$contryData);
                                                if(mysqli_num_rows($result)>0)
                                                    {
                                                        while($arr=mysqli_fetch_assoc($result))
                                                            {
                                                                ?>

                                                <option value="<?php echo $arr['id']; ?>"><?php echo $arr['name']; ?></option>
                                                <?php }} ?>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="province-name" class="col-sm-3 text-left control-label col-form-label">Province</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="province" id="province" style="width: 100%; height:36px;">
                                                <option selected="" disabled="">Select Province</option>                            
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="diocese-name" class="col-sm-3 text-left control-label col-form-label">Diocese</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="diocese" id="diocese" style="width: 100%; height:36px;">
                                                <option selected="" disabled="">Select Diocese</option>                            
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <label for="parish" class="col-sm-3 text-left control-label col-form-label">Parish</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" name="parish" id="parish" style="width: 100%; height:36px;">
                                                <option selected="" disabled="">Select Parish</option>                            
                                            </select>
                                        </div>
                                    </div>

                                    <!--Control Buttons Section-->
                                    <div class="border-top">
                                    <div class="card-body">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                </div>

                            <!-- Modal footer 
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            -->