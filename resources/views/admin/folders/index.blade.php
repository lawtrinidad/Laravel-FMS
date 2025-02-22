@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.folders.title')</h3>
    @can('folder_create')
        <p>
            <a href="{{ route('admin.folders.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body">
            <input type="text" id="folderSearch" class="form-control mb-3" placeholder="Search folders...">
            <div class="d-flex justify-content-between mb-3">
                <button id="deleteSelected" class="btn btn-danger" disabled>Delete Selected</button>
            </div>
            <div class="row">
                @if (count($folders) > 0)
                    @foreach ($folders as $folder)
                        <div class="col-md-4">
                            <div class="card folder-card mb-3">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <input type="checkbox" class="folder-checkbox" data-folder-id="{{ $folder->id }}">
                                    <a href="{{ route('admin.folders.show', [$folder->id]) }}" class="folder-name">{{ $folder->name }}</a>
                                    <div class="actions">
                                        @can('folder_edit')
                                            <a href="{{ route('admin.folders.edit', [$folder->id]) }}" class="btn btn-sm btn-info">Rename</a>
                                        @endcan
                                        @can('folder_delete')
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.folders.destroy', $folder->id], 'style' => 'display:inline']) !!}
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12 text-center">@lang('quickadmin.qa_no_entries_in_table')</div>
                @endif
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        document.getElementById('folderSearch').addEventListener('keyup', function() {
            let filter = this.value.toLowerCase();
            let folders = document.querySelectorAll('.folder-card');
            
            folders.forEach(folder => {
                let name = folder.querySelector('.folder-name').textContent.toLowerCase();
                if (name.includes(filter)) {
                    folder.parentElement.style.display = '';
                } else {
                    folder.parentElement.style.display = 'none';
                }
            });
        });

        // Handle the checkbox selection
        const checkboxes = document.querySelectorAll('.folder-checkbox');
        const deleteButton = document.getElementById('deleteSelected');
        
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const selectedCheckboxes = document.querySelectorAll('.folder-checkbox:checked');
                deleteButton.disabled = selectedCheckboxes.length === 0;
            });
        });

        // Handle delete selected folders (using checkboxes)
        document.getElementById('deleteSelected').addEventListener('click', function() {
            const selectedIds = [];
            document.querySelectorAll('.folder-checkbox:checked').forEach(checkbox => {
                selectedIds.push(checkbox.getAttribute('data-folder-id'));
            });

            if (selectedIds.length > 0) {
                if (confirm('Are you sure you want to delete the selected folders?')) {
                    // Call your delete route for selected folders using AJAX or submit form
                    fetch("{{ route('admin.folders.mass_destroy') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ ids: selectedIds })
                    }).then(response => response.json())
                    .then(data => {
                          location.reload(); // Reload the page after deletion
                    });
                }
            }
        });

        // Add custom CSS for styling the folder card and positioning elements
        const style = document.createElement('style');
        style.innerHTML = `
            .panel-body .row {
                margin-bottom: 20px; /* Adjust this value to your liking */
                margin-top: 30px; /* Add space above the first row */
            }

            .folder-card {
                margin-bottom: 20px; /* This will ensure space between each card */
                background-color: white; /* Set background color to white */
                border-left: 30px solid #652331; /* Extend left border to cover the checkbox */
                color: black; /* Set text color to black */
                height: 80px; /* Set a slimmer height for folder card */
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                position: relative;
                padding: 10px; /* Adjust padding */
                border-radius: 15px; /* Make the edges rounder */
                box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1), inset 1px 1px 5px rgba(0, 0, 0, 0.15); /* Add shadow for emboss effect */
            }

            .folder-card a.folder-name {
                color: black; /* Ensure folder name text is black */
                text-align: center; /* Center align folder name */
                font-weight: bold;
                position: absolute; /* Position the folder name */
                top: 50%; /* Place the folder name at the vertical center */
                left: 50%; /* Place the folder name at the horizontal center */
                transform: translate(-50%, -50%); /* Fine-tune positioning to center it */
                width: 100%;
            }

            .folder-card .actions {
                position: absolute;
                bottom: 5px; /* Position the buttons at the bottom */
                right: 15px; /* Move the buttons 10px to the left to avoid overlapping with rounded corner */
                display: flex;
                gap: 5px;
            }

            .folder-card .btn-info, .folder-card .btn-danger {
                color: white; /* Buttons with white text */
            }

            .folder-card input.folder-checkbox {
                position: absolute;
                top: 10px;
                left: 10px;
                z-index: 2;
                margin-left: -30px; /* Move the checkbox further to the left */
            }
            .folder-card .actions button {
                z-index: 3;
            }
        `;
        document.head.appendChild(style);
    </script>
@endsection
    
