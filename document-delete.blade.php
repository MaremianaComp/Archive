@extends('layouts.app')
@section('title', 'Удаление документа :: Мои документы') 
@section('content')
    <h2>{{ $document->name }}</h2>
    <p>{{ $document->archive }}</p>
    <p>{{ $document->url }}</p>
    <p>{{ $document->created_at }}</p>
    <p>Автор: {{ $document->user->name }}</p>
    <form action="{{ route('document.destroy', ['document' => $document->id]) }}"
      method="POST">
      @csrf
      @method('DELETE')
      <input type="submit" class="btn btn-danger" value="Удалить">
     </form>
@endsection('content')
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
   </script>
  </body> 
</html>