/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function InitialiserCarte() {
	
    var map = L.map('map').setView([ 6.1374800  ,1.2122700], 17);

    // create the tile layer with correct attribution
    var tuileUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png';
    
    var attrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
    
    var osm = L.tileLayer(tuileUrl, {
        minZoom: 8, 
        maxZoom: 17,
        attribution: attrib
    });

    osm.addTo(map);
    
    var marker = L.marker([45.7531152, 4.827906]).addTo(map);
}

$(document).ready(function(){
    InitialiserCarte();
});

