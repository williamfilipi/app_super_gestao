<h3>Fornecedores</h3>
{{-- Isso é um comentário --}}


{{-- {{'Texto de teste'}}
@php 

    echo 'Teste de PHP';

@endphp --}}


@isset ( $fornecedores )

    
    @forelse($fornecedores as $indice => $fornecedor)
    Interação Atual: {{ $loop->iteration}}
    <br>
    Fornecedor: {{ $fornecedor['nome']}}
    <br>    
    Status: {{ $fornecedor['status']}}
    <br>    
    CNPJ: {{ $fornecedor['cnpj'] ?? 'Não informado' }}
    <br>   
    Telefone: {{$fornecedor['ddd'] ?? 'DDD não informado'}} {{$fornecedor['telefone'] ?? 'Telefone não informado'}}
    <br>
    @if($loop->first)
        <p>Primeiro interação</p>
    @endif

    @if($loop->last)
        Última interação
        <br>
        Total de Registros: {{ $loop->count }}
    @endif
    <hr>

    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset 



{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <p>Existem alguns fornecedores cadastrados</p>
@elseif(count($fornecedores) > 10)
    <p>Existem vários forncedores cadastrados</p>
@else
    <p>Não existem fornecedores cadastrados</p>
@endif --}}


{{-- 
@unless($fornecedores[0]['status'] == 'N') O bloco de código só será executado se a condição for falsa 
    <p>Este fornecedor não esta ativo </p>
@endunless
--}}