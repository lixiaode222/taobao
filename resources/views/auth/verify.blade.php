@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">验证您的邮箱地址</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            一个新的验证邮箱的电子邮件已经发送到你的邮箱
                        </div>
                    @endif

                    在继续访问之前，请检查您的电子邮件以获取验证连接，
                    如果你没有收到验证邮箱的电子邮件， <a href="{{ route('verification.resend') }}">请点击此处重新发送</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
