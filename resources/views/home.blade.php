@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mt-5">The Fashion Enthusiast Assets</h2>
        <div class="row">
            <div class="col-md-12" id="fm-main-block">
                <div id="fm" style="height: 100vh;"></div>
            </div>
        </div>
    </div>

    <!-- File manager -->
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');

            fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
                window.opener.fmSetLink(fileUrl);
                window.close();
            });
        });
    </script>
@endsection
