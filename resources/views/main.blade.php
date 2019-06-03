@extends('layouts.app')
@section('content')

    <section id="tabs" class="project-tab">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-teams"
                               role="tab" aria-controls="nav-home" aria-selected="true">Teams</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-players"
                               role="tab" aria-controls="nav-profile" aria-selected="false">Players</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-teams" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            <table class="table" cellspacing="0">
                                @include('partials.teams.teams')
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-players" role="tabpanel" aria-labelledby="nav-profile-tab">
                            @include('partials.players')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
