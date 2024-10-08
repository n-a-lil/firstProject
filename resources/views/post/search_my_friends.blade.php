<div id="friend-results" class="friend-results-container">
    @foreach ($userFriends as $friendship)
        <div class="friend-card">
            <div class="friend-avatar" onclick="showUserProfile('{{ $friendship->id }}')"><img src="{{ asset('images/' . $friendship->images) }}"  alt="User Image"></div>
            <div class="friend-details">
                <div class="friend-name">{{ $friendship->name }} {{ $friendship->surname }}</div>
                <div class="friend-actions">
                    <button onclick="showDialog('{{ $friendship->id }}')"><img src="/images/Написать.png" width="30" height="30"></button>
                    <button onclick="removeFromFriends('{{ $friendship->id }}')"><img src="/images/Удалить.png" width="30" height="30"></button>
                </div>
            </div>
        </div>
    @endforeach
</div>
