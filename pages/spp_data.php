<?php
    $template = "dashboard";
    $judul = "Data SPP";
    $konten = "
    <!-- Begin Page Content -->
             <div class='container-fluid'>

                    <!-- Page Heading -->
                    <h1 class='h3 mb-4 text-gray-900'>Data SPP</h1>
                    <!-- awal card|table -->
                    <div class='card shadow mb-4 bg-white'>
                        <div class='card-header py-3'>
                            <h6 class='m-0 font-weight-bold text-primary'>Data SPP</h6>
                        </div>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                <table class='table table-bordered text-dark' id='dataTable' width='100%' cellspacing='0'>
                                    <thead>
                                    
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>Nominal</th>
                                            <th>hapus</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2019</td>
                                            <td>RP.85.000</td>
                                            <td>
                                            <a href='#' class='btn btn-danger btn-circle'>
                                               <i class='fas fa-trash'></i>
                                            </a> 
                                            </td>
                                            <td>
                                            <a href='?page=spp_edit' class='btn btn-success btn-circle'><i class='fas fa-edit'></i><a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                           <td>2020</td>
                                            <td>Rp.100.000</td>
                                            <td>
                                            <a href='#' class='btn btn-danger btn-circle'>
                                               <i class='fas fa-trash'></i>
                                            </a> 
                                            </td>
                                            <td>
                                 <a href='?page=spp_edit' class='btn btn-success btn-circle'>
                               <i class='fas fa-edit'></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>2022</td>
                                            <td>Rp.100.000</td>
                                            <td>
                                            <a href='#' class='btn btn-danger btn-circle'>
                                               <i class='fas fa-trash'></i>
                                            </a> 
                                            </td>
                                            <td>
                                            <a href='?page=spp_edit' class='btn btn-success btn-circle'>
                                                <i class='fas fa-edit'></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
              <!-- akhir card|table -->
       <div class='container-fluid'>
         <div class='card-body'>
           <a class='btn btn-primary' href='?page=spp_tambah'>Tambah SPP</a>
         </div>
       </div>

";
	
?>