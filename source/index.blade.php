@extends('_layouts.master')

@section('body')
    <div id="content">

        <div class="center-container">
            <span class="name">edyy</span>
            <div class="social-media-container">
                <a href="https://twitter.com/edyy__k" target="_blank" class="links">
                    @include('_icons.twitter')
                    <span class="link-text">Twitter</span>
                </a>

                <a href="https://github.com/edyy-k" target="_blank" class="links">
                    @include('_icons.github')
                    <span class="link-text">GitHub</span>
                </a>
            </div>
        </div>

    </div>
@endsection
