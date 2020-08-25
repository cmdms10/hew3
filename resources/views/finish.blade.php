@extends('layout.template')

@section('content')
    <main class="container">
        <div class="row">
            <div class="valign-wrapper finishMsg">
                <h4 class="center-align">プロジェクトを作成しました。</h4>
            </div>

            <form action="{{ route("home") }}" method="get" class="col s6 center offset-s3 formRange">
                <button class="btn-large btnPosition">
                    Topへ戻る
                </button>
            </form>
        </div>
    </main>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/finish.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/finish.js') }}"></script>
@endsection
