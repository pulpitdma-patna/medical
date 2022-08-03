<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>{{ __('labels.backend.access.users.tabs.content.overview.avatar') }}</th>
                <td><img src="{{ $user->getAvtar() }}" class="user-profile-image" height="100"/></td>
            </tr>

            <tr>
                <th>{{ __('labels.backend.access.users.tabs.content.overview.name') }}</th>
                <td>{{ $user->name }}</td>
            </tr>

            <tr>
                <th>{{ __('labels.backend.access.users.tabs.content.overview.email') }}</th>
                <td>{{ $user->email }}</td>
            </tr>

            <tr>
                <th>{{ __('labels.backend.access.users.tabs.content.overview.status') }}</th>
                <td>@include('backend.auth.user.includes.status', ['user' => $user])</td>
            </tr>

            <tr>
                <th>{{ __('labels.backend.access.users.tabs.content.overview.confirmed') }}</th>
                <td>@include('backend.auth.user.includes.confirm', ['user' => $user])</td>
            </tr>

            <tr>
                <th>{{ __('labels.backend.access.users.tabs.content.overview.timezone') }}</th>
                <td>@if( $user->timezone)
                        {{ $user->timezone }}
                    @else
                       UTC 
                    @endif
                </td>
            </tr>

            <tr>
                <th>{{ __('labels.backend.access.users.tabs.content.overview.last_login_at') }}</th>
                <td>
                    @if($user->last_login_at)
                        {{ timezone()->convertToLocal($user->last_login_at) }}
                    @else
                      N/A
                    @endif
                </td>
            </tr>
        </table>
    </div>
</div><!--table-responsive-->