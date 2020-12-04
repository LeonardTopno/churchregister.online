<!--------------- Add Only Communion Details Data ---------------->
<div class="modal" id="comnform">
   <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title">Fill First Communion Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <div class="form-group row">
               <label for="fname" class="col-sm-3 text-left control-label col-form-label">Communion Date</label>
               <div class="col-sm-9">
                  <input type="date" class="form-control" name="comndate" id="comndate" value=""  required>
               </div>
            </div>
            <div class="form-group row">
               <label for="lname" class="col-sm-3 text-left control-label col-form-label">Communion Church</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" name="cchurchname" id="cchurchname"  value="" placeholder="Church Name Here.." required>
               </div>
            </div>
            <div class="form-group row">
               <label for="lname" class="col-sm-3 text-left control-label col-form-label">School</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" name="comnschool" id="comnschool" value="" placeholder="School Name Here..." required>
               </div>
            </div>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <button type="submit" class="btn btn-success" onclick="">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<!-- End Communion Details Data -->