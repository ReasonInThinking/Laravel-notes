<?php 
return redirect()->back()->with("victory", "Article uploaded!");


// On the Page 

@if(session('success'))
    <div style="color: green; font-weight: bold;">
        {{ session('victory') }}
    </div>
@endif
