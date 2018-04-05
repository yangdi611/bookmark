<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared._errors')
  {{ csrf_field() }}
  <textarea class="form-control" rows="3" placeholder="Say something..." name="content">{{ old('content') }}</textarea>
  <button type="submit" class="btn btn-primary float-right">发布</button>
</form>
