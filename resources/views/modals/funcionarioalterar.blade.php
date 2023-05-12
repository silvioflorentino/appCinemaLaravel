<!-- Modal -->
<div class="modal fade" id="AlterarFun-{{$dadosfuncionarios->id}}" tabindex="-1" aria-labelledby="LabelDeleteFun" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-dark" id="LabelDeleteFun">Alterar Funcinário</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-dark"> </p>

                <form method="post" action="{{route('alterar-banco-funcionario',$dadosfuncionarios->id)}}">
                @method('put')    
                @csrf
                    <div class="mb-1 form-check text-dark">
                        <label for="nomeInput" class="form-label">Nome:</label>
                        <input type="text" name="nomefun" value="{{$dadosfuncionarios->nomefun}}" class="form-control" id="nomeInput">
                    </div>

                    <div class="mb-1 form-check text-dark">
                        <label for="emailInput" class="form-label">Email:</label>
                        <input type="email" name="emailfun" value="{{$dadosfuncionarios->emailfun}}" class="form-control" id="emailInput">
                    </div>

                    <div class="mb-1 form-check text-dark">
                        <label for="whatsappInput" class="form-label">Whatsapp:</label>
                        <input type="text" name="whatsappfun" value="{{$dadosfuncionarios->whatsappfun}}" class="form-control" id="whatsappInput">
                    </div>

                    <div class="mb-1 form-check text-dark">
                        <label for="cpfInput" class="form-label">CPF:</label>
                        <input type="text" name="cpffun" value="{{$dadosfuncionarios->cpffun}}" class="form-control" id="cpfInput">
                    </div>

                    <div class="mb-1 form-check text-dark">
                        <label for="senhaInput" class="form-label">Senha:</label>
                        <input type="password" name="senhafun" value="{{$dadosfuncionarios->senhafun}}" class="form-control" id="senhaInput">
                    </div>


                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form method="post" action="{{route('apagar-funcionario',$dadosfuncionarios->id)}}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger"> Confirmar </button>
                </form>
            </div>
        </div>
    </div>
</div>