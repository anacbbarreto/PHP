<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar Série</a>
    
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                
                <!-- Nome da Série (Mostrado por padrão) -->
                <span id="nome-serie-{{ $serie->id }}">{{ $serie->nome }}</span>

                <div class="d-flex align-items-center">

                    <!-- Botão Editar com passagem de id para a função Javascript -->
                    <button class="btn btn-primary btn-sm ms-2" onclick="mostrarInput({{ $serie->id }})">
                        Editar
                    </button>

                    <!-- Formulário escondido inicialmente -->
                    <form id="form-update-{{ $serie->id }}" 
                          action="{{ route('series.update', $serie->id) }}" 
                          method="POST" 
                          class="d-flex align-items-center ms-2"
                          style="display: none;"
                          onsubmit="return confirmarAtualizacao({{ $serie->id }})">
                        @csrf
                        @method('PUT')

                        <!-- Input para edição (inicialmente escondido) -->
                        <input type="text" name="nome" id="input-nome-{{ $serie->id }}" 
                               class="form-control form-control-sm me-2" 
                               value="{{ $serie->nome }}" required>

                        <!-- Botão para salvar -->
                        <button type="submit" class="btn btn-success btn-sm">
                            Salvar
                        </button>
                    </form>

                    <!-- Botão Deletar -->
                    <form action="{{ route('series.destroy', $serie->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm ms-2" 
                                onclick="return confirm('Tem certeza que deseja excluir?')">
                            Deletar
                        </button>
                    </form>

                </div>    
            </li>
        @endforeach
    </ul>

    <script>
        function mostrarInput(serieId) {
            // Esconde o campo de input
            document.getElementById("input-nome-" + serieId).style.display = "none";
            
            // Exibe o formulário de edição, mostrando o campo de input
            document.getElementById("form-update-" + serieId).style.display = "flex";
        }

        function confirmarAtualizacao(serieId) {
            // Pega o nome antigo e o novo
            const nomeAntigo = document.getElementById("nome-serie-" + serieId).textContent;
            const nomeNovo = document.getElementById("input-nome-" + serieId).value;

            // Exibe um pop-up de confirmação com "DE -> PARA"
            return confirm(`Tem certeza que deseja atualizar?\n\nDE: ${nomeAntigo}\nPARA: ${nomeNovo}`);
        }
    </script>

</x-layout>
