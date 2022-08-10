 <div class="col-md-3 main_left">
     <ul>
         <h3>{{ __('messages.system') }}</h3>
         <li><a href="{{ route('admin.user.index') }}">{{ __('messages.user') }}</a></li>
         <li><a href="{{ route('admin.role.index') }}">{{ __('messages.role') }}</a></li>
         <li><a href="{{ route('admin.permission.index') }}">{{ __('messages.per') }}</a></li>
         <li><a href="{{ route('admin.permission-group.index') }}">{{ __('messages.per-group') }}</a></li>

     </ul>
     <ul>
         <h3>{{ __('messages.catalog') }}</h3>
         <li><a href="{{ route('admin.product.index') }}"> {{ __('messages.category') }}</a></li>
         <li><a href="{{ route('admin.category.index') }}">{{ __('messages.product') }}t</a></li>
     </ul>
     <a href="{{ route('admin.lang', ['lang' => 'vi']) }}">Tiếng Việt</a>
     <a href="{{ route('admin.lang', ['lang' => 'en']) }}">Tiếng Anh</a>

 </div>
