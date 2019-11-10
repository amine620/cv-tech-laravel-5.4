<script>
        window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 5000);
    </script>
    @if(session()->has('add'))
    <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> {{session()->get('add')}}
          </div>
    
        
    @endif
    @if(session()->has('delete'))
    <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> {{session()->get('delete')}}
          </div>
    
        
    @endif
    @if (session()->has('image'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>error!</strong> {{session()->get('image')}}
      </div>
        
    @endif
    @if (session()->has('update'))
    <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>error!</strong> {{
        session()->get('update')
      }}
    </div>
    
        
    @endif