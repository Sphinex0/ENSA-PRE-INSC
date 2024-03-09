<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <img src="/images/logo2.png" width="100%" alt="">
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Etudiant</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Archivre </span>
                    </a>
                </li>
                
              
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Change Mote de passe </span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">

                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="/images/logo1.png" class=" img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded">

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3">Admin Dashboard</h3>
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col col-sm-5 col-xs-12">
                                                        <h4 class="title">Data <span>List</span></h4>
                                                    </div>
                                                    <div class="col-sm-12 col-xs-12 text-right">
                                                        <div class="btn_group">
                                                            <button class="btn btn-sm btn-default"><img src="/images/exceller.png" alt=""></i>
                                                                Import  to Excel
                                                            </button>
                                                            <button class="btn btn-sm btn-default"><img src="/images/pdf.png" alt=""></i>
                                                                Import  to PDF
                                                            </button>
                                                            <button class="btn btn-sm btn-default"><img src="/images/exceller.png" alt=""></i>
                                                                <a href="{{ route('export.etudiants.excel') }}" class="btn btn-primary">Exporter vers Excel</a>

                                                            </button>
                                                            <button class="btn btn-sm btn-default"><img src="/images/pdf.png" alt=""></i>
                                                                Export to PDF
                                                            </button>
                                                            <a href="#" class="btn btn-sm btn-default"><i class="lni lni-circle-plus"></i></i></i>
                                                                Add New User
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>nom</th>
                                                            <th>prenom</th>
                                                            <th>sexe</th>
                                                            <th>cin</th>
                                                            <th>date</th>


                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($etudiants as $etudiant)
                                                        <tr>
                                                            <td>{{ $etudiant->id }}</td>

                                                            <td>{{ $etudiant->nom }}</td>
                                                            <td>{{ $etudiant->prenom }}</td>
                                                            <td>{{ $etudiant->sexe }}</td>
                                                            
                                                            <td>{{ $etudiant->cin_et }}</td>
                                                            <td>{{ $etudiant->date_naissance }}</td>


                                                            <td>
                                                                <ul class="action-list">
                                                                    <li><a href="#" class="edit" data-tip="setting">éditer <i class="lni lni-cog"></i></a></li>
                                                                    <li><a href="#" class="delete" data-tip="delete">supprimer <i class="lni lni-trash-can"></i></a></li> 
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                      @endforeach
                                                    </tbody>
                                                </table>
                                                
                                                
                                            </div>
                                                {{ $etudiants->links() }}
                                           
                                    </div>
                                </div>
                        
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start ">
                            <a class="text-body-secondary" href=" #">
                                <strong>ENSA</strong>
                            </a>
                        </div>
                        
                </div>
            </footer>
        </div>
    </div>
    
    <script src="/js/scripts.js"></script>
</body>

</html>