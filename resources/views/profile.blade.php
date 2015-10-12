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
            <div class="profilePicture"><img src="" />
                <span class="location">San Francisco, CA</span>
            </div>
            <div class="claimsToFame">
                <span class="titleHeader">Claims to Fame</span>
                <ul>
                    <li class="claims contests">Contests Won</li>
                    <li class="claims projects"># Projects</li>
                    <li class="claims collaborators"># Collaborators</li>
                </ul>
            </div>
        </div>
        <div class="subSection">
            <div class="profileSkills">
                <span class="titleHeader">Skills</span>
                <span class="skill1">skill</span>
                <span class="skill2">skill</span>
                <span class="skill3">skill</span>
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
                <div class="influencesChart"><img src="" /></div>
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
        <span class="header">Studio (Public Version)</span>
        <div class="studioContainer">
            <div class="studioBlock"></div>
            <div class="studioBlock"></div>
            <div class="studioBlock"></div>
            <div class="studioBlock"></div>
            <div class="studioBlock"></div>
            <div class="studioBlock"></div>
            <div class="studioBlock"></div>
            <div class="studioBlock"></div>
        </div>
    </div>

</div>
@stop