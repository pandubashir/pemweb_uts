@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.teacher.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.teacher.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.id') }}
                        </th>
                        <td>
                            {{ $teacher->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.teachername') }}
                        </th>
                        <td>
                            {{ $teacher->teachername }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.id t') }}
                        </th>
                        <td>
                            {{ $teacher->id t }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.jenis_kelamin') }}
                        </th>
                        <td>
                            {{ $teacher->jenis_kelamin }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.jurusan') }}
                        </th>
                        <td>
                            {{ $teacher->jurusan }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.fakultas') }}
                        </th>
                        <td>
                            {{ $teacher->fakultas }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.teacher.fields.jalur') }}
                        </th>
                        <td>
                            {{ $teacher->jalur }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.beasiswas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>


@endsection