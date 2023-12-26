<h1>Dúvida: {{$support->id}}</h1>

<x-alert/>

<a href="{{route('supports.index') }}">Voltar para as dúvidas</a>

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @method('PUT')
    @include('admin.supports.partials.form', [
        'support' => $support
    ]);
</form>