
@extends('main')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="margin-top:20px;">
                <div class="card-header">
                    <i class="fa fa-user"></i> <strong>Registrar Usuario</strong>
                </div>
                <div class="container">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Tipo de Rol</label>
                                        <div class="col-md-9">
                                            <select name="role" id="role" class="form-control @error('role') is-invalid @enderror" value="{{ old('role') }}">
                                                <option value="">Seleccione un Rol</option>
                                                @foreach ($roles as $rol)
                                                    <option value="{{ $rol['_id'] }}">{{ $rol['name'] }}</option>
                                                @endforeach
                                                @error('role')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </select>
                                            
                                        </div>
                                        
                                    </div>

                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Nombre</label>
                                        <div class="col-md-9">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ingrese Nombre Completo">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Foto de Perfil</label>
                                        <div class="col-md-9">
                                            <input id="image_profile" type="file" class="form-control" name="image_profile" accept="image/*">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Identificacion</label>
                                        <div class="col-md-9">
                                            <input id="identification" type="number" class="form-control @error('identification') is-invalid @enderror" name="identification" value="{{ old('identification') }}" required autocomplete="identification" autofocus placeholder="Ingrese Identificacion">
                                            @error('identification')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Celular</label>
                                        <div class="col-md-9">
                                            <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Ingrese Celular">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Teléfono Fijo</label>
                                        <div class="col-md-9">
                                            <input id="cell_phone" type="number" class="form-control @error('cell_phone') is-invalid @enderror" name="cell_phone" value="{{ old('cell_phone') }}" required autocomplete="cell_phone" autofocus placeholder="Ingrese Teléfono Fijo">
                                            @error('cell_phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    


                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Direccion</label>
                                        <div class="col-md-9">
                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder="Ingrese Direccion">
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Email</label>
                                        <div class="col-md-9">

                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Contraseña</label>
                                        <div class="col-md-9">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Confirme Contraseña</label>
                                        <div class="col-md-9">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme Contraseña">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col text-right">
                                            <button type="submit"  class="btn btn-outline-success">Guardar</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
