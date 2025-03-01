@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center" style="position: relative;">
        <h3 class="page-title">@lang('quickadmin.roles.title')</h3>
            <!-- Search Bar -->
            <div class="search-container">
                <div class="input-group">
                    <input type="text" id="role-search" class="form-control search-input" placeholder="Search Roles">
                    <span class="search-icon">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
    </div>

    <!-- Button Container -->
    <div class="button-container">
        <button id="select-all" class="btn btn-outline-secondary">
            <input type="checkbox" id="select-all-checkbox"> Select All
        </button>
        @can('role_create')
            <a href="{{ route('admin.roles.create') }}" class="btn btn-success"><i class="fa fa-plus"></i>Add New</a>
        @endcan

        <button id="delete-selected" class="btn btn-outline-danger">
            <i class="fa fa-trash"></i> Delete Selected
        </button>

    </div>

    <div class="d-flex flex-wrap justify-content-start gap-3" id="role-list">
    @if (count($roles) > 0)
        @foreach ($roles as $role)
            <div class="role-card shadow-sm rounded" data-role-title="{{ $role->title }}">
                <div class="role-card-left">
                    <input type="checkbox" class="role-checkbox" data-role-id="{{ $role->id }}">
                    <i id="userfa" class="fa fa-user"></i>
                </div>
                <div class="role-card-right">
                    <h5 class="role-title">{{ $role->title }}</h5>
                    <div class="d-flex justify-content-between">
                        <div class="dropdown">
                            <button id="dropBtn"  class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{ $role->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                ⋮
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton{{ $role->id }}">
                                @can('role_view')
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.roles.show', [$role->id]) }}"><i class="fa fa-eye"></i>View</a>
                                    </li>
                                @endcan
                                @can('role_edit')
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.roles.edit', [$role->id]) }}"><i class="fa fa-pencil"></i>Edit</a>
                                    </li>
                                @endcan
                                @can('role_delete')
                                    <li>
                                        {!! Form::open(['method' => 'DELETE', 'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');", 'route' => ['admin.roles.destroy', $role->id]]) !!}
                                            <button id="dropDel" type="submit" class="dropdown-item delete-btn">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        {!! Form::close() !!}
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>@lang('quickadmin.qa_no_entries_in_table')</p>
    @endif
</div>

    <style>
        .dropdown{
            position: static;
            margin-left: auto; 
            border-radius: 16px;
        }
        .dropdown:hover{
            background-color: #FAF9F6;
        }
    
        .dropdown-menu {
            z-index: 1050;
            border-radius: 8px;
        }
        #dropBtn{
            background-color: transparent;
            color: #005B5F;
        }
        #dropDel {
        border: none;
        color:#333333;
        background-color: transparent;
        margin-left: 14px;
        padding-right: 40px;
        }
        .dropdown-menu>li>a {
        color: #333333;
    }
        #dropDel:hover{
            color: #800000;
        }

        .role-card {
            max-width: 300px;
            width: 100%;
        }
        .d-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }
        /* Styling for search bar */
        .search-container {
            position: absolute;
            right: 0;
            width: 25%;
            margin-left: 20px;
            margin-top: 30px;
        }

        .form-control {
            font-size: 1rem;
            padding: 10px;
            border-radius: 5px;
            border: none;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); 
        }
    
        /* Button container styling */
        .button-container {
            padding: 15px;
            border-radius: 10px;
            display: flex;
            gap: 10px;
            align-items: center;
            margin-left: -15px;
            margin-bottom: 20px;
        }

        .button-container .btn {
            color: white;
            font-weight:normal;
            border: none;
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: smaller;
        }

        .btn-success {
            background-color: #f39c12;
            color: #333333;
        }
        .btn-success:hover{
            background-color:rgb(226, 142, 7);
        }

        .btn-outline-secondary {
            background-color: transparent;
            color: #333333 !important;
            font-size: small !important;
        }
        .btn-outline-secondary:focus {
            box-shadow: none;
        }

        .btn-outline-danger {
            background-color: #800000;
        }

        .d-flex {
            display: flex;
            flex-wrap: wrap;
            justify-content: start;
            gap: 20px;
        }

        .role-card {
            display: flex;
            align-items: center;
            background:rgb(245, 239, 239) ;
            border-radius: 10px;
            border: none;
            width: 350px;
            height: 75px;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            
        }
        .role-card-left {
            background: transparent;
            padding: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 150%;
            position: relative;
        }
        .role-card-right {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Pushes content apart */
            flex-grow: 1; /* Take up all available space */
            padding-right: 0; /* Remove padding on the right */
        }
        #userfa{
            margin-left:16px;
            font-size:1.7rem
        }
        .role-checkbox {
            width: 20px;
            height: 20px;
            margin-left: 12px;
            margin-top: 0 !important;
        }
        /* Ensure checkbox inside "Select All" button is clickable */
        #select-all-checkbox {
            width: 16px;
            height: 16px;
            cursor: pointer;
        }
    </style>

    <script>
        // Search functionality
        document.getElementById('role-search').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const roles = document.querySelectorAll('.role-card');

            roles.forEach(function(role) {
                const roleTitle = role.getAttribute('data-role-title').toLowerCase();
                if (roleTitle.includes(searchTerm)) {
                    role.style.display = ''; // Show matching role
                } else {
                    role.style.display = 'none'; // Hide non-matching role
                }
            });
        });

        document.getElementById("select-all").addEventListener("click", function(event) {
            event.preventDefault();
            let selectAllCheckbox = document.getElementById("select-all-checkbox");
            selectAllCheckbox.checked = !selectAllCheckbox.checked;
            document.querySelectorAll(".role-checkbox").forEach(checkbox => checkbox.checked = selectAllCheckbox.checked);
        });

        document.getElementById("delete-selected").addEventListener("click", function() {
            if (!confirm("Are you sure you want to delete selected roles?")) {
                return;
            }

            let selectedIds = [];
            document.querySelectorAll(".role-checkbox:checked").forEach(checkbox => {
                selectedIds.push(checkbox.getAttribute("data-role-id"));
            });

            if (selectedIds.length === 0) {
                alert("No roles selected.");
                return;
            }

            // Send AJAX request to delete roles
            fetch("{{ route('admin.roles.mass_destroy') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ ids: selectedIds })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Roles deleted successfully.");
                    location.reload(); // Refresh the page after successful deletion
                } else {
                    alert("An error occurred while deleting roles.");
                }
            })
            .catch(error => console.error("Error:", error));
        });
    </script>
@stop
