<x-layout title="Atulizar Série">
    <form action="/series/atualizar" method="post">
    @csrf    
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</x-layout>