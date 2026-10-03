<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Management | VastraSync ERP</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
    
    <!-- Fonts & CSS Libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/modern-theme.css') }}">
    
    <style>
        .staff-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 13px;
            margin-right: 10px;
        }
        .role-badge {
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
        }
        .role-admin { background: #fee2e2; color: #991b1b; }
        .role-manager { background: #fef3c7; color: #92400e; }
        .role-pos { background: #e0e7ff; color: #3730a3; }
        .role-sales { background: #d1fae5; color: #065f46; }
        .role-super { background: #f3e8ff; color: #6b21a8; }
    </style>
</head>
<body>
    @include('Admin.sidebarmenu')

    <div id="main">
        @include('Admin.topnavbar')

        <!-- Page Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <div>
                <h4 class="font-weight-bold mb-1" style="color: #0f172a;">Staff Management</h4>
                <p class="text-muted mb-0" style="font-size: 13.5px;">Manage studio personnel, roles, branch access, and credentials.</p>
            </div>
            <div class="mt-3 mt-md-0">
                <button type="button" class="btn-modern-primary" data-toggle="modal" data-target="#addStaffModal">
                    <i class="fa-solid fa-user-plus"></i> Add New Staff Member
                </button>
            </div>
        </div>

        <!-- Session & Validation Alerts -->
        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-circle-check mr-2"></i> {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="font-weight-bold mb-1"><i class="fa-solid fa-triangle-exclamation mr-1"></i> Please correct the following errors:</div>
            <ul class="mb-0 pl-3">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <!-- Staff List Card -->
        <div class="content-box p-4">
            <div class="table-responsive">
                <table id="staffTable" class="table">
                    <thead>
                        <tr>
                            <th>Staff Member</th>
                            <th>Role</th>
                            <th>Branch</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Users as $user)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="staff-avatar">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <div class="font-weight-bold" style="color: #0f172a; font-size: 13.5px;">{{ $user->name }}</div>
                                        <small class="text-muted">{{ $user->email ?? 'No email recorded' }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if($user->role == 1)
                                    <span class="role-badge role-super"><i class="fa-solid fa-crown mr-1"></i> Super Admin</span>
                                @elseif($user->role == 2)
                                    <span class="role-badge role-admin"><i class="fa-solid fa-shield-halved mr-1"></i> Admin</span>
                                @elseif($user->role == 3)
                                    <span class="role-badge role-manager"><i class="fa-solid fa-briefcase mr-1"></i> Manager</span>
                                @elseif($user->role == 4)
                                    <span class="role-badge role-pos"><i class="fa-solid fa-cash-register mr-1"></i> POS Cashier</span>
                                @elseif($user->role == 5)
                                    <span class="role-badge role-sales"><i class="fa-solid fa-user-tag mr-1"></i> Sales Associate</span>
                                @else
                                    <span class="role-badge" style="background:#f1f5f9; color:#475569;">Staff</span>
                                @endif
                            </td>
                            <td>
                                <span class="badge" style="background: #f1f5f9; color: #334155; font-size: 12px; font-weight: 500; padding: 6px 10px; border-radius: 6px;">
                                    <i class="fa-solid fa-store mr-1 text-muted"></i>
                                    {{ $user->BranchData->name ?? 'Main Studio' }}
                                </span>
                            </td>
                            <td>
                                <span class="text-muted" style="font-size: 12.5px;">
                                    {{ \Carbon\Carbon::parse($user->created_at)->format('d M Y, h:i A') }}
                                </span>
                            </td>
                            <td>
                                @if($user->isactive == 1)
                                    <span class="badge-status-active"><i class="fa-solid fa-circle-check mr-1"></i> Active</span>
                                @else
                                    <span class="badge-status-inactive"><i class="fa-solid fa-circle-xmark mr-1"></i> Inactive</span>
                                @endif
                            </td>
                            <td class="text-center">
                                @if($user->isactive == 1)
                                <button type="button" class="btn-action-delete" title="Deactivate Staff" onclick="deletestaff('{{ $user->id }}')">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                                @else
                                <button type="button" class="btn btn-sm btn-outline-success" title="Restore Staff" onclick="Restorestaff('{{ $user->id }}')" style="border-radius: 8px;">
                                    <i class="fa-solid fa-arrow-rotate-left mr-1"></i> Restore
                                </button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Add Staff Modal -->
        <div class="modal fade" id="addStaffModal" tabindex="-1" role="dialog" aria-labelledby="addStaffModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form method="post" action="{{ route('newregistration') }}">
                        @csrf
                        <div class="modal-header">
                            <div>
                                <h5 class="modal-title font-weight-bold" id="addStaffModalTitle" style="color: #0f172a;">Add New Staff Member</h5>
                                <small class="text-muted">Create system credentials and assign branch permissions.</small>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="font-weight-bold" style="font-size: 13px;">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="registername" required placeholder="e.g. Ramesh Kumar" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="font-weight-bold" style="font-size: 13px;">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" required placeholder="e.g. ramesh@vastrasync.com" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="font-weight-bold" style="font-size: 13px;">Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" name="number" required placeholder="e.g. 9876543210" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="font-weight-bold" style="font-size: 13px;">Password <span class="text-danger">*</span></label>
                                    <input type="password" name="password" required placeholder="Enter strong password" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="font-weight-bold" style="font-size: 13px;">Role <span class="text-danger">*</span></label>
                                    <select class="form-control" name="role" required>
                                        <option value="2">Admin</option>
                                        <option value="3">Product Manager</option>
                                        <option value="4">POS Cashier</option>
                                        <option value="5" selected>Sales Associate</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="font-weight-bold" style="font-size: 13px;">Assigned Branch <span class="text-danger">*</span></label>
                                    <select class="form-control" name="branch" required>
                                        @foreach($Branches as $branch)
                                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="font-weight-bold" style="font-size: 13px;">Initial Status <span class="text-danger">*</span></label>
                                    <select class="form-control" name="status" required>
                                        <option value="1" selected>Active / Enabled</option>
                                        <option value="2">Disabled</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="font-weight-bold" style="font-size: 13px;">Address Details</label>
                                    <textarea name="address" rows="2" class="form-control" placeholder="Optional physical address..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn-modern-primary">
                                <i class="fa-solid fa-check mr-1"></i> Register Staff
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#staffTable').DataTable({
                "pageLength": 10,
                "ordering": true,
                "language": {
                    "search": "<i class='fa-solid fa-magnifying-glass mr-1 text-muted'></i> Search staff:",
                    "lengthMenu": "Show _MENU_ records",
                    "info": "Showing _START_ to _END_ of _TOTAL_ staff members",
                    "paginate": {
                        "previous": "<i class='fa-solid fa-chevron-left'></i>",
                        "next": "<i class='fa-solid fa-chevron-right'></i>"
                    }
                }
            });
        });

        function deletestaff(id) {
            if(confirm("Are you sure you want to deactivate this staff member?")) {
                $.ajax({
                    url: '{{ route("deletestaff") }}',
                    type: 'GET',
                    data: { 'id': id },
                    dataType: 'json',
                    success: function() {
                        location.reload();
                    },
                    error: function() {
                        alert("Could not update staff status. Please check your connection.");
                    }
                });
            }
        }

        function Restorestaff(id) {
            $.ajax({
                url: '{{ route("restorestaff") }}',
                type: 'GET',
                data: { 'id': id },
                dataType: 'json',
                success: function() {
                    location.reload();
                },
                error: function() {
                    alert("Could not restore staff member.");
                }
            });
        }
    </script>
</body>
</html>