 @if(Session::has('flash_notification.message'))
    <p class="notification is-{{ Session::get('flash_notification.level') }}">{{ Session::get('flash_notification.message') }}</p>
@endif
