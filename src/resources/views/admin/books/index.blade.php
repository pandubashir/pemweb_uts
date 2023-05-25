@extends('layouts.admin')
@section('content')
@can('teacher_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.teacher.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.teacher.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.teacher.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-teacher">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.teacher.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.teacher.fields.teachername') }}
                    </th>
                    <th>
                        {{ trans('cruds.teacher.fields.nim') }}
                    </th>
                    <th>
                        {{ trans('cruds.teacher.fields.jenis_kelamin') }}
                    </th>
                    <th>
                        {{ trans('cruds.teacher.fields.jurusan') }}
                    </th>
                    <th>
                        {{ trans('cruds.teacher.fields.fakultas') }}
                    </th>
                    <th>
                        {{ trans('cruds.teacher.fields.jalur') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
</div>

</script>
@endsection