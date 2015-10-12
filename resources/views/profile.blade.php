@extends('app')

@section('content')
<div class="nav">
    <div class="logo">Soundeavor</div>
    <div class="navItem">Profile</div>
    <div class="navItem">Studio</div>
    <div class="navItem">Account</div>
    <div class="navItem">Filters</div>
    <div class="navItem">About</div>
</div>
<div class="profileContent">
    <div class="section profile">
        <div class="subSection">
            <div class="profilePicture"><img src="{{ URL::asset('/images/zelda-belda.jpg') }}" />
                <span class="name">Zelda B. Derg</span>
                <span class="location">San Francisco, CA</span>
            </div>
            <div class="claimsToFame">
                <span class="titleHeader">Claims to Fame</span>
                <ul>
                    <li class="claims contests"><span class="sdAccent">795</span> Contests Won</li>
                    <li class="claims projects"><span class="sdAccent">33</span> Projects</li>
                    <li class="claims collaborators"><span class="sdAccent">2,780</span> Collaborators</li>
                    <li class="claims collaborators">Best Howl of <span class="sdAccent">2015</span></li>
                </ul>
            </div>
        </div>
        <div class="subSection">
            <div class="profileSkills">
                <span class="titleHeader">Skills</span>
                <span class="skill1"><img src="{{ URL::asset('/images/Microphone.png') }}" /><div class="stars stars_3">skill</div></span>
                <span class="skill2"><img src="{{ URL::asset('/images/orange-guitar-128.gif') }}" /><div class="stars stars_5">skill</div></span>
                <span class="skill3"><img src="{{ URL::asset('/images/product-icon.png') }}" /><div class="stars stars_2">skill</div></span>
            </div>
            <div class="profileInteract">
                <div class="challenge">Challenge</div>
                <div class="collaborate">Collaborate</div>
                <div class="liveLink">Live Link</div>
            </div>
        </div>
        <div class="subSection">
            <div class="profileInfluences">
                <span class="titleHeader">Influences</span>
                <div class="influencesChart"><img src="{{ URL::asset('/images/pie-chart.gif') }}" /></div>
                <ul>
                    <li class="influence">Influence 1</li>
                    <li class="influence">Influence 2</li>
                </ul>
            </div>
            <div class="profileObjectives">
                <span class="titleHeader">Objectives</span>
                <ul>
                    <li class="objective">Objective 1</li>
                    <li class="objective">Objective 2</li>
                    <li class="objective">Objective 3</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section studio">
        <span class="titleHeader">Studio</span>
        <div class="studioContainer">
            <div class="studioBlock top odd"></div>
            <div class="studioBlock top even"><img src="{{ URL::asset('/images/Microphone.png') }}" /></div>
            <div class="studioBlock middle odd"><img src="{{ URL::asset('/images/product-icon.png') }}" /><span class="guide style">Style</span></div>
            <div class="studioBlock middle even"><span class="guide rating">Rating</span></div>
            <div class="studioBlock middle odd"><img src="{{ URL::asset('/images/orange-guitar-128.gif') }}" /></div>
            <div class="studioBlock middle even"></div>
            <div class="studioBlock bottom odd"></div>
            <div class="studioBlock bottom even"></div>
        </div>
    </div>

</div>
@stop