<x-layout>
    <div class="note-container">
        <a class="new-note-btn" href="{{route('note.create')}}">New Note</a>
        <div class="notes" >
            @foreach ($notes as $note)
            <div class="note">
                <div class="note-body">
                    {{ Str::words($note->note,30)}}     
                </div>
                <div class="note-buttons">
                    <a class="note-edit-button" href="{{route('note.show', $note)}}">View</a>
                    <a class="note-edit-button" href="{{route('note.edit', $note)}}">Edit</a>
                    <form action="{{route('note.destroy',$note)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
            
        </div>
        {{$notes->links()}}
    </div>
</x-layout>
