<li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-envelope-o"></i>
        @php
            $unreadMessages = session('unreadMessages', collect());
        @endphp

        @if($unreadMessages->count())
            <span class="label label-success">{{ $unreadMessages->count() }}</span>
        @else
            <span>No unread messages</span>
        @endif

    </a>
    <ul class="dropdown-menu">
        @if(isset($newMessagesCount) && $newMessagesCount > 0)
            <div class="alert alert-info">
                You have {{ $newMessagesCount }} new message(s).
            </div>
        @endif



        <li>
            <ul class="menu">
                @foreach ($unreadMessages as $message)
                    <li>
                        <a href="{{ route('admin.messages.read', $message->id) }}">
                            <div class="pull-left">
                                <img src="{{ asset('path/to/user/avatar') }}" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                                {{ $message->name }}
                                <small><i class="fa fa-clock-o"></i> {{ $message->created_at->diffForHumans() }}</small>
                            </h4>
                            <p>{{ Str::limit($message->message, 50) }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="footer"><a href="{{ route('admin.messages.show') }}">See All Messages</a></li>
    </ul>
</li>
