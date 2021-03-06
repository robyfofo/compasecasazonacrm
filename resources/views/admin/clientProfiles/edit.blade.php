@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.clientProfile.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.client-profiles.update", [$clientProfile->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="agente_id">{{ trans('cruds.clientProfile.fields.agente') }}</label>
                <select class="form-control select2 {{ $errors->has('agente') ? 'is-invalid' : '' }}" name="agente_id" id="agente_id" required>
                    @foreach($agentes as $id => $agente)
                        <option value="{{ $id }}" {{ ($clientProfile->agente ? $clientProfile->agente->id : old('agente_id')) == $id ? 'selected' : '' }}>{{ $agente }}</option>
                    @endforeach
                </select>
                @if($errors->has('agente'))
                    <span class="text-danger">{{ $errors->first('agente') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.agente_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="filiale_id">{{ trans('cruds.clientProfile.fields.filiale') }}</label>
                <select class="form-control select2 {{ $errors->has('filiale') ? 'is-invalid' : '' }}" name="filiale_id" id="filiale_id" required>
                    @foreach($filiales as $id => $filiale)
                        <option value="{{ $id }}" {{ ($clientProfile->filiale ? $clientProfile->filiale->id : old('filiale_id')) == $id ? 'selected' : '' }}>{{ $filiale }}</option>
                    @endforeach
                </select>
                @if($errors->has('filiale'))
                    <span class="text-danger">{{ $errors->first('filiale') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.filiale_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tipo_id">{{ trans('cruds.clientProfile.fields.tipo') }}</label>
                <select class="form-control select2 {{ $errors->has('tipo') ? 'is-invalid' : '' }}" name="tipo_id" id="tipo_id">
                    @foreach($tipos as $id => $tipo)
                        <option value="{{ $id }}" {{ ($clientProfile->tipo ? $clientProfile->tipo->id : old('tipo_id')) == $id ? 'selected' : '' }}>{{ $tipo }}</option>
                    @endforeach
                </select>
                @if($errors->has('tipo'))
                    <span class="text-danger">{{ $errors->first('tipo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.tipo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ruolo">{{ trans('cruds.clientProfile.fields.ruolo') }}</label>
                <input class="form-control {{ $errors->has('ruolo') ? 'is-invalid' : '' }}" type="text" name="ruolo" id="ruolo" value="{{ old('ruolo', $clientProfile->ruolo) }}">
                @if($errors->has('ruolo'))
                    <span class="text-danger">{{ $errors->first('ruolo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.ruolo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="settore">{{ trans('cruds.clientProfile.fields.settore') }}</label>
                <input class="form-control {{ $errors->has('settore') ? 'is-invalid' : '' }}" type="text" name="settore" id="settore" value="{{ old('settore', $clientProfile->settore) }}">
                @if($errors->has('settore'))
                    <span class="text-danger">{{ $errors->first('settore') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.settore_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="indirizzo">{{ trans('cruds.clientProfile.fields.indirizzo') }}</label>
                <input class="form-control {{ $errors->has('indirizzo') ? 'is-invalid' : '' }}" type="text" name="indirizzo" id="indirizzo" value="{{ old('indirizzo', $clientProfile->indirizzo) }}">
                @if($errors->has('indirizzo'))
                    <span class="text-danger">{{ $errors->first('indirizzo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.indirizzo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="civico">{{ trans('cruds.clientProfile.fields.civico') }}</label>
                <input class="form-control {{ $errors->has('civico') ? 'is-invalid' : '' }}" type="text" name="civico" id="civico" value="{{ old('civico', $clientProfile->civico) }}">
                @if($errors->has('civico'))
                    <span class="text-danger">{{ $errors->first('civico') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.civico_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cap">{{ trans('cruds.clientProfile.fields.cap') }}</label>
                <input class="form-control {{ $errors->has('cap') ? 'is-invalid' : '' }}" type="text" name="cap" id="cap" value="{{ old('cap', $clientProfile->cap) }}">
                @if($errors->has('cap'))
                    <span class="text-danger">{{ $errors->first('cap') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.cap_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comune_id">{{ trans('cruds.clientProfile.fields.comune') }}</label>
                <select class="form-control select2 {{ $errors->has('comune') ? 'is-invalid' : '' }}" name="comune_id" id="comune_id">
                    @foreach($comunes as $id => $comune)
                        <option value="{{ $id }}" {{ ($clientProfile->comune ? $clientProfile->comune->id : old('comune_id')) == $id ? 'selected' : '' }}>{{ $comune }}</option>
                    @endforeach
                </select>
                @if($errors->has('comune'))
                    <span class="text-danger">{{ $errors->first('comune') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.comune_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="provincia_id">{{ trans('cruds.clientProfile.fields.provincia') }}</label>
                <select class="form-control select2 {{ $errors->has('provincia') ? 'is-invalid' : '' }}" name="provincia_id" id="provincia_id">
                    @foreach($provincias as $id => $provincia)
                        <option value="{{ $id }}" {{ ($clientProfile->provincia ? $clientProfile->provincia->id : old('provincia_id')) == $id ? 'selected' : '' }}>{{ $provincia }}</option>
                    @endforeach
                </select>
                @if($errors->has('provincia'))
                    <span class="text-danger">{{ $errors->first('provincia') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.provincia_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="azienda">{{ trans('cruds.clientProfile.fields.azienda') }}</label>
                <input class="form-control {{ $errors->has('azienda') ? 'is-invalid' : '' }}" type="text" name="azienda" id="azienda" value="{{ old('azienda', $clientProfile->azienda) }}">
                @if($errors->has('azienda'))
                    <span class="text-danger">{{ $errors->first('azienda') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.azienda_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="piva">{{ trans('cruds.clientProfile.fields.piva') }}</label>
                <input class="form-control {{ $errors->has('piva') ? 'is-invalid' : '' }}" type="text" name="piva" id="piva" value="{{ old('piva', $clientProfile->piva) }}">
                @if($errors->has('piva'))
                    <span class="text-danger">{{ $errors->first('piva') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.piva_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="telefono">{{ trans('cruds.clientProfile.fields.telefono') }}</label>
                <input class="form-control {{ $errors->has('telefono') ? 'is-invalid' : '' }}" type="text" name="telefono" id="telefono" value="{{ old('telefono', $clientProfile->telefono) }}">
                @if($errors->has('telefono'))
                    <span class="text-danger">{{ $errors->first('telefono') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.telefono_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cellulare">{{ trans('cruds.clientProfile.fields.cellulare') }}</label>
                <input class="form-control {{ $errors->has('cellulare') ? 'is-invalid' : '' }}" type="text" name="cellulare" id="cellulare" value="{{ old('cellulare', $clientProfile->cellulare) }}">
                @if($errors->has('cellulare'))
                    <span class="text-danger">{{ $errors->first('cellulare') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.cellulare_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fax">{{ trans('cruds.clientProfile.fields.fax') }}</label>
                <input class="form-control {{ $errors->has('fax') ? 'is-invalid' : '' }}" type="text" name="fax" id="fax" value="{{ old('fax', $clientProfile->fax) }}">
                @if($errors->has('fax'))
                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.fax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="livello">{{ trans('cruds.clientProfile.fields.livello') }}</label>
                <input class="form-control {{ $errors->has('livello') ? 'is-invalid' : '' }}" type="text" name="livello" id="livello" value="{{ old('livello', $clientProfile->livello) }}">
                @if($errors->has('livello'))
                    <span class="text-danger">{{ $errors->first('livello') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.livello_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.clientProfile.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $clientProfile->note) }}</textarea>
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="birthday">{{ trans('cruds.clientProfile.fields.birthday') }}</label>
                <input class="form-control date {{ $errors->has('birthday') ? 'is-invalid' : '' }}" type="text" name="birthday" id="birthday" value="{{ old('birthday', $clientProfile->birthday) }}">
                @if($errors->has('birthday'))
                    <span class="text-danger">{{ $errors->first('birthday') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.birthday_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nazione">{{ trans('cruds.clientProfile.fields.nazione') }}</label>
                <input class="form-control {{ $errors->has('nazione') ? 'is-invalid' : '' }}" type="text" name="nazione" id="nazione" value="{{ old('nazione', $clientProfile->nazione) }}">
                @if($errors->has('nazione'))
                    <span class="text-danger">{{ $errors->first('nazione') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.nazione_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nome_2">{{ trans('cruds.clientProfile.fields.nome_2') }}</label>
                <input class="form-control {{ $errors->has('nome_2') ? 'is-invalid' : '' }}" type="text" name="nome_2" id="nome_2" value="{{ old('nome_2', $clientProfile->nome_2) }}">
                @if($errors->has('nome_2'))
                    <span class="text-danger">{{ $errors->first('nome_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.nome_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cognome_2">{{ trans('cruds.clientProfile.fields.cognome_2') }}</label>
                <input class="form-control {{ $errors->has('cognome_2') ? 'is-invalid' : '' }}" type="text" name="cognome_2" id="cognome_2" value="{{ old('cognome_2', $clientProfile->cognome_2) }}">
                @if($errors->has('cognome_2'))
                    <span class="text-danger">{{ $errors->first('cognome_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.cognome_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="affinita">{{ trans('cruds.clientProfile.fields.affinita') }}</label>
                <input class="form-control {{ $errors->has('affinita') ? 'is-invalid' : '' }}" type="text" name="affinita" id="affinita" value="{{ old('affinita', $clientProfile->affinita) }}">
                @if($errors->has('affinita'))
                    <span class="text-danger">{{ $errors->first('affinita') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.affinita_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_2">{{ trans('cruds.clientProfile.fields.email_2') }}</label>
                <input class="form-control {{ $errors->has('email_2') ? 'is-invalid' : '' }}" type="text" name="email_2" id="email_2" value="{{ old('email_2', $clientProfile->email_2) }}">
                @if($errors->has('email_2'))
                    <span class="text-danger">{{ $errors->first('email_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.email_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comune_2_id">{{ trans('cruds.clientProfile.fields.comune_2') }}</label>
                <select class="form-control select2 {{ $errors->has('comune_2') ? 'is-invalid' : '' }}" name="comune_2_id" id="comune_2_id">
                    @foreach($comune_2s as $id => $comune_2)
                        <option value="{{ $id }}" {{ ($clientProfile->comune_2 ? $clientProfile->comune_2->id : old('comune_2_id')) == $id ? 'selected' : '' }}>{{ $comune_2 }}</option>
                    @endforeach
                </select>
                @if($errors->has('comune_2'))
                    <span class="text-danger">{{ $errors->first('comune_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.comune_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="prov_2_id">{{ trans('cruds.clientProfile.fields.prov_2') }}</label>
                <select class="form-control select2 {{ $errors->has('prov_2') ? 'is-invalid' : '' }}" name="prov_2_id" id="prov_2_id">
                    @foreach($prov_2s as $id => $prov_2)
                        <option value="{{ $id }}" {{ ($clientProfile->prov_2 ? $clientProfile->prov_2->id : old('prov_2_id')) == $id ? 'selected' : '' }}>{{ $prov_2 }}</option>
                    @endforeach
                </select>
                @if($errors->has('prov_2'))
                    <span class="text-danger">{{ $errors->first('prov_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.prov_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="indirizzo_2">{{ trans('cruds.clientProfile.fields.indirizzo_2') }}</label>
                <input class="form-control {{ $errors->has('indirizzo_2') ? 'is-invalid' : '' }}" type="text" name="indirizzo_2" id="indirizzo_2" value="{{ old('indirizzo_2', $clientProfile->indirizzo_2) }}">
                @if($errors->has('indirizzo_2'))
                    <span class="text-danger">{{ $errors->first('indirizzo_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.indirizzo_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="civico_2">{{ trans('cruds.clientProfile.fields.civico_2') }}</label>
                <input class="form-control {{ $errors->has('civico_2') ? 'is-invalid' : '' }}" type="text" name="civico_2" id="civico_2" value="{{ old('civico_2', $clientProfile->civico_2) }}">
                @if($errors->has('civico_2'))
                    <span class="text-danger">{{ $errors->first('civico_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.civico_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cap_2">{{ trans('cruds.clientProfile.fields.cap_2') }}</label>
                <input class="form-control {{ $errors->has('cap_2') ? 'is-invalid' : '' }}" type="text" name="cap_2" id="cap_2" value="{{ old('cap_2', $clientProfile->cap_2) }}">
                @if($errors->has('cap_2'))
                    <span class="text-danger">{{ $errors->first('cap_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.cap_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="telefono_2">{{ trans('cruds.clientProfile.fields.telefono_2') }}</label>
                <input class="form-control {{ $errors->has('telefono_2') ? 'is-invalid' : '' }}" type="text" name="telefono_2" id="telefono_2" value="{{ old('telefono_2', $clientProfile->telefono_2) }}">
                @if($errors->has('telefono_2'))
                    <span class="text-danger">{{ $errors->first('telefono_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.telefono_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cellulare_2">{{ trans('cruds.clientProfile.fields.cellulare_2') }}</label>
                <input class="form-control {{ $errors->has('cellulare_2') ? 'is-invalid' : '' }}" type="text" name="cellulare_2" id="cellulare_2" value="{{ old('cellulare_2', $clientProfile->cellulare_2) }}">
                @if($errors->has('cellulare_2'))
                    <span class="text-danger">{{ $errors->first('cellulare_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.cellulare_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fax_2">{{ trans('cruds.clientProfile.fields.fax_2') }}</label>
                <input class="form-control {{ $errors->has('fax_2') ? 'is-invalid' : '' }}" type="text" name="fax_2" id="fax_2" value="{{ old('fax_2', $clientProfile->fax_2) }}">
                @if($errors->has('fax_2'))
                    <span class="text-danger">{{ $errors->first('fax_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.fax_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="stato">{{ trans('cruds.clientProfile.fields.stato') }}</label>
                <input class="form-control {{ $errors->has('stato') ? 'is-invalid' : '' }}" type="number" name="stato" id="stato" value="{{ old('stato', $clientProfile->stato) }}" step="1">
                @if($errors->has('stato'))
                    <span class="text-danger">{{ $errors->first('stato') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.stato_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="files">{{ trans('cruds.clientProfile.fields.files') }}</label>
                <div class="needsclick dropzone {{ $errors->has('files') ? 'is-invalid' : '' }}" id="files-dropzone">
                </div>
                @if($errors->has('files'))
                    <span class="text-danger">{{ $errors->first('files') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.files_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_istituzionale">{{ trans('cruds.clientProfile.fields.email_istituzionale') }}</label>
                <input class="form-control {{ $errors->has('email_istituzionale') ? 'is-invalid' : '' }}" type="email" name="email_istituzionale" id="email_istituzionale" value="{{ old('email_istituzionale', $clientProfile->email_istituzionale) }}">
                @if($errors->has('email_istituzionale'))
                    <span class="text-danger">{{ $errors->first('email_istituzionale') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientProfile.fields.email_istituzionale_helper') }}</span>
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

@section('scripts')
<script>
    var uploadedFilesMap = {}
Dropzone.options.filesDropzone = {
    url: '{{ route('admin.client-profiles.storeMedia') }}',
    maxFilesize: 3, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 3
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="files[]" value="' + response.name + '">')
      uploadedFilesMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedFilesMap[file.name]
      }
      $('form').find('input[name="files[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($clientProfile) && $clientProfile->files)
          var files =
            {!! json_encode($clientProfile->files) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="files[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection