<h1>Dados do suporte</h1>

<ul>
    <li> Assunto: {{ $support->subject }}</li>
    <li> Status: {{ $support->status }}</li>
    <li> Descrição: {{ $support->body }}</li>
</ul>

<form action="{{ route('supports.destroy', $support->id) }}" method="POST">
    @csrf
    @method('delete')
<button>Deletar</button>
</form>