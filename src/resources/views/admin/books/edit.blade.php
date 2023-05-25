@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.teacher.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.teacher.update", [$teacher->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="teachername">{{ trans('cruds.teacher.fields.teacheraname') }}</label>
                <input class="form-control {{ $errors->has('teachername') ? 'is-invalid' : '' }}" type="text" name="teachername" id="teachername" value="{{ old('teachername', $teacher->teachername) }}" required>
                @if($errors->has('teachername'))
                    <div class="invalid-feedback">
                        {{ $errors->first('teachername') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teacher.fields.teachername_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nim">{{ trans('cruds.teacher.fields.nim') }}</label>
                <input class="form-control {{ $errors->has('nim') ? 'is-invalid' : '' }}" type="text" name="nim" id="nim" value="{{ old('nim', $beasiswa->nim) }}" required>
                @if($errors->has('nim'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nim') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teacher.fields.nim_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="jenis_kelamin">{{ trans('cruds.teacher.fields.jenis_kelamin') }}</label>
                <input class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}" type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin', $beasiswa->jenis_kelamin) }}" required>
                @if($errors->has('jenis_kelamin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jenis_kelamin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teacher.fields.jenis_kelamin_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="jurusan">{{ trans('crudsteacher.fields.jurusan') }}</label>
                <input class="form-control {{ $errors->has('jurusan') ? 'is-invalid' : '' }}" type="text" name="jurusan" id="jurusan" value="{{ old('jurusan', $beasiswa->jurusan) }}" required>
                @if($errors->has('jurusan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jurusan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teacher.fields.jurusan_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="fakultas">{{ trans('cruds.teacher.fields.fakultas') }}</label>
                <input class="form-control {{ $errors->has('fakultas') ? 'is-invalid' : '' }}" type="text" name="fakultas" id="fakultas" value="{{ old('fakultas', $beasiswa->fakultas) }}" required>
                @if($errors->has('fakultas'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fakultas') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teacher.fields.fakultas_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="jalur">{{ trans('cruds.teacher.fields.jalur') }}</label>
                <input class="form-control {{ $errors->has('jalur') ? 'is-invalid' : '' }}" type="text" name="jalur" id="jalur" value="{{ old('jalur', $beasiswa->jalur) }}" required>
                @if($errors->has('jalur'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jalur') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teacher.fields.jalur_helper') }}</span>
            </div>


            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection