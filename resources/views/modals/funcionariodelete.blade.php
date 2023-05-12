<!-- Modal -->
<div class="modal fade" id="confirmaDeleteFun-{{$dadosfuncionarios->id}}" tabindex="-1" aria-labelledby="LabelDeleteFun" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 text-dark" id="LabelDeleteFun">Excluir Funcinário</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="text-dark"> Deseja Realmente Excluir o Funcionário: {{$dadosfuncionarios->nomefun}}? <br/>Está operação não poderá ser alterada.</p>
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