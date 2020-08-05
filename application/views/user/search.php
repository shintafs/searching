 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
     <div class="row">
         <div class="col-lg-8">

             <div class="form-group row">
                 <label for="startdate" class="col-sm-2 col-form-label">Start Date</label>
                 <div class="col-sm-10">
                     <input class="form-control-date" type="date" href="#" id="startdate" name="startdate">
                 </div>
             </div>

             <div class="form-group row">
                 <label for="enddate" class="col-sm-2 col-form-label">End Date</label>
                 <div class="col-sm-10">
                     <input class="form-control-date" type="date" href="#" id="enddate" name="enddate">

                 </div>
             </div>

             <div class="form-group row">
                 <label for="pa" class="col-sm-2 col-form-label">Personnel Area</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" id="pa" mame="pa" value="">
                 </div>
             </div>

             <div class="form-group row">
                 <label for="psa" class="col-sm-2 col-form-label">Personnel Subarea</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" id="psa" mame="psa" value="">
                 </div>
             </div>

             <div class="form-group row">
                 <label for="costcenter" class="col-sm-2 col-form-label">Costcenter</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" id="costcenter" mame="costcenter" value="">
                 </div>
             </div>

             <div class="form-group row">
                 <label for="organization" class="col-sm-2 col-form-label">Organization</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" id="organization" mame="organization" value="">
                 </div>
             </div>

             <div class="form-group row">
                 <label for="formattedname" class="col-sm-2 col-form-label">formattedname</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" id="formattedname" mame="formattedname" value="">
                 </div>
             </div>

             <div class="form-group row float-right">
                 <div class="col-sm-10">
                     <button type="search   " class="btn btn-primary">Search</button>
                 </div>
             </div>

         </div>

     </div>
     <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->