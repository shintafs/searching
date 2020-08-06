 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

     <!-- <div class="input-group md-form form-sm form-2 pl-0">
         <input class="form-control my-0 py-1 border-warning" type="search" placeholder="Pencarian" aria-label="Search">
         <div class="input-group-append">
             <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Cari</button>
         </div>
     </div> -->
     <div class="row">
         <table id="datatables" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
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
             </tbody>

             <?php $i++; ?>
         <?php endforeach; ?>
         </table>

     </div>
     <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->