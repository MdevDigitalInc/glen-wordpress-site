jQuery( document ).on( 'click', '#btnUpdate', function($) {
  

  var id = document.getElementById("txt_id").value;
  var name = document.getElementById("txt_name").value;
  var history = document.getElementById("txt_history").value;
  var quote = document.getElementById("txt_quote").value;
  var teamId = document.getElementById("txt_tid").value;

  

  var query = 'UPDATE tblEmployees SET Name = "' + name + '", History = "' + history + '", Quote = "' + quote + '", TeamID = ' + teamId + ' WHERE ID = ' + id + ';'

  alert(query);

  var data = {
    'action': 'my_action',
    'query': query//"UPDATE tblEmployees SET Name = '" + name + "', History = '" + history + "', Quote='" + quote + "', TeamID = " + teamId + " WHERE ID = " + id + ";"
  };

    //data.query = 'UPDATE tblEmployees SET TeamID = 3 WHERE ID = 1';

  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    alert('Got this from the server: ' + response);
  });

})



jQuery( document ).on( 'click', '#btnCreate', function($) {
  
  var name = document.getElementById("txt_name").value;
  var history = document.getElementById("txt_history").value;
  var quote = document.getElementById("txt_quote").value;
  var teamId = document.getElementById("txt_tid").value;


  var query = "INSERT INTO tblEmployees (Name, History, Quote, TeamID) VALUES( '" + name + "','" + history + "','" + quote + "'," + teamId + ");"

  alert(query);

  var data = {
    'action': 'my_action',
    'query': query
  };


  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    alert('Got this from the server: ' + response);
  });

})



jQuery( document ).on( "change", "#ddEmp", function() {
  
  var id = document.getElementById("ddEmp").value;

  var query = "Select * from tblEmployees where ID = " + id;

  var data = {
    'action': 'my_action',
    'query': query
  };
  
  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    //alert('Got this from the server: ' + JSON.stringify(response));
    if( response.length > 0)
    {
      document.getElementById("txt_id").value =  response[0].ID;
      document.getElementById("txt_name").value =  response[0].Name;
      document.getElementById("txt_history").value =  response[0].History;
      document.getElementById("txt_quote").value =  response[0].Quote;
      document.getElementById("txt_tid").value =  response[0].TeamID;
      document.getElementById("btnUpdate").hidden = false;
      (document.getElementById("btnCreate")).hide();
    }else{
      document.getElementById("txt_id").value = "";
      document.getElementById("txt_name").value =  "";
      document.getElementById("txt_history").value =  "";
      document.getElementById("txt_quote").value =  "";
      document.getElementById("txt_tid").value =  "";
      document.getElementById("btnUpdate").css("visibility", "hidden");
      ("#btnCreate").css("visibility", "visible");
    }
  });

});


jQuery( document ).on( "change", "#ddTeam", function() {
  
  var id = document.getElementById("ddTeam").value;
  alert(id);
  var query = "Select ID, Name from tblEmployees where TeamID = " + id;

  var data = {
    'action': 'my_action',
    'query': query
  };
  var msTM = document.getElementById('msTeamMemebers');
  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    alert('Got this from the server: ' + JSON.stringify(response));
    if( response.length > 0)
    {
      jQuery.each(response, function(key,values) {
        var option = new Option(values.Name,values.ID);
        msTM.append(option);
      });
    }else{
    }
  });

});


