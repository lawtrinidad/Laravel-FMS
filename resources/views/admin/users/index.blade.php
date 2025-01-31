@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>
    
    <!-- Styled box for Total Users and Add New button aligned side by side -->
    <style>
    .total-users-container {
        display: flex; /* Aligns the child elements horizontally */
        align-items: center; /* Vertically centers the content */
        margin-bottom: 20px; /* Adds space below the container */
    }

    .total-users-box {
        width: 200px;
        height: 30px; /* Set height to match the Add New button */
        border: 2px solid maroon; 
        padding: 10px 20px; /* Adjust padding for spacing */
        margin-right: 20px; /* Adds space between Total Users box and button */
        text-align: right;  /* Align content to the right */
        font-size: 15px; 
        border-radius: 10px; 
        display: flex;
        align-items: center; /* Vertically center the content */
    }

    .total-users-box strong {
        display: inline-block;
        margin-right: 5px; /* Adjust spacing between label and number */
    }

    /* Align the "Add New" button to the right */
    .add-new-btn {
        text-align: right; /* Align to the right */
        height: 30px; /* Set height to match Total Users box */
    }

    .btn-maroon {
        background-color: maroon;
        color: white;
        border: none;
        height: 100%; /* Full height to match the Add New button's height */
    }
    .btn-maroon:hover {
        background-color: darkred;
    }
    </style>

    <!-- Display Total Users and Add New button side by side -->
    <div class="total-users-container">
        <div class="total-users-box">
            <strong>Total Users:</strong> {{ $users->count() }} <!-- Adjusted for alignment -->
        </div>

        @can('user_create')
        <div class="add-new-btn">
            <a href="{{ route('admin.users.create') }}" class="btn btn-maroon">@lang('quickadmin.qa_add_new')</a> <!-- Add New button in maroon -->
        </div>
        @endcan
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($users) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('user_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.users.fields.name')</th>
                        <th>@lang('quickadmin.users.fields.email')</th>
                        <th>@lang('quickadmin.users.fields.role')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr data-entry-id="{{ $user->id }}">
                                @can('user_delete')
                                    <td></td>
                                @endcan

                                <td field-key='name'>{{ $user->name }}</td>
                                <td field-key='email'>{{ $user->email }}</td>
                                <td field-key='role'>{{ $user->role->title ?? '' }}</td>
                                <td>
                                    @can('user_view')
                                    <a href="{{ route('admin.users.show',[$user->id]) }}" class="btn btn-xs btn-warning">@lang('quickadmin.qa_view')</a> <!-- View button in yellow -->
                                    @endcan
                                    @can('user_edit')
                                    <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-xs btn-warning">@lang('quickadmin.qa_edit')</a> <!-- Edit button in yellow -->
                                    @endcan
                                    @can('user_delete')
                                    {!! Form::open([
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.users.destroy', $user->id]
                                    ]) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), ['class' => 'btn btn-xs btn-maroon']) !!} <!-- Delete button in maroon -->
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('user_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.users.mass_destroy') }}';
        @endcan
    </script>
@endsection
