@extends('app')

@section('content')
    <div class="nav" xmlns="http://www.w3.org/1999/html">
        <div class="logo">Soundeavor</div>
        <div class="navItem selected">Profile</div>
        <div class="navItem">Launch Contest</div>
        <div class="navItem">Explore Contests</div>
        <div class="navItem">Support</div>
    </div>
<div class="profileContent">
    <div class="section profile">
        <div class="subSection">
            <div class="profilePicture">
                <img src="{{ URL::asset('/images/zelda-belda.jpg') }}" />
            </div>
            <div class="profileSkills">
                <span class="titleHeader name"><span class="emphasis">Zelda</span> B. Derg</span>
                <span class="location">San Francisco, CA</span>
                <div class=""> <svg height="30" width="30">
                        <circle class="dot" cx="15" cy="15" r="15" fill="#F78B1C"/>
                    </svg> <span class="skill1">Drums (18 years)</span></div>
                <div class="">
                     <svg height="30" width="30">
                        <circle class="dot" cx="15" cy="15" r="15" fill="#D40000" />
                    </svg>
                    <span class="skill2">Guitar (13 years)</span>
                </div>
                <div class="">
                    <svg height="30" width="30">
                        <circle class="dot" cx="15" cy="15" r="15" fill="#6CC8AF" />
                    </svg>
                    <span class="skill3">What I Listen To</span></div>
            </div>
            <div class="profileInteract">
                <span class="titleHeader"><span class="emphasis">Link</span> Points</span>
                <div class="challenge">Challenge</div>
                <div class="collaborate">Collaborate</div>
                <div class="liveLink">Live Link</div>
            </div>
            <div class="claimsToFame">
                <span class="titleHeader"><span class="emphasis">Vital</span> Stats</span>
                <ul>
                    <li class="claims contests"><span class="sdAccent">795</span> Contests Won</li>
                    <li class="claims projects"><span class="sdAccent">33</span> Projects</li>
                    <li class="claims collaborators"><span class="sdAccent">2,780</span> Collaborators</li>
                    <li class="claims collaborators">Best Howl of <span class="sdAccent">2015</span></li>
                </ul>
            </div>
        </div>
        <div class="subSection">
            <div class="profileInfluences">
                <span class="titleHeader"><span class="emphasis">Musical</span> Identity</span>
                <img src="{{ URL::asset('/images/musical_identity.png') }}" />
            </div>
            <div class="profileObjectives">
                <span class="titleHeader"><span class="emphasis">Contest</span> Action</span>
                <div id="map"></div>
            </div>
        </div>
    </div>


</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>
    <script type="text/javascript">
    var margin = {top: 20, right: 20, bottom: 30, left: 40},
    width = 650 - margin.left - margin.right,
    height = 275 - margin.top - margin.bottom;

    /*
    * value accessor - returns the value to encode for a given data object.
    * scale - maps value to a visual display encoding, such as a pixel position.
    * map function - maps from data value to display value
    * axis - sets up axis
    */

    // setup x
    var xValue = function(d) { return d.Calories;}, // data -> value
    xScale = d3.scale.linear().range([0, width]), // value -> display
    xMap = function(d) { return xScale(xValue(d));}, // data -> display
    xAxis = d3.svg.axis().scale(xScale).orient("bottom");

    // setup y
    var yValue = function(d) { return d["Protein (g)"];}, // data -> value
    yScale = d3.scale.linear().range([height, 0]), // value -> display
    yMap = function(d) { return yScale(yValue(d));}, // data -> display
    yAxis = d3.svg.axis().scale(yScale).orient("left");

    // setup fill color
    var cValue = function(d) { return d.Manufacturer;},
    color = d3.scale.ordinal()
            .domain(["Drum", "Guitar"])
            .range(["#F78B1C", "#D40000"]);

    // add the graph canvas to the body of the webpage
    var svg = d3.select("#map").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
    .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

    // add the tooltip area to the webpage
    var tooltip = d3.select("#map").append("div")
    .attr("class", "tooltip")
    .style("opacity", 0);

    // load data
    d3.csv("/data/cereal.csv", function(error, data) {

    // change string (from CSV) into number format
    data.forEach(function(d) {
    d.Calories = +d.Calories;
    d["Protein (g)"] = +d["Protein (g)"];
    //    console.log(d);
    });

    // don't want dots overlapping axis, so add in buffer to data domain
    xScale.domain([d3.min(data, xValue)-1, d3.max(data, xValue)+1]);
    yScale.domain([d3.min(data, yValue)-1, d3.max(data, yValue)+1]);

    /* x-axis
    svg.append("g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + height + ")")
    .call(xAxis)
    .append("text")
    .attr("class", "label")
    .attr("x", width)
    .attr("y", -6)
    .style("text-anchor", "end")
    .text("Calories");

    // y-axis
    svg.append("g")
    .attr("class", "y axis")
    .call(yAxis)
    .append("text")
    .attr("class", "label")
    .attr("transform", "rotate(-90)")
    .attr("y", 6)
    .attr("dy", ".71em")
    .style("text-anchor", "end")
    .text("Protein (g)");
    */

    // draw dots
    svg.selectAll(".dot")
    .data(data)
    .enter().append("circle")
    .attr("class", "dot")
    .attr("r", 15)
    .attr("cx", xMap)
    .attr("cy", yMap)
    .style("fill", function(d) { return color(cValue(d));})
    .on("mouseover", function(d) {
    tooltip.transition()
    .duration(200)
    .style("opacity", .9);
    tooltip.html(d["Cereal Name"] + "<br/>" + xValue(d)
    + " Contestants<br/> " + yValue(d) + " Hours <br/> <a href='/contest'>Compete</a>")
    .style("left", (d3.event.pageX + 5) + "px")
    .style("top", (d3.event.pageY - 28) + "px");
    })
    .on("click", function(d) {
    tooltip.transition()
    .duration(500)
    .style("opacity", 0);
    });

    /* draw legend
    var legend = svg.selectAll(".legend")
    .data(color.domain())
    .enter().append("g")
    .attr("class", "legend")
    .attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; });

    // draw legend colored rectangles
    legend.append("rect")
    .attr("x", width - 18)
    .attr("width", 18)
    .attr("height", 18)
    .style("fill", color);

    // draw legend text
    legend.append("text")
    .attr("x", width - 24)
    .attr("y", 9)
    .attr("dy", ".35em")
    .style("text-anchor", "end")
    .text(function(d) { return d;})
    */
    });
</script>
@stop