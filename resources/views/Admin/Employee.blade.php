@extends('Layout.Admin.Layout')

@section('title', 'Employee')

@section('content')
    @php $ent = 'Employee' @endphp
    <!-- Data table -->

    <div class="card">
        <div class="row pt-4 px-4 py-4">
            <div class="col-md-6">
                <h4 class="ent">{{ $ent }}s</h4>
            </div>

            <div class="col-md-6">
                <div class="dt-buttons btn-group d-flex justify-content-end gap-2 ">
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            <i class='bx bx-export'></i> Export
                        </button>
                        <ul class="dropdown-menu">
                            <li><button type="button" class="btn dropdown-item copy_btn"><i class='bx bx-copy'></i>
                                    Copy</button></li>
                            <li><button type="button" class="btn dropdown-item print_btn"><i class='bx bx-printer'></i>
                                    Print</button></li>
                            <li><button type="button" class="btn dropdown-item excel_btn"><i
                                        class='bx bx-file'></i>Excel</button></li>
                            <li><button type="button" class="btn dropdown-item pdf_btn"><i class='bx bxs-file-pdf'></i>
                                    Pdf</button></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target=".add_modal">
                            <i class='bx bx-plus-circle'></i> Add {{ $ent }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive tbl_div"></div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade add_modal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form class="add_form" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">Add {{ $ent }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                         <!-- First Row -->
                        <div class="row mb-3">
                            <div class="group-header">
                                <h5 class="group-title">PERSONAL INFORMATION: </h5>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="" class="form-label">Last name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="lastname" />
                            </div>
                            <div class="col-4 mb-3">
                                <label for="" class="form-label">First name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="firstname" />
                            </div>
                            <div class="col-4 mb-3">
                                <label for="" class="form-label">Middle name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="middlename" />
                            </div>
                            <div class="col-4 mb-3">
                                <label for="" class="form-label">Position</label>
                                <select name="position" class="form-control " id="">
                                    <Option value="Senior Web Developer">Senior Web Developer</Option>
                                    <Option value="Junior Web Developer">Junior Web Developer</Option>
                                    <Option value="Admin">Admin</Option>
                                    <Option value="dmin Assistant">Admin Assistant</Option>
                                    <Option value="IT Supervisor">IT Supervisor</Option>
                                    <Option value="Marketing Head">Marketing Head</Option>
                                    <Option value="Human Resource">Human Resource</Option>
                                    <Option value="Accounting Head">Accounting Head</Option>
                                    <Option value="Executive Assistant">Executive Assistant</Option>
                                </select>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="" class="form-label">Employee ID</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="employee_id" />
                            </div>
                        </div>
                        <hr>
                         <!-- Second Row -->
                         <div class="row mb-3">
                            <div class="group-header">
                                <h5 class="group-title">CONTACT DETAILS: </h5>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Enter  Phone Number" name="phonenumber" />
                            </div>
                            <div class="col-4 mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control" placeholder="Enter Email" name="email" />
                            </div>
                        </div>
                        <hr>    
                        <!-- Third Row -->
                        <div class="row mb-3">
                            <div class="group-header">
                                <h5 class="group-title">SOCIAL MEDIA ACCOUNT: </h5>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" placeholder="Enter Email Address"
                                        name="facebook" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="" class="form-label">Telegram</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number"
                                        name="telegram" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="" class="form-label">Viber</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number"
                                        name="viber" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="" class="form-label">Whatsapp</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number"
                                        name="whatsapp" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="" class="form-label">Wechat</label>
                                    <input type="file" name="wechat" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        <hr>
                         <!-- Fourth Row -->
                         <div class="row mb-3">
                            <div class="group-header">
                                <h5 class="group-title">PROFILE: </h5>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Profile</label>
                                <input type="file" name="profile" class="form-control" id="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Modal -->
    <div class="modal fade upd_modal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form class="upd_form" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit {{ $ent }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <!-- First Row -->
                       <div class="row mb-3">
                           <div class="group-header">
                               <h5 class="group-title">PERSONAL INFORMATION: </h5>
                           </div>
                           <div class="col-4 mb-3">
                               <label for="" class="form-label">Last name</label>
                               <input type="text" class="form-control" placeholder="Enter Name" name="lastname" />
                           </div>
                           <div class="col-4 mb-3">
                               <label for="" class="form-label">First name</label>
                               <input type="text" class="form-control" placeholder="Enter Name" name="firstname" />
                           </div>
                           <div class="col-4 mb-3">
                               <label for="" class="form-label">Middle name</label>
                               <input type="text" class="form-control" placeholder="Enter Name" name="middlename" />
                           </div>
                           <div class="col-4 mb-3">
                               <label for="" class="form-label">Position</label>
                               <select name="position" class="form-control " id="">
                                   <Option value="Senior Web Developer">Senior Web Developer</Option>
                                   <Option value="Junior Web Developer">Junior Web Developer</Option>
                                   <Option value="Admin">Admin</Option>
                                   <Option value="dmin Assistant">Admin Assistant</Option>
                                   <Option value="IT Supervisor">IT Supervisor</Option>
                                   <Option value="Marketing Head">Marketing Head</Option>
                                   <Option value="Human Resource">Human Resource</Option>
                                   <Option value="Accounting Head">Accounting Head</Option>
                                   <Option value="Executive Assistant">Executive Assistant</Option>
                               </select>
                           </div>
                           <div class="col-4 mb-3">
                               <label for="" class="form-label">Employee ID</label>
                               <input type="text" class="form-control" placeholder="Enter Name" name="employee_id" />
                           </div>
                       </div>
                       <hr>
                        <!-- Second Row -->
                        <div class="row mb-3">
                           <div class="group-header">
                               <h5 class="group-title">CONTACT DETAILS: </h5>
                           </div>
                           <div class="col-4 mb-3">
                               <label for="" class="form-label">Phone Number</label>
                               <input type="text" class="form-control" placeholder="Enter  Phone Number" name="phonenumber" />
                           </div>
                           <div class="col-4 mb-3">
                               <label for="" class="form-label">Email</label>
                               <input type="text" class="form-control" placeholder="Enter Email" name="email" />
                           </div>
                       </div>
                       <hr>    
                       <!-- Third Row -->
                       <div class="row mb-3">
                           <div class="group-header">
                               <h5 class="group-title">SOCIAL MEDIA ACCOUNT: </h5>
                           </div>
                           <div class="row mb-3">
                               <div class="col">
                                   <label for="" class="form-label">Facebook</label>
                                   <input type="text" class="form-control" placeholder="Enter Email Address"
                                       name="facebook" />
                               </div>
                           </div>
                           <div class="row mb-3">
                               <div class="col">
                                   <label for="" class="form-label">Telegram</label>
                                   <input type="text" class="form-control" placeholder="Enter Phone Number"
                                       name="telegram" />
                               </div>
                           </div>
                           <div class="row mb-3">
                               <div class="col">
                                   <label for="" class="form-label">Viber</label>
                                   <input type="text" class="form-control" placeholder="Enter Phone Number"
                                       name="viber" />
                               </div>
                           </div>
                           <div class="row mb-3">
                               <div class="col">
                                   <label for="" class="form-label">Whatsapp</label>
                                   <input type="text" class="form-control" placeholder="Enter Phone Number"
                                       name="whatsapp" />
                               </div>
                           </div>
                           <div class="row mb-3">
                               <div class="col">
                                   <label for="" class="form-label">Wechat</label>
                                   <input type="file" name="wechat" class="form-control" id="">
                               </div>
                           </div>
                       </div>
                       <hr>
                        <!-- Fourth Row -->
                        <div class="row mb-3">
                           <div class="group-header">
                               <h5 class="group-title">PROFILE: </h5>
                           </div>
                           <div class="col">
                               <label for="" class="form-label">Profile</label>
                               <input type="file" name="profile" class="form-control" id="">
                           </div>
                       </div>
                   </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade del_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete {{ $ent }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h5>Are you sure you want to delete this {{ $ent }}?</h5>
                    <form class="del_form">
                        <input type="hidden" name="id" class="form-control">

                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn btn-primary me-1">Yes</button>
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @parent

    <script src="{{ asset('js/Admin/Schedules.js') }}"></script>
@endsection
