


var w = 1500, 
    h = 400,
    
    fill = d3.scale.category20(),
    
    nodes = [
        {"atom":"C", "size":150},
        {"atom":"C", "size":150},
        {"atom":"C", "size":150},
        {"atom":"C", "size":150},
        {"atom":"N", "size":100},
        {"atom":"H", "size":50},
        {"atom":"O", "size":30},
        {"atom":"O", "size":30},
        {"atom":"H", "size":50},
        {"atom":"H", "size":50},
        {"atom":"H", "size":50},
        {"atom":"H", "size":50},
        {"atom":"H", "size":50},
        {"atom":"H", "size":50} 
    ],
    
    links = [
        {"source":0, "target":1},
        {"source":1, "target":2},
        {"source":1, "target":3},
        {"source":2, "target":5},
        {"source":2, "target":6},
        {"source":1, "target":4},
        {"source":3, "target":10},
        {"source":3, "target":11},
        {"source":0, "target":7},
        {"source":0, "target":8},
        {"source":0, "target":9},
        {"source":5, "target":12},
        {"source":0, "target":13}
    ],
 
    vis = d3.select("#enlace_quimico").append("svg")
        .attr("width", window.innerWidth,)
        .attr("height", h),
    
    force = d3.layout.force()
        .nodes(nodes)
        .links(links)
        .charge(-3000)
        .friction(0.8)
        .gravity(0.5)
        .size([window.innerWidth,h])
        .start(),
    
    link = vis.selectAll("line")
        .data(links)
        .enter()
        .append("line")
        .attr("class","link"),
    
    node = vis.selectAll(".node")
        .data(nodes)
        .enter()
        .append("g")
        .attr("class","node")
        .call(force.drag);

    node.append("circle")
        .attr("r", function(d) {
            return Math.pow(40*d.size,1/3);
        })
        .attr("fill",function(d) {
            return fill(d.size);
        })
        .attr("stroke","black")
        .attr("stroke-width",2);
    
    node.append("text")
        .attr("class","elemento")
        .attr("dx",function(d) {
            return Math.pow(40*d.size,1/3)+1;
        })
        .attr("dy",".35em")
        .text(function(d) {return d.atom;});
    
    force.on("tick", function() {
        link.attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; });
        
        node.attr("transform", function(d) { 
            return "translate(" + d.x + "," + d.y + ")"; 
        });     
    });




