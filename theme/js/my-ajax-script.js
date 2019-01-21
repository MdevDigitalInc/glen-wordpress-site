function menuLoad(week, dow)
{
  var data = {
    'action': 'menu_load_action',
    'week': week,
    'dow': dow
  };

  var TODID = ["", "rowMS", "rowL", "rowAS"];

  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post("", data, function(response) {//my_ajax_object.ajax_url
    for(var i = 1; i <TODID.length; i++) {
      var myNode = document.getElementById(TODID[i]);
      while (myNode.firstChild) {
        myNode.removeChild(myNode.firstChild);
      }
    }
    var results = JSON.parse(response);
    results.forEach(function(element) {
      var res = element.Name.split("\n");
      res.forEach(function(text) {
        var myNode = document.getElementById(TODID[element.TOD]);
        var newElem = document.createElement ("span");
        newElem.innerHTML = text;
        newElem.className = "glen-menu-fooditem";
        myNode.appendChild(newElem);
      });
    });
  });
}

//