<div class="card mb-3">
    <img src="https://uploads.theartofeducation.edu/2017/06/Intro-e1497381242864.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">@lang('main.list_of_students')</h5>
      <p class="card-text">@lang('main.you_can_find')</p>

      <table class = "table">
        <thead class="thead-light">
            <tr>
                <th scope ="col">CNE</th>
                <th scope ="col">@lang('main.first_name')</th>
                <th scope ="col">@lang('main.second_name')</th>
                <th scope ="col">@lang('main.age')</th>
                <th scope ="col">@lang('main.speaciality')</th>
                <th scope ="col">@lang('main.operations')</th>
            <tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->cne }}</td>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->secondname }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->specality }}</td>
                <td>
                    
                    <a href="{{ url('/edit/'.$student->id) }}" class ="btn btn-sm btn-warning">@lang('main.edit')</a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
  </div>