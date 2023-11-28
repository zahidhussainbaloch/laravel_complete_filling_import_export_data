<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>

    <meta name="csrf-token" content="{{ csrf_token() }}"> 



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> 

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> 

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> 

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> 

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> 

</head>
<body>
         <div class="container"> 

    <div class="card bg-light mt-3">

        <div class="card-header">

                download Excel File

        </div>

        <div class="card-body">

            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <input type="file" name="file" class="form-control">

                <br>

                <button class="btn btn-success">Import User Data</button>

            </form>

</div>
</div>

    <div class="row"> 

        <div class="col-md-12 mt-5"> 

             <div class="row">


 

            </div> 
                <center><h3 style="color:green">{{session('message')}} </h3></center>
            <table class="table table-hover table-bordered data-table"> 

                 
                <thead>
                     

                      <tr>
                      
                      <th><a href="/Add_form" class="btn btn-success">Add New Student</a><th>
                      </tr>

                    <tr> 

                         

                        <th>Name</th> 

                        <th>Email</th> 
                        
                        <th>phone_number</th> 
                        
                        <th>nic_number</th> 
                        
                        <th>city</th>

                        
                        <th>full_addres</th> 
                         

                        <th width="20%">Action</th> 
                        

                    </tr> 

                </thead> 

                <tbody> 

                </tbody> 

                      
            </table>


            <table class="table table-bordered mt-3">

                <tr>

                    <th>
                       
                        <a class="btn btn-warning float-end" href="{{ route('export') }}">Export User Data In Excel File</a>
                    </th>
                    <th>
                       
                        <a class="btn btn-primary float-end" href="#">Export User Data CSV File</a>
                    </th>
                    <th >    

                         <a class="btn btn-success float-end" href="/generate-pdf">Export User Data In PDF File</a>

                    </th>

                </tr>
         </table>  

        </div> 

    </div> 

</div> 

</body> 
  
<script type="text/javascript"> 

  $(function () { 

    var table = $('.data-table').DataTable({ 

        processing: true, 

        serverSide: true, 

        ajax: "{{ route('users.index') }}", 

        columns: [ 
 

            {data: 'name', name: 'name'}, 

            {data: 'email', name: 'email'},

            {data: 'phone_number', name: 'phone_number'},

            {data: 'nic_number', name: 'nic_number'},

            {data: 'city', name: 'city'},

            {data: 'full_addres', name: 'full_addres'}, 

            {data: 'action', name: 'action', orderable: false, searchable: false}, 

        ] 

    }); 

  }); 

</script> 
</body>
</html>