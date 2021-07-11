@extends('layouts.app')

<title>Welcome</title>

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-success text-uppercase text-marquee"><marquee>selamat datang {{ Auth::user()->name }}</marquee></div>
            <div class="card">
                <div class="card-header">selamat berbelanja</div>

                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus laudantium laborum id ad consequatur cum eveniet amet! Ipsa, culpa ad! Dicta, magnam? Hic omnis cum ipsum nesciunt ea itaque dignissimos beatae voluptas neque rem repudiandae sit repellat, eos quae nam quam excepturi ab saepe reiciendis. Consequatur totam modi tempore, quod esse dolore beatae. Perspiciatis ducimus quae ex est. Quas fugit quo pariatur aliquam excepturi, perferendis nulla officiis neque minus! Qui natus sed obcaecati ut porro libero est ipsa rerum nobis ipsam deserunt, dolor, temporibus sequi suscipit. Impedit ab eaque inventore libero quasi ipsa incidunt architecto earum, dolores, odit repudiandae sequi.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
