 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

     <!-- <div class="input-group mb-3">
         <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
         <div class="input-group-append">
             <button class="btn btn-outline-secondary" type="submit" name="submit">Search</button>
         </div>
     </div> -->
     <form action="< ?= base_url('user/index'); ?>" class="" mrthod="get">
         <!-- <?= form_open_multipart('user/index'); ?> -->
         <div class="col-md-4">
             <input type="text" class="form-control date" id="startdate" name="startdate" placeholder="Start Date">
             <input type="text" class="form-control date" id="enddate" name="enddate" placeholder="End Date">
             <button class="btn btn-outline-primary my-2 my-sm-0" id="submit" type="submit">Search</button>
         </div>
     </form>
     <div class="row">
         <table id="datatables" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%" id="messages1">
             <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">Start Date</th>
                     <th scope="col">End Date</th>
                     <th scope="col">Personnel Area</th>
                     <th scope="col">Personnel Subarea</th>
                     <th scope="col">Costcenter</th>
                     <th scope="col">Organization</th>
                     <th scope="col">Name</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $i = 1; ?>
                 <?php foreach ($cari as $c) : ?>

                     <tr>
                         <td width="50">
                             <?= $i; ?>
                         </td>
                         <td width="50">
                             <?= $c->startdate; ?>
                         </td>
                         <td width="50">
                             <?= $c->enddate; ?>
                         </td>
                         <td width="50">
                             <?= $c->pa; ?>
                         </td>
                         <td width="50">
                             <?= $c->psa; ?>
                         </td>
                         <td width="50">
                             <?= $c->costcenter; ?>
                         </td>
                         <td width="50">
                             <?= $c->organization; ?>
                         </td>
                         <td width="50">
                             <?= $c->formattedname; ?>
                         </td>
                     </tr>
             </tbody>

             <?php $i++; ?>
         <?php endforeach; ?>
         </table>

     </div>
     <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->