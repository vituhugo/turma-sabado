<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ isset($produto) ? '/update' : '/store' }}" method="POST">
        @csrf
        <div>
            <label for="">Nome</label>
            <input type="text" name="name" @if(isset($produto)) value="{{ $produto->name }}" @endif>
        </div>
        <div>
            <label for="">Descricao</label>
            <input type="text" name="description" @if(isset($produto)) value="{{ $produto->description }}" @endif>
        </div>
        <div>
            <label for="">Preco</label>
            <input type="text" name="price" @if(isset($produto)) value="{{ $produto->price }}" @endif>
        </div>

        <button>Salvar</button>
    </form>
</body>
</html>