@if ($paginator->lastPage() > 1)
    <div class="container">
        <div class="row">
            <div class="span12">
            
                <div class="navigation pagination">
                    
                    <div class="nav-links">   
                        @for ($i = 1; $i <= $paginator->lastPage(); $i++)                          
                            <a class="page-numbers {{ ($paginator->currentPage() == $i) ? ' current' : '' }}" href="{{ $paginator->url($i) }}"><span class="meta-nav screen-reader-text">Page</span>{{ $i }}</a>
                        @endfor
                    </div>
                    
                </div>
            
            </div>
        </div>
    </div>
@endif