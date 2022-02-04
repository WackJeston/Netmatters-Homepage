if(contactPage){
  var map1 = L.map('map1').setView([52.23537571640103, 0.15382553610315194], 11);
  var marker = L.marker([52.23537571640103, 0.15382553610315194]).addTo(map1);
  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/basic-v9',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1Ijoid2Fja2plc3RvbiIsImEiOiJja3l1ZWswZm8xZnY4Mnd0Z2p6bng2NWU5In0.vrgq2A2dg0dp2Pt_eWQjVw'
  }).addTo(map1);

  var map2 = L.map('map2').setView([52.576041906814645, 1.1365845718577672], 10);
  var marker = L.marker([52.576041906814645, 1.1365845718577672]).addTo(map2);
  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/basic-v9',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1Ijoid2Fja2plc3RvbiIsImEiOiJja3l1ZWswZm8xZnY4Mnd0Z2p6bng2NWU5In0.vrgq2A2dg0dp2Pt_eWQjVw'
  }).addTo(map2);


  var map3 = L.map('map3').setView([52.55585263927923, 1.713114330095633], 9);
  var marker = L.marker([52.55585263927923, 1.713114330095633]).addTo(map3);
  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/basic-v9',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1Ijoid2Fja2plc3RvbiIsImEiOiJja3l1ZWswZm8xZnY4Mnd0Z2p6bng2NWU5In0.vrgq2A2dg0dp2Pt_eWQjVw'
  }).addTo(map3);
}
