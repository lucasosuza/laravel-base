@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Content Form -->
        <form action="/content" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <h2>Novo conteúdo</h2>
            <!-- Content title -->
            <div class="form-group">
                <label for="content" class="col-sm-3 control-label">Title</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="content-name" class="form-control">
                </div>
            </div>

            <!-- Add Content Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Adicionar conteúdo
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection