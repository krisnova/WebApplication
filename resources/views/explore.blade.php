@extends('app')

@section('content')
    <div class="nav" xmlns="http://www.w3.org/1999/html">
        <div class="logo">Soundeavor</div>
        <div class="navItem">Profile</div>
        <div class="navItem">Launch Contest</div>
        <div class="navItem selected">Explore Contests</div>
        <div class="navItem">Support</div>
    </div>
    <div class="exploreContent">
        <div class="section explore">
            <div class="subSection">
                <div id="exploreMap"></div>
                <div id="exploreContent"><form>
                        <input type="text" placeholder="Search filters" />
                    </form>
                    <div class="titleHeader">Contest Magnifier</div>
                    <span class="contestCount">1</span>Name: Best contest Ever!<br>
                    <div class="contestInfo">Style Compatibility: 75%<br>
                        Prize: November Festival Performance<br>
                        #Competitors: 240 <br>
                        <a href="" class="competeBtn">Compete</a>
                    </div>
                    <span class="contestCount">2</span>Name: Another great contest!<br>
                    <div class="contestInfo">Style Compatibility: 90%<br>
                        Prize: 30 Soundeavor Credits<br>
                        #Competitors: 340 <br>
                        <a href="" class="competeBtn">Compete</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
    <script>

        var diameter = 850,
                format = d3.format(",d"),
                color = d3.scale.category20c();

        var bubble = d3.layout.pack()
                .sort(null)
                .size([diameter, diameter])
                .padding(1.5);

        var svg = d3.select("#exploreMap").append("svg")
                .attr("width", diameter)
                .attr("height", diameter)
                .attr("class", "bubble");

        // add the tooltip area to the webpage
        var tooltip = d3.select("#exploreMap").append("div")
                .attr("class", "blurb")
                .style("opacity", 0);

        d3.json("/data/flare.json", function(error, root) {
            if (error) throw error;

            var node = svg.selectAll(".node")
                    .data(bubble.nodes(classes(root))
                            .filter(function(d) { return !d.children; }))
                    .enter().append("g")
                    .attr("class", "node")
                    .attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });

            node.append("title")
                    .text(function(d) { return d.className + ": " + format(d.value); });

            node.append("circle")
                    .attr("r", function(d) { return d.r; })
                    .style("fill", function(d) { return color(d.packageName); })
                    .on("click", function(d) {
                        tooltip.transition()
                                .duration(200)
                                .style("opacity", 1);
                        tooltip.html("Soundeavor is a music contest marketplace that uses sophisticated sound analysis " +
                        "to match artists with a universe of opportunities demanding their unique sound.")
                                .style("left", d.x + "px")
                                .style("top", (d.y - 50) + "px");
                    })
                    .on("mouseout", function(d) {
                        tooltip.transition()
                                .duration(200)
                                .style("opacity", 0);
                    });

            node.append("text")
                    .attr("dy", ".3em")
                    .style("text-anchor", "middle")
                    .text(function(d) { return d.className.substring(0, d.r / 3); })
                    .on("click", function(d) {
                        tooltip.transition()
                                .duration(200)
                                .style("opacity", 1);
                        tooltip.html("Soundeavor is a music contest marketplace that uses sophisticated sound analysis " +
                                "to match artists with a universe of opportunities demanding their unique sound.")
                                .style("left", d.x + "px")
                                .style("top", (d.y - 50) + "px");
                    });
        });

        // Returns a flattened hierarchy containing all leaf nodes under the root.
        function classes(root) {
            var classes = [];

            function recurse(name, node) {
                if (node.children) node.children.forEach(function(child) { recurse(node.name, child); });
                else classes.push({packageName: name, className: node.name, value: node.size});
            }

            recurse(null, root);
            return {children: classes};
        }

        d3.select(self.frameElement).style("height", diameter + "px");

    </script>
@stop