@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading" id="dash">@lang('quickadmin.qa_dashboard')</div>

                <div class="panel-body">
                    @lang('quickadmin.qa_dashboard_text')
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            Activity
        </div>

        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Action</th>
                        <th>Entity Type</th>
                        <th>Entity Name</th>
                        <th>Previous Name</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $activity->user->name ?? 'System' }}</td>
                        <td>{{ ucfirst($activity->action) }}</td>
                        <td>{{ ucfirst($activity->entity_type) }}</td>
                        <td>{{ $activity->entity_name }}</td>
                        <td>{{ $activity->previous_name ?? 'N/A' }}</td>
                        <td>{{ $activity->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center" style="margin: -20px 0;">
                {{ $activities->links('pagination::bootstrap-4') }}
            </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            Your Profile
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th>@lang('quickadmin.users.fields.name')</th>
                            <td field-key='name'>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.email')</th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.role')</th>
                            <td field-key='role'>
                            @if ($user->role_id == 1)
                                Administrator
                            @elseif ($user->role_id >= 2)
                                Simple User
                            @else
                                Unknown
                            @endif
                            </td>

                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#folders" aria-controls="folders" role="tab" data-toggle="tab">Folders</a></li>
<li role="presentation" class=""><a href="#files" aria-controls="files" role="tab" data-toggle="tab">Files</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="folders">
<table class="table table-bordered table-striped {{ count($folders) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.folders.fields.name')</th>
                        <th>Date Created</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($folders) > 0)
            @foreach ($folders as $folder)
                <tr data-entry-id="{{ $folder->id }}">
                    <td field-key='name'>{{ $folder->name }}</td>
                                <td field-key='created_on'>{{ $folder->created_at->format('h:i A, M/d/Y') }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['folders.restore', $folder->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['folders.perma_del', $folder->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('folders.show',[$folder->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('folders.edit',[$folder->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['folders.destroy', $folder->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="files">
<table class="table table-bordered table-striped {{ count($files) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>File Name</th>
                        <th>Folder</th>
                        <th>Date Created</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($files) > 0)
            @foreach ($files as $file)
                <tr data-entry-id="{{ $file->id }}">
                <td field-key='filename'> @foreach($file->getMedia('filename') as $media)
                                    <p class="form-group">
                                        <a href="{{url('/admin/' . $file->uuid . '/download')}}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                    </p>
                                @endforeach</td>
                                <td field-key='folder'>{{ $file->folder->name }}</td>
                                <td field-key='created_on'>{{ $file->created_at->format('h:i A, M/d/Y') }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['files.restore', $file->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['files.perma_del', $file->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('files.show',[$file->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('files.edit',[$file->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['files.destroy', $file->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="9">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>


@stop

