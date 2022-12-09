@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sobre nós</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum ab, velit non dolorum repudiandae voluptate architecto perspiciatis enim nisi expedita quam ducimus ea ipsa. Magni earum consectetur explicabo. Nisi, consectetur?   
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection