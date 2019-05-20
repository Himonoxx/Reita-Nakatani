@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-10 offset-1">
        <h1 class="midashi"><b>Contact</b></h1>
    </div>
    <div class="card col-sm-10 offset-1">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h4>各種お問い合わせ、ご質問等は以下のフォーム画面よりお願い致します。</h4>
            </li>
            <li class="list-group-item">
                    <div class="d-flex">
                        <div class=" card card-body col-sm-6 mr-2 border-info">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><h4>Tell : 　準備中　</h4></li>
                                <li class="list-group-item"><h4>Address : 　準備中　</h4></li>
                                <li class="list-group-item"><h4>Name : 中谷　嶺太</h4></li>
                            </ul>    
                        </div>
                        <div class=" card card-body col-sm-6 ml-2 mt-0 ml-0 mb-0 mr-0">
                          <iframe class="col-sm-12 mt-0 ml-0 mb-0 mr-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206625.50673660848!2d138.80374364119953!3d35.98307241229303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601eb0c30e7fa8ab%3A0x3192a5938ec85b4f!2z5Z-8546J55yM56ep54i25biC!5e0!3m2!1sja!2sjp!4v1558336612705!5m2!1sja!2sjp" width="740" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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