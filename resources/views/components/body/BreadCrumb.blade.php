
 <div class="row page-titles">
     <div class="col-md-5 align-self-center">
         <h3 class="text-primary">Dashboard1</h3>
     </div>
     <div class="col-md-7 align-self-center">
         @if (count($breadcrumbs))
         <ol class="breadcrumb">
             @foreach ($breadcrumbs as $item)
                 <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                     @isset($item['href'])
                         @if (!$loop->last)
                             <a href="{{ $item['href'] }}">{{ $item['name'] }}</a>
                         @else
                             <a href="javascript:void(0)">{{ $item['name'] }}</a>
                         @endif
                     @else
                         <a href="javascript:void(0)">{{ $item['name'] }}</a>
                     @endisset
                 </li>
             @endforeach

         </ol>

         @endif
     </div>
 </div>
