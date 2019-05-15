@if(Auth::user()->can('edit_'.$entity.'s'))
    
        <a href="{{ route($entity.'.edit', [str_singular($entity) => $id])  }}" class="action-btns">
                <span class="glyphicon glyphicon-pencil"></span>
            </a> 
@endif
@if(Auth::user()->can('delete_'.$entity.'s'))
   
    {!! Form::open( ['method' => 'delete', 'url' => route($entity.'.destroy', ['user' => $id]), 'style' => 'display: inline', 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}  
                    <a href="javascript:;" class="action-btns"><span class="glyphicon glyphicon-trash"></span></a>
                 {{Form::close()}} 
@endif
