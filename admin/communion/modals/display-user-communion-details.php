<!-- Modal Over Modal Communion Individual Info -->
<div class="modal" id="myModal2" data-backdrop="static">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Individual Communion Detail</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="container"></div>
         <div class="modal-body">
            
            <div class="form-group row">
               <label class="col-sm-3 text-left control-label col-form-label">Communion ID</label>
               <div class="col-sm-9">
                  <?php echo $id;?>
               </div>
            </div>
            
            <div class="form-group row">
               <label for="fname" class="col-sm-3 text-left control-label col-form-label">Name</label>
               <div class="col-sm-9">
                  <?php echo $FirstName;?> &nbsp; <?php echo $MiddleName;?> &nbsp; <?php echo $LastName;?>
               </div>
            </div>
            
            <div class="form-group row">
               <label for="fname" class="col-sm-3 text-left control-label col-form-label">Father's Name</label>
               <div class="col-sm-9">
                  <?php echo $FathersName;?> &nbsp; <?php echo $FathersSurname;?>
               </div>
            </div>
            
            <div class="form-group row">
               <label for="fname" class="col-sm-3 text-left control-label col-form-label">Mother's Name</label>
               <div class="col-sm-9">
                  <?php echo $MothersName;?> &nbsp; <?php echo $MothersSurname;?>
               </div>
            </div>
            
            <div class="form-group row">
               <label for="fname" class="col-sm-3 text-left control-label col-form-label">Home Parish</label>
               <div class="col-sm-9">
                  <?php echo $fname;?> &nbsp; <?php echo $MName;?> &nbsp; <?php echo $LName;?>
               </div>
            </div>

            <div class="form-group row">
               <label for="fname" class="col-sm-3 text-left control-label col-form-label">Date of Birth</label>
               <div class="col-sm-9">
                  <?php echo date("d-m-Y",strtotime($baptims_date));?>
               </div>
            </div>

            <div class="form-group row">
               <label for="fname" class="col-sm-3 text-left control-label col-form-label"> Baptism Date</label>
               <div class="col-sm-9">
                  <?php echo date("d-m-Y",strtotime($baptims_date));?>
               </div>
            </div>

            <div class="form-group row">
               <label for="fname" class="col-sm-3 text-left control-label col-form-label">Communion Date</label>
               <div class="col-sm-9">
                  <?php echo date("d-m-Y",strtotime($baptims_date));?>
               </div>
            </div>

            <div class="form-group row">
               <label for="fname" class="col-sm-3 text-left control-label col-form-label">Communion Church</label>
               <div class="col-sm-9">
                  <?php echo $cchurch;?> 
               </div>
            </div>
            <div class="form-group row">
               <label for="fname" class="col-sm-3 text-left control-label col-form-label">School</label>
               <div class="col-sm-9">
                  <?php echo $school;?>
               </div>
            </div>
         </div>

         <div class="modal-footer">
            <a href="href="print_baptism.php?Id=<?php echo $id; ?>""  class="btn">Print Details</a>
            <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
         </div>
      </div>
   </div>
</div>