<div class="modal fade modal-slide-in-right"  aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$sol->IDsolicitor}}" >
    {{ Form::Open(array('action'=>array('RoleController@destroy',$rol->idrole),'method'=>'delete')) }}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">x</span>
                </button>
                <h4 class="modal-title">Are you sure you want to remove this solisitant?</h4>
            </div>
            <div class="modal-body">
                <p>You can edit if you just need to change something</p>
            </div>
            <div class="modal-footer">
                <a href="" class="submit">Remove</a>
                <a href="{{URL::action('RoleController@edit', $rol->idrole)}}" >Editar</a>
                <a href="" data-dismiss="modal">Cancel</a>
            </div>

        </div>
    </div>
    {{ Form::Close() }}
</div>