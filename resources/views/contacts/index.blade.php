@extends('layouts.app')

@section('content')
<div class="row">
    
    <div class="col-sm-10 offset-sm-1 text-center">
    <h1 class="midashi">お問い合わせ一覧</h1>
    </div>
    
    <div class="col-sm-10 offset-sm-1">
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Posted</th>
                <th>Categoly</th>
                <th>Name</th>
                <th>Title</th>
            </thead>
            @if(count($contacts) < 0)
                <tbody></tbody>
                </table>
                <h4>Nothing Messages</h4>
            @else
            <tbody>
                @foreach($contacts as $contact)
                    <tr class="table-info">
                        <td>{{ date_format($contact->created_at,'Y/m/d-H:i')}}</td>
                        <td>{{ $contact->categoly }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{!! link_to_route('contacts.show',$contact->title,$contact->id,['class'=>'text-dark']) !!}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
            
        </table>
        <div class="col-sm-10 offset-sm-1">
            {{ $contacts->render('pagination::bootstrap-4') }}
        </div>
        
    </div>
    
    
    
    
    
</div>





@endsection