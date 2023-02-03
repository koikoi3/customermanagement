@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">顧客新規登録</div>
                    <form action="/customers" method="POST">
                        @csrf
                        <p>氏名：</p>
                        <input type="text" name="name" value="{{ old('name') }}" required>
                        @if ($errors->first('name'))
                            <br><p class="validation">*{{$errors->first('name')}}</p>
                        @endif
                        <p>店舗番号：</p>
                        <input type="text" pattern="[1-3]" name="shop_id" value="{{ old('shop_id') }}" required>
                        @if ($errors->first('shop_id'))
                            <br><p class="validation">*{{$errors->first('shop_id')}}</p>
                        @endif
                        <p style="font-size: 0.75em">1 東京本店, 2 名古屋支店, 3 大阪支店</p>
                        <p>郵便番号：</p>
                        <input type="text" placeholder="半角数字７文字"　name="postal" value="{{ old('postal') }}" required>
                        @if ($errors->first('postal'))
                            <br><p class="validation">*{{$errors->first('postal')}}</p>
                        @endif
                        <p>住所：</p>
                        <input type="text" name="address" value="{{ old('address') }}" required>
                        @if ($errors->first('address'))
                            <br><p class="validation">*{{$errors->first('address')}}</p>
                        @endif
                        <p>メール：</p>
                        <input type="email" name="email" value="{{ old('email') }}" required>
                        @if ($errors->first('email'))
                            <br><p class="validation">*{{$errors->first('email')}}</p>
                        @endif
                        <p>生年月日：</p>
                        <input type="date" name="birthdate" value="{{ old('birthdate') }}" required>
                        @if ($errors->first('birthdate'))
                            <br><p class="validation">*{{$errors->first('birthdate')}}</p>
                        @endif
                        <p>電話番号：</p>
                        <input type="text" name="phone" pattern="[0-9]{10,11}" value="{{ old('phone') }}" required>
                        @if ($errors->first('phone'))
                            <br><p class="validation">*{{$errors->first('phone')}}</p>
                        @endif
                        <p>クレーマーフラグ：</p>
                        <input type="text" pattern="[0-1]" name="kramer_flag" value="{{ old('kramer_flag') }}" required>
                        @if ($errors->first('kramer_flag'))
                            <br><p class="validation">*{{$errors->first('kramer_flag')}}</p>
                        @endif
                        <p style="font-size: 0.75em">0 問題ない顧客, 1 クレーマー顧客</p>
                        <p style="text-align: center"><button class="btn btn-primary" type="submit">　　登　録　　</button></p>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
@endsection