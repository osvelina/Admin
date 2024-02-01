@extends('Layouts.main')

@section('title', 'Datapelanggan')
    
@section('content')

<style>
  body {
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
 
.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}
.tooltip{
  color: #2196F3;
}
.table-wrapper {
		min-width: 1000px;
        padding: 10px 25px;
}

 

  
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="container">
<div class="section-title">
    <h2>Data Pelanggan</h2>
      <div class="row justify-content-center">
          <div class="col-md-6">
              <form method="GET" action="/kegiatan.search">        
              @csrf
              <div class="input-group mb-3">
                  <input type="search" name="search" class="form-control" placeholder="Cari id">
                      <button type="submit" class="btn btn-danger">
                          <i class="fas">Search</i>
                      </button>
                  </div>
              </form>
          </div>
      </div>
        <div class="table-wrapper">
                      <a href="#" class="btn btn-primary"><i class="bi bi-database-add"></i> <span>Input Data</span></a>				
                  </div>
          <thead>
          <div class="container">
            <table class="table table-bordered border-dark table table-striped table-hover">
            <tr class="text-center">
              <th >ID</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No Telepon</th>
              <th>Tindakan</th>
            </tr>
          </thead>
        
          <tbody>
            <tr>
              <td>3546</td>
              <td>Nama</td>
              <td>Alamat</td>
              <td>No Telepon</td>
              <td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil-square" data-toggle="tooltip" title="Edit"></i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash3" data-toggle="tooltip" title="Delete"></i></a>
							</td>
            </tr>
          </tbody>
      
      </table>
              </div>
              <nav aria-label="Page navigation example">
              <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
              </nav>
              </div>
              
      @stop



