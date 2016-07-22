@extends('keurmerk')

@section('content')
    <div class="home">
        <div class="logo">
            <a href="/"><img src="/images/select/logo.png" alt="Stichting Nivoh" /></a>
        </div>
        <div class="select">
            <a href="{{ Content::link('installateur') }}" class="installateur">
                <div class="buttonContainer">
                    <div class="buttonInside">
                        <div class="button">
                            <span class="ikben">Ik ben een:</span>

                            <div class="branche">
                                <span class="name">Adviseur</span>
                                <span class="name">Installateur</span>
                                <span class="name">Inspecteur</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ Content::link('opdrachtgever') }}" class="opdrachtgever">
                <div class="buttonContainer">
                    <div class="buttonInside">
                        <div class="button">
                            <span class="ikben">Ik ben een:</span>

                            <div class="branche">
                                <span class="name">Opdrachtgever</span>
                                <span class="name">Branchevereniging</span>
                                <span class="name">Architect</span>
                                <span class="name">Anders</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection