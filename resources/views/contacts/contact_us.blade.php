@extends('layouts.app')

@section('content')
<div class="row">
        <h1 class="col-sm-10 offset-1"><b>Contact</b></h1>
    <div class="card col-sm-10 offset-1">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h4>各種お問い合わせ、ご質問等は以下のフォーム画面よりお願い致します。</h4>
            </li>
            <li class="list-group-item">
                    <div class="d-flex">
                        <div class=" card card-body col-sm-6 mr-2 border-info">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><h4>Tell : 080-6780-9080(直通)</h4></li>
                                <li class="list-group-item"><h4>Address : 〒368-0026　埼玉県秩父市相生町10-7</h4></li>
                                <li class="list-group-item"><h4>Name : 中谷　嶺太</h4></li>
                            </ul>    
                        </div>
                        <div class=" card card-body col-sm-6 ml-2 mt-0 ml-0 mb-0 mr-0">
                          <iframe class="col-sm-12 mt-0 ml-0 mb-0 mr-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3227.5846702768754!2d139.08414631555726!3d36.006013519697966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ec976d6e9d619%3A0x22afe6cc6d8c9ebb!2z44CSMzY4LTAwMjYg5Z-8546J55yM56ep54i25biC55u455Sf55S677yR77yQ4oiS77yX!5e0!3m2!1sja!2sjp!4v1557078850464!5m2!1sja!2sjp" width="740" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
            </li>
            <li class="list-group-item">
                @include('contacts.contact_form',['contact'=>$contact])
            </li>
        </ul>
    </div>    
    



</div>




@endsection